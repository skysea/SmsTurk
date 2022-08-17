<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Panel\PanelHomeController;
use Illuminate\Support\Facades\Route;

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




//Home
Route::get('/',[HomeController::class,'Index'])->name('home.index');

//Home Login
Route::get('/login',[\App\Http\Controllers\Home\LoginController::class,'Index'])->name('home.login');
Route::post('login-post',[\App\Http\Controllers\Home\LoginController::class,'Login'])->name('home.login.post');


//Panel
Route::prefix('panel')->group(function (){

    Route::get('/home',[PanelHomeController::class,'Index'])->name('panel.home');

});

//Admin
Route::prefix('admin')->group(function (){

    Route::get('/admin/login',[\App\Http\Controllers\Admin\LoginController::class,'Index'])->name('admin.login');
    Route::get('/home',[AdminHomeController::class,'Index'])->name('admin.home');
});


