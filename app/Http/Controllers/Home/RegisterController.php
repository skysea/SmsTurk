<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Index(){
        return view('home.theme1.pages.register.register');
    }

    public function register(Request $request){

        $validated = $request->validate([
            'adsoyad'=>'required|max:50|min:6',
            'email'=>'required|email|max:50|min:6|unique:users',
            'password' =>'required|max:21|min:6|confirmed',
            'password_confirmation'=>'required|max:21|min:6',
            'g-recaptcha-response'=>'required|recaptcha'

        ],[
            'adsoyad.required'=>'Adınızı ve soyadınızı yazmadınız.',
            'adsoyad.max'=>'Adınız ve soyadınız enfazla 50 karakter olmalıdır.',
            'adsoyad.min'=>'Adınız soyadınız enaz 6 karakter olmalıdır.',
            'email.required'=>'Email adresini yazmadınız',
            'email.email'=> 'Geçerli bir email adresi giriniz.',
            'email.max'=> 'Email adresi enfazla 50 karakter olmalıdır',
            'email.min' => 'Email adresiniz enaz 6 karakter olmalıdır.',
            'email.unique'=>'Email adresi daha önce kayıt yapılmış',



            'password.required'=>'Şifrenizi giriniz.',
            'password.max'=>'Şifreniz enfazla 21 karakter olmalıdır.',
            'password.min'=>'Şifreniz enaz 6 karakter olmalıdır.',
            'password_confirmation.required'=>'Şifrenizi giriniz.',
            'password_confirmation.max'=>'Şifreniz enfazla 21 karakter olmalıdır.',
            'password_confirmation.min'=>'Şifreniz enaz 6 karakter olmalıdır.',
            'confirmed'=>'Şifreler uyuşmuyor.',
            'g-recaptcha-response.required' => 'Robot olmadığınızı doğrulayın.',
            'g-recaptcha-response.recaptcha' => 'Robot olmadığınızı doğrulayın.'
        ]);

        User::create([
            'adsoyad'=>$request->adsoyad,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'durum'=>'E',
            'isAdmin'=>'H',
            'balance'=>0,
        ]);
        return redirect(route('home.login'))->with("register_success", "Kayıt başarılı. Aşağıdaki bilgileri girerek giriş yapabilirsiniz.");

    }
}
