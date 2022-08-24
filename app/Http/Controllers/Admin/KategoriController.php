<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KategoriController extends Controller
{
    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){
        return view('admin.pages.kategoriler.kategoriler');
    }

    public function IndexKategoriEkle(){

        //dd(File::glob(public_path().'/assets/images/*.*'));


        return view('admin.pages.kategoriler.kategori-ekle');
    }
}
