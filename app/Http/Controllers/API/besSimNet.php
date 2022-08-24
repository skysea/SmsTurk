<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class besSimNet extends Controller
{


    public function get_balance(){

        $api_key = getAyarlar('sim5_api_key');
        $balance = Http::get('http://api2.5sim.net/stubs/handler_api.php?',[
            'api_key'=>$api_key,
            'action'=>'getBalance'
        ]);
        return explode(":",$balance)[1];
    }




}
