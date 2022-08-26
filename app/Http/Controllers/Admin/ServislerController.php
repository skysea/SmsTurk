<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Kategoriler;
use Illuminate\Http\Request;

class ServislerController extends Controller
{
    public function servisEkleIndex(){
        return view('admin.pages.servisler.servis-ekle');
    }

    public function getSelectKategoriler(Request $request){
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data =Kategoriler::select("id","kategori_adi","kategori_icon")
                ->where('kategori_adi','LIKE',"$search%")
                ->get();
        }
        else{
            $data =Kategoriler::select("id","kategori_adi","kategori_icon")->get();
        }
        return response()->json($data);
    }
}
