<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminAyarlarController extends Controller
{
    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){

        $ayarlar = Ayarlar::all();

        return view('admin.pages.ayarlar.ayarlar',['ayarlar'=>$ayarlar]);
    }

    public function homelogoyukle(Request $request){


        $validator = Validator::make($request->all(),[

            'file' => 'image|mimes:jpeg,png,svg,jpg|max:2048|required',
        ],[
            'file.image'       => 'Logo resim dosyası olmalı',
            'file.mimes'       => 'Logo sadece jpeg, png, jpg ve svg formatında olmalıdır. ',
            'file.max'      => 'Logo boyutu en fazla 2MB olamalıdır.',
            'file.required'      => 'Resim dosyası seçmediniz',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        else{
            $data = $request->all();
            $data['file'] = time().'_homelogo.'.$request->file->extension();
            $request->file->move(public_path('assets/images'), $data['file']);
            Ayarlar::where('name','home_logo')->update(['value'=> $data['file']]);
            return response()->json(['success'=>'AnaSayfa logo başarıyla yüklendi']);
        }
    }
    public function panellogoyukle(Request $request){


        $validator = Validator::make($request->all(),[

            'file' => 'image|mimes:jpeg,png,svg,jpg|max:2048|required',
        ],[
            'file.image'       => 'Logo resim dosyası olmalı',
            'file.mimes'       => 'Logo sadece jpeg, png, jpg ve svg formatında olmalıdır. ',
            'file.max'      => 'Logo boyutu en fazla 2MB olamalıdır.',
            'file.required'      => 'Resim dosyası seçmediniz',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        else{
            $data = $request->all();
            $data['file'] = time().'_panellogo.'.$request->file->extension();
            $request->file->move(public_path('assets/images'), $data['file']);
            Ayarlar::where('name','panel_logo')->update(['value'=> $data['file']]);
            return response()->json(['success'=>'Panel logo başarıyla yüklendi']);
        }
    }
    public function adminpanellogoyukle(Request $request){


        $validator = Validator::make($request->all(),[

            'file' => 'image|mimes:jpeg,png,svg,jpg|max:2048|required',
        ],[
            'file.image'       => 'Logo resim dosyası olmalı',
            'file.mimes'       => 'Logo sadece jpeg, png, jpg ve svg formatında olmalıdır. ',
            'file.max'      => 'Logo boyutu en fazla 2MB olamalıdır.',
            'file.required'      => 'Resim dosyası seçmediniz',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        else{
            $data = $request->all();
            $data['file'] = time().'_adminpanellogo.'.$request->file->extension();
            $request->file->move(public_path('assets/images'), $data['file']);
            Ayarlar::where('name','admin_panel_logo')->update(['value'=> $data['file']]);
            return response()->json(['success'=>'Admin Panel logo başarıyla yüklendi']);
        }
    }
    public function faviconyukle(Request $request){


        $validator = Validator::make($request->all(),[

            'file' => 'image|mimes:jpeg,png,svg,jpg|max:2048|required',
        ],[
            'file.image'       => 'Logo resim dosyası olmalı',
            'file.mimes'       => 'Logo sadece jpeg, png, jpg ve svg formatında olmalıdır. ',
            'file.max'      => 'Logo boyutu en fazla 2MB olamalıdır.',
            'file.required'      => 'Resim dosyası seçmediniz',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        else{
            $data = $request->all();
            $data['file'] = time().'_favicon.'.$request->file->extension();
            $request->file->move(public_path('assets/images'), $data['file']);
            Ayarlar::where('name','favicon')->update(['value'=> $data['file']]);
            return response()->json(['success'=>'Favicon başarıyla yüklendi']);
        }
    }
    public function genelayarlarkaydet(Request $request){
        $validated = $request->validate([
            'site_url'=>'required',
            'site_name'=>'required',
            'site_title'=>'required',
        ],[
            'site_url.required'=>'Site url adresinizi yazmadınız.',
            'site_name.required'=>'Site adını yazmadınız.',
            'site_title.required'=>'Site sloganı yazmadınız.',
        ]);
        $site_url = Ayarlar::where('name','site_url')->update(['value'=>$request->site_url]);
        $site_name = Ayarlar::where('name','site_name')->update(['value'=>$request->site_name]);
        $site_title = Ayarlar::where('name','site_title')->update(['value'=>$request->site_title]);
        $telefon = Ayarlar::where('name','telefon')->update(['value'=>$request->telefon]);
        $whatsapp = Ayarlar::where('name','whatsapp')->update(['value'=>$request->whatsapp]);
        $eposta = Ayarlar::where('name','email')->update(['value'=>$request->email]);
        return Redirect::back()->with('success','Genel ayarlar başarıyla güncellendi');
    }
    public function smtpIndex(){
        return view('admin.pages.ayarlar.smtp');
    }
    public function smtpKaydet(Request $request){
        $validated = $request->validate([
            'smtp_host'=>'required',
            'smtp_user'=>'required',
            'smtp_pass'=>'required',
            'smtp_port'=>'required',
        ],[
            'smtp_host.required'=>'Smtp host yazmadınız.',
            'smtp_user.required'=>'Smtp kullanıcı adını yazmadınız',
            'smtp_pass.required'=>'Smtp şifre yazmadınız.',
            'smtp_port.required'=>'Smtp port yazmadınız'
        ]);

        $smtp_host = Ayarlar::where('name','smtp_host')->update(['value'=>$request->smtp_host]);
        $smtp_user = Ayarlar::where('name','smtp_user')->update(['value'=>$request->smtp_user]);
        $smtp_pass = Ayarlar::where('name','smtp_pass')->update(['value'=>$request->smtp_pass]);
        $smtp_port = Ayarlar::where('name','smtp_port')->update(['value'=>$request->smtp_port]);
        return Redirect::back()->with('success','Smtp ayarları başarıyla güncellendi');

    }

}
