<?php

use App\Http\Controllers\Admin\AdminAyarlarController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\PasswordResetController;
use App\Http\Controllers\Home\RegisterController;
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

//Home Register
Route::get('/register',[RegisterController::class,'Index'])->name('home.register');
Route::post('/register-post',[RegisterController::class,'register'])->name('home.register.post');


//Home Şifremi Unuttum
Route::get('/sifremi-unuttum',[PasswordResetController::class,'Index'])->name('home.sifremi.unuttum');
Route::post('/sifremi-unuttum-gonder',[PasswordResetController::class,'SifreGonder'])->name('home.sifremi.unuttum.gonder');
Route::get('/sifre-degistir/{key}',[PasswordResetController::class,'SifreDegistirIndex'])->name('home.sifre.degistir.index');
Route::post('/sifre-degistir-post',[PasswordResetController::class,'SifreDegistir'])->name('home.sifre.degistir.post');


//Panel
Route::prefix('panel')->group(function (){

    Route::middleware('auth')->group(function (){
        Route::get('/home',[PanelHomeController::class,'Index'])->name('panel.home');
    });


});

//Admin
Route::prefix('admin')->group(function (){

    Route::middleware('isAdmin')->group(function (){

        //Home
        Route::get('/home',[AdminHomeController::class,'Index'])->name('admin.home');
        //Ayarlar
        Route::get('/ayarlar',[AdminAyarlarController::class,'Index'])->name('admin.ayarlar.home');
    });
});


