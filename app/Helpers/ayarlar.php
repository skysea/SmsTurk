<?php

use App\Models\Admin\Ayarlar;

if(!function_exists('getAyarlar')){

    function getAyarlar($name){
        $ayarlar = Ayarlar::all();
        return $ayarlar->where('name',$name)->first()->value;
    }

}
