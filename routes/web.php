<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// :::::::::::::::::::::::::::::
//     Backend Routes
// :::::::::::::::::::::::::::::

Route::group(['prefix'=>'/backend'], function(){
    Route::get('/admin',[AdminController::class,'index'])->name("backend.index");
    Route::get('/addproduct',[AdminController::class,'addproduct'])->name("backend.addproduct");
    Route::post('/storeproduct',[AdminController::class,'storeproduct'])->name("backend.storeproduct");
    Route::get('/showproduct',[AdminController::class,'showproduct'])->name("backend.showproduct");
    Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct'])->name("backend.deleteproduct");
    Route::get('/editproduct/{id}',[AdminController::class,'editproduct'])->name("backend.editproduct");
    Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct'])->name("backend.updateproduct");

});

// :::::::::::::::::::::::::::::
//     Frontend Routes
// :::::::::::::::::::::::::::::

    Route::get('/dashboard',[UserController::class,'index'])->name("frontend.index");
    
