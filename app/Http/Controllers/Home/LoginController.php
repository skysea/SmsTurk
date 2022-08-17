<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index(){

        return view('home.theme1.pages.login.login');
    }

    public function Login(Request $request){
        $validated = $request->validate([
            'email'=>'required|email|max:21',
            'password'=>'required|max:18',
            'g-recaptcha-response'=>'required|recaptcha'
        ],[
            'email.required'=>'Eposta adresinizi yazmadınız.',
            'email.email' => 'Geçerli bir eposta adresi yazınız',
            'email.max' => 'Eposta adresi en fazla 50 karakter uzunluğunda olmalıdır.',
            'password.required'=>'Şifrenizi yazmadınız.',
            'password.max'=>'Şifreniz en fazla 18 karakter uzunluğunda olmalıdır.',
            'g-recaptcha-response.required' => 'Robot olmadığınızı doğrulayın',
            'g-recaptcha-response.recaptcha' => 'Robot olmadığınızı doğrulayın'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'durum'=>'E'])){
            request()->session()->regenerate();
            return redirect()->intended('/panel/home');
        }
        else{
            return redirect()->back()->with('error','Giriş bilgileriniz hatalı')->withInput();
        }
    }
}
