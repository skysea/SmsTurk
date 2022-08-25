<?php

use App\Http\Controllers\Admin\AdminAyarlarController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\KategoriController;
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

Route::get('/test',function (){

    $api = new \App\Http\Controllers\API\besSimNet();
    echo $api->get_balance();

});


//Home
Route::get('/',[HomeController::class,'Index'])->name('home.index');
Route::get('/whatsapp',function (){
    return redirect()->away('https://wa.me/'.getAyarlar('whatsapp'));

})->name('whatsapp');

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
        Route::post('/genel-ayarlar/homelogoyukle',[AdminAyarlarController::class,'homelogoyukle'])->name('admin.genel.ayarlar.homelogoyukle');
        Route::post('/genel-ayarlar/panellogoyukle',[AdminAyarlarController::class,'panellogoyukle'])->name('admin.genel.ayarlar.panellogoyukle');
        Route::post('/genel-ayarlar/adminpanellogoyukle',[AdminAyarlarController::class,'adminpanellogoyukle'])->name('admin.genel.ayarlar.adminpanellogoyukle');
        Route::post('/genel-ayarlar/faviconyukle',[AdminAyarlarController::class,'faviconyukle'])->name('admin.genel.ayarlar.faviconyukle');
        Route::post('/genel-ayarlar/genel-ayarlar-kaydet',[AdminAyarlarController::class,'genelayarlarkaydet'])->name('admin.genel.ayarlar.genel.ayarlar.kaydet');
        Route::get('/genel-ayarlar/smtp',[AdminAyarlarController::class,'smtpIndex'])->name('admin.genel.ayarlar.smtp');
        Route::post('/genel-ayarlar/smtp-kaydet',[AdminAyarlarController::class,'smtpKaydet'])->name('admin.genel.ayarlar.smtp.kaydet');
        Route::get('/genel-ayarlar/recaptha',[AdminAyarlarController::class,'recapthaIndex'])->name('admin.genel.ayarlar.recaptha');
        Route::post('/genel-ayarlar/recaptha-kaydet',[AdminAyarlarController::class,'recapthaKaydet'])->name('admin.genel.ayarlar.recaptha.kaydet');
        Route::get('/genel-ayarlar/api',[AdminAyarlarController::class,'apiIndex'])->name('admin.genel.ayarlar.api');
        Route::post('/genel-ayarlar/apikaydet',[AdminAyarlarController::class,'apiKaydet'])->name('admin.genel.ayarlar.api.kaydet');
        Route::get('/genel-ayarlar/odeme',[AdminAyarlarController::class,'odemeIndex'])->name('admin.genel.ayarlar.odeme');
        Route::post('/genel-ayarlar/odeme-kaydet',[AdminAyarlarController::class,'odemeKaydet'])->name('admin.genel.ayarlar.odeme.kaydet');
        Route::get('/genel-ayarlar/extra',[AdminAyarlarController::class,'extraIndex'])->name('admin.genel.ayarlar.extra');
        Route::post('/genel-ayarlar/extra-kaydet',[AdminAyarlarController::class,'extraKaydet'])->name('admin.genel.ayarlar.extra.kaydet');
        //Kategoriler
        Route::get('/kategoriler',[KategoriController::class,'Index'])->name('admin.kategoriler');
        Route::get('/kategoriler/kategori-ekle',[KategoriController::class,'IndexKategoriEkle'])->name('admin.kategoriler.kategori.ekle');
        Route::post('/kategoriler/kategori-kaydet',[KategoriController::class,'kategoriKaydet'])->name('admin.kategoriler.kategori.kaydet');
        Route::get('/kategoriler/getTable',[KategoriController::class,'getTable'])->name('admin.kategoriler.gettable');
        Route::post('/kategoriler/secililersil',[KategoriController::class,'secililerSil'])->name('admin.kategoriler.secililer.sil');
        Route::post('/kategoriler/single-sil',[KategoriController::class,'singleSil'])->name('admin.kategoriler.single.sil');

    });
});


