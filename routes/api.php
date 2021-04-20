<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('Login',['uses'=>'CustController@CustLogin','as'=>'CustLogin']);

Route::post('Register',['uses'=>'CustController@CustRegister','as'=>'CustRegister']);

Route::get('Validate/{input}/{val}',['uses'=>'CustController@CustValidate','as'=>'CustValidate']);


