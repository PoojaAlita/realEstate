<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>@yield('title') | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- CSRF Token -->
        <meta name="_token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        
        <link href="{{asset('assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css') }}"  rel="stylesheet">
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css') }}" rel="stylesheet">
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css') }}" rel="stylesheet">
         <!-- DataTables -->
         <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
         <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
         <!--Custome Css-->

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        @yield('custome-css');
    
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include('layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.sidebar')
           
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                @yield('content')

                
                <!-- End Page-content -->
                @include('layouts.footer')
        
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('assets/css/bootstrap-dark.min.css') }}" 
                            data-appStyle="{{asset('assets/css/app-dark.min.css') }}" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('assets/css/app-rtl.min.css') }}" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
                    <div class="d-grid">
                        <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->  
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

                <!-- JAVASCRIPT -->
                <script src="{{asset('assets/libs/jquery/jquery.min.js') }}"></script>
                <!-- Pusher -->
                <script src="https://js.pusher.com/7.2/pusher.min.js"></script> 
               
                
                <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
                <script src="{{asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
                <script src="{{asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <!-- Peity chart-->
        <script src="{{asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
        
        <!-- Plugin Js-->
        <script src="{{asset('assets/libs/chartist/chartist.min.js') }}"></script>
        <script src="{{asset('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{asset('assets/js/pages/dashboard.init.js') }}"></script>
        <script src="{{asset('assets/js/app.js') }}"></script>
         <!-- Required datatable js -->
        <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
          <!-- url -->
       <script type="text/javascript">
        $.ajaxSetup({  
         headers: {
             "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
         },
       });
         var aurl = {!! json_encode(url('/')) !!}
     </script>
     
     <!-- Custome Script--->
     <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
     <script src="{{asset('assets/js/notification.js')}}"></script>

     @yield('custome-script')
    </body>

</html>

