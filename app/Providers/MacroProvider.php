<?php

namespace App\Providers;

use App\Mixin\StrMixins;
use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MacroProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        #Str

        //First Way
//        Str::macro('customNumber',function ($data){
//            return "Ehsan".substr($data,0,2);
//        });
//        Str::macro('prefix',function ($data,$prefix = "Ehsan"){
//            return $prefix.'-'.$data;
//        });

        //Bunch Of macro's class
        //Second Way(mixin)
        Str::mixin(new StrMixins());

        #Response
        Response::macro('errorMessage',function ($message = "There is a problem",$code = 500){
            return response()->json([
               'message'=>$message,
                'error_code'=>$code
            ],$code);
        });



    }
}
