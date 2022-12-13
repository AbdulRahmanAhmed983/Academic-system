<?php
namespace App\Helpers;
use App\Models\Studentdata;

Trait General
{
    function uploadImage($folder,$img){
        $img->store('/',$folder);
        $filename = $img->hashName();
            $path = 'images/' . $folder . '/' . $filename;
        return $path;
    }
    function setPass(){
        $random = str_shuffle('ABCDEFGHJKLMNOPQRSTUVWXYZ1234567890');
        $password = substr($random, 0, 8);
        return $password;
    }


 





}


        








?>