<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ayarlar;
use Illuminate\Http\Request;

class AdminAyarlarController extends Controller
{
    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){

        $ayarlar = Ayarlar::all();

        return view('admin.pages.ayarlar.ayarlar',['ayarlar'=>$ayarlar]);
    }
}
