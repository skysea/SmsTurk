<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;

class PasswordResetController extends Controller
{
    public function Index(){
        return view('home.theme1.pages.passwordreset.sifremi_unuttum');
    }

    public function SifreDegistirIndex(Request $request){


        if($request->key != null){
            if(PasswordReset::where('key',$request->key)->count() > 0){

                $simdiki_tarih = Carbon::now();
                $keytarih = Carbon::parse(PasswordReset::where('key',$request->key)->first()->created_at);


                if($simdiki_tarih->diffInHours($keytarih, true) >= 2 or PasswordReset::where('key',$request->key)->first()->durum == 'H'){

                    return  view('home.theme1.pages.passwordreset.sifre-degistir-expired');
                }
                else{

                    $data = PasswordReset::where('key',$request->key)->first();
                    return view('home.theme1.pages.passwordreset.sifre_degistir',['data'=>$data]);
                }
            }
        }

        return redirect()->route('home.index');


    }

    public function SifreGonder(Request $request){
        $validated = $request->validate([
            'email'=>'required|email|max:100',
            'g-recaptcha-response'=>'required|recaptcha'
        ],[
            'email.required'=>'Eposta adresinizi yazmadınız.',
            'email.email' => 'Geçerli bir eposta adresi yazınız',
            'email.max' => 'Eposta adresi en fazla 50 karakter uzunluğunda olmalıdır.',
            'g-recaptcha-response.required' => 'Robot olmadığınızı doğrulayın',
            'g-recaptcha-response.recaptcha' => 'Robot olmadığınızı doğrulayın'
        ]);

        if(User::where('email',$request->email)->first() == null){

            return redirect()->back()->with('error','Email adresi kayıtlı değil.');
        }
        else{
            $getuserInfo = User::where('email',$request->email)->first();
            $mail = new PHPMailer(true);
            try{
                $mail->SMTPDebug = 0;
                $mail->CharSet = 'utf-8';
                $mail->isSMTP();
                $mail->Host = getAyarlar('smtp_host');
                $mail->SMTPAuth = true;
                $mail->Username = getAyarlar('smtp_user');
                $mail->Password = getAyarlar('smtp_pass');
                $mail->SMTPSecure = "tls";
                $mail->Port = getAyarlar('smtp_port');
                $mail->setFrom(getAyarlar('smtp_email'), getAyarlar('site_name'));
                $mail->addAddress($request->email);
                $mail->addReplyTo(getAyarlar('smtp_email'), getAyarlar('site_name'));
                $mail->isHTML(true);
                $mail->Subject = 'Şifre Hatırlatma';
                $key = Str::random(40);
                $message = \view('home.theme1.pages.passwordreset.password-reset-email-template')->render();
                $message = str_replace('%Adsoyad%', $getuserInfo->adsoyad, $message);
                $message = str_replace('%Url%', $key, $message);
                $mail->MsgHTML($message);


                if( !$mail->send() ) {
                    return back()->with("error", $mail->ErrorInfo);
                }

                else {
                    PasswordReset::create([
                        'userid'=>$getuserInfo->id,
                        'key'=>$key,
                        'durum'=>'E'
                    ]);
                    return back()->with("success", "Şifreniz eposta adresinize gönderilmiştir.");
                }
            }
            catch (Exception $e){
                return back()->with("error", $e->getMessage())->withInput();
            }
        }

    }

    public function SifreDegistir(Request $request){
        $validated = $request->validate([
            'password'=>'required|max:21|min:6|confirmed',
            'password_confirmation'=>'required|max:21|min:6',
            'g-recaptcha-response'=>'required|recaptcha'
        ],[
            'password.required'=>'Yeni şifrenizi yazmadınız.',
            'password.max' => 'Şifre en fazla 21 karakter uzunluğunda olmalıdır.',
            'password.min' => 'Şifre en az 6 karakter uzunluğunda olmalıdır.',
            'confirmed' => 'Şifreler uyuşmuyor',

            'password_confirmation.required'=>'Şifre tekrarını yazmadınız.',
            'password_confirmation.max'=>'Şifreniz en fazla 21 karakter uzunluğunda olmalıdır.',

            'g-recaptcha-response.required' => 'Robot olmadığınızı doğrulayın',
            'g-recaptcha-response.recaptcha' => 'Robot olmadığınızı doğrulayın'
        ]);

        User::where('id',$request->userid)->update([

            'password' => Hash::make($request->password)
        ]);

        PasswordReset::where('key',$request->key)->update([
            'durum' => 'H'
        ]);
        return redirect(route('home.login'))->with("success", "Şifreniz başarıyla değiştirildi.");
    }
}
