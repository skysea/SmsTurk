<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubtoTL extends Controller
{
    private $url = 'http://hasanadiguzel.com.tr/api/kurgetir';

    public function getRubtoTL(){
        $get =  $this->request();
        $objTL = json_decode($get,false);
        $arr ="";
        foreach ($objTL->TCMB_AnlikKurBilgileri as $key=>$value){
            if($value->Isim == 'RUS RUBLESİ')
            {
                $arr = floatval($value->ForexSelling);
            }
        }
        return $arr;
    }



    private function request()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",

        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }
}
