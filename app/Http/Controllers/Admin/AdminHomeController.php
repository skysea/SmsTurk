<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){
        return view('admin.home');
    }
}
