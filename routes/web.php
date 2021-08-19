<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/macro', function () {

    #Str::customNumber
    //dd(\Illuminate\Support\Str::customNumber(5589));

    #Str::prefix
    dd(\Illuminate\Support\Str::prefix(5589,'new'));

    #Response::errorMessage
    //return \Illuminate\Http\Response::errorMessage('problem is here');
});


