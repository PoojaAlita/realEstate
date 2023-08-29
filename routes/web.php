<?php

use App\Http\Controllers\{ProfileController,ServiceController};
use Illuminate\Support\Facades\Route;
use App\Events\my_event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
   return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




/* Service Route */
Route::group(['prefix' => 'service'], function () {
    Route::get('/index', [ServiceController::class, 'index'])->name('service_index');
    Route::post('/store', [ServiceController::class, 'store'])->name('service_store');
    Route::post('/listing', [ServiceController::class, 'listing'])->name('service_listing');
    Route::post('/edit', [ServiceController::class, 'edit'])->name('service_edit'); 
    Route::post('/delete', [ServiceController::class, 'delete'])->name('service_delete');
});

/*Notification Route*/
Route::post('notification',[ServiceController::class,'notification']);

});

require __DIR__.'/auth.php';
Route::get('email-temp',function(){
return view('vendor.notifications.email');
});
  
