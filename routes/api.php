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

Route::get('/',function(){
 return bcrypt('e173ed367256db629e2e664f727886f0');
});

Route::get('login',function(){
  return 'test';
});

Route::post('login',['uses'=>'SiteController@LoginPost']);

Route::group(['prefix'=>'BlaxkBlog/{SiteId}'],function(){

  Route::get('CategoryAll',['uses'=>'CategoryController@CatGetApi']); 

  Route::get('BlogAll',['uses'=>'BloggerController@BlogGetApi']);

  Route::get('BlogByCat/{CatId}',['uses'=>'BloggerController@BlogsByCatGetApi']);

});


