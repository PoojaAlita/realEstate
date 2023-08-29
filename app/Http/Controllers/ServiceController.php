<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Service,Message};
use Auth;
use Pusher\Pusher;
use App\Events\StatusLiked;


class ServiceController extends Controller
{
    /*Dashboard Of Service*/
    public function index()
    {
        return view('pages.service.service_listing');
    }

    //Storing And Updating Data Of Service
    public function store(Request $request)
    {   
        $request->validate(
            [
              'title'=> 'required',
              'description' =>'required',
              'file' => 'required'.$request->id  
            ]
        );

        try {
         

            $getFile = Service::where('id', $request->id)->first('file');
            if ($request->file) {
                if (isset($getFile['file']) && $getFile['file'] != "" && file_exists(public_path() . '/images/' . $getFile['file'])) {

                    unlink(public_path() . '/images/' . $getFile['file']);
     
                }
                $fileName = time() . '_' . $request->file->getClientOriginalName();
                $request->file->move(public_path('assets/images/service'), $fileName);

            }elseif (isset($getFile) && $getFile['file']) {

                $fileName = $getFile['file'];
     
            } else {
     
                $fileName = "";
     
            }

            $serviceData = Service::updateOrCreate([
                'id' => $request->id
            ],[
                'title' => $request->title,
                'description' => $request->description,
                'file' =>$fileName
            ]);

            $id = Auth::user()->id;

            Message::Create([
                'from' => $id,
                'message' =>$serviceData->title
            ]);

            $options = array(
                'cluster' => 'ap2',
                'useTLS' => true
            );
            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );

            $data = ['from' => $id];
            $pusher->trigger('channel', 'notice', $data);

            
            $response = [
                'status' => true,
                'message' => 'Service Data'.( $request->id == NULL ? ' Added' : ' Updated').' Successfully',
                'icon' => 'success',
            ];

        } catch (\Throwable $th) {
            $response = [
                'status' => false,
                'message' => 'Something Went Wrong! Please Try Again.',
                'icon' => 'error',
            ];
        }

        return response($response);
       
    }

     //Listing Data Of Service
      public function listing(){
        $data['service']= Service::where('status',1)->get(['id','title','file','description']);
        $result = [];

        foreach ($data['service'] as $key=>$service) {
            $service_file = '';
            $service_file .= '<img class="rounded-circle" src="/assets/images/service/'.$service->file.'" height="50px" width="50px" alt="">';

            $button = '';
                $button .= '<button class="edit_service btn btn-sm btn-success m-1"  data-id="'.$service['id'].'" data-url="'.url('service/delete').'">
                <i class="mdi mdi-square-edit-outline"></i>
                </button>';
        
                $button .= '<button class="delete btn btn-sm btn-danger m-1" data-id="'.$service['id'].'">
                <i class="mdi mdi-delete"></i>
                </button>';
                
            $result[] = array(
            "0"=>$key+1,
            "1"=>ucfirst($service->title),
            "2"=>$service_file,
            "3"=>ucfirst($service->description),
            "4"=>$button
            );
        }
        return response()->json(['data'=>$result]);
    }
     //Show Data Of Service
     public function edit(Request $request)
     {
         try {
             $data['service'] = Service::where('id',$request->id)->first(['id','title','file','description']);

             if(!is_null($data) ){
                 $response = [
                     'data'=>$data,
                     'status'=>true,
                 ];
             }
         }catch (\Throwable $e) {
             $response = [
                 'status' => false,
                 'message' => "Something Went Wrong! Please Try Again.",
                 'icon' => 'error',
             ];
         }
         return response($response);
     }
 

    //Remove Data Of Servoce
    public function delete(Request $request)
    {
        try {
            $update['status']=2;
            Service::where('id',$request->id)->update($update);
            $response = [
                'status' => true,
                'message' => "Servece Data Deleted Successfully",
                'icon' => 'success',
            ];
        }catch (\Throwable $e) {
            $response = [
                'status' => false,
                'message' => "Something Went Wrong! Please Try Again.",
                'icon' => 'error',
            ];
        }
        return response($response);
    }

    //Update Notification Data
    public function notification(Request $request){
        try {
            $update['is_read'] = 1;
            $data = Message::where('id',$request->id)->update($update);
            if(!is_null($data) ){
                $response = [
                    'status'=>true,
                ];
            }
        } catch (\Throwable $th) {
            $response = [
                'status' => false,
                'message' => "Something Went Wrong! Please Try Again.",
                'icon' => 'error',
            ];
        }
    }
}
