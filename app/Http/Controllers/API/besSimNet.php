<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class besSimNet extends Controller
{

    private $url = 'https://5sim.net/v1';
    private $apikey;

    public function apikey(){
        $this->apikey = getAyarlar('sim5_api_key');
    }



    public function getKategori($ulke,$operator){

        $url = 'https://5sim.net/v1/guest/products';
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get('https://5sim.net/v1/guest/prices', [
            'product' => 'russia',
            'country'=>'turkey'
        ]);
        //dd($response);
        return $response;
    }


    private function request($data){

        $serializedData = http_build_query($data);
      $response =  Http::get('https://5sim.net/v1/guest/products',
      [
          $data
      ]
      );

      return $response;
    }





}
