<?php


namespace App\Mixin;


class StrMixins
{
    public function customNumber()
    {
        return function ($data){
            return "Ehsan".substr($data,0,2);
        };
    }

    public function prefix()
    {
        return function ($data,$prefix = "Ehsan"){
            return $prefix.'-'.$data;
        };
    }
}
