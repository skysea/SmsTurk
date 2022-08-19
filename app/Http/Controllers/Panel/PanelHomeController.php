<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelHomeController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function Index(){
        return view('panel.home');
    }
}
