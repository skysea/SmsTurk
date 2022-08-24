<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\API\besSimNet;
use App\Http\Controllers\API\RubtoTL;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function __construct(){

        $this->middleware('isAdmin');

    }

    public function Index(){

        $fiveSimNet = new besSimNet();
        $RubtoTL = new RubtoTL();
        $fiveSimNetBalance = $fiveSimNet->get_balance();
        $fiveSimNettoTL = floatval($fiveSimNetBalance) * floatval($RubtoTL->getRubtoTL());

        return view('admin.home',['fiveSimNetBalance'=>$fiveSimNetBalance,'fiveSimNettoTL'=>$fiveSimNettoTL]);
    }
}
