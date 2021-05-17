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

  return bcrypt(6);

});

Route::get('login',function(){
  return 'test';
});

Route::post('login',['uses'=>'SiteController@LoginPost']);


Route::group(['prefix'=>'{SiteType}/{SiteId}','middleware'=>'CheckSite'],function(){

  Route::post('SaveCust',['uses'=>'CustController@SaveCust']);

  // Route::post('CustLogin',['uses'=>'CustController@CustLogin']);

  Route::post('CustLogin',['uses'=>'CustController@CustLogin2']);

  Route::get('CategoryAll',['uses'=>'CategoryController@CatGetApi']); 

  Route::get('AuthorAll',['uses'=>'AuthorController@AuthorGetApi']);

  Route::get('AdAll',['uses'=>'SiteController@AdAllGetApi']);

  //Routes For BlaxkStore
  Route::group(['prefix'=>'/', 'where'=>['SiteType','BlaxkStore']],function(){

    Route::get('ProductAll',['uses'=>'ProductController@ProductAll']);

    //Protected Routes For BlaxkStore
    Route::group(['middleware'=>'auth:cust'],function(){

      //SaveOrder
  
      //Get Orders
  
      //SendMessage
  
      //getNotifs
  
      //getMessages
  
      //
  
    });

  });

  //Routes For BlaxkBlog
  Route::group(['prefix'=>'/', 'where'=>['SiteType','BlaxkBlog']],function(){

    Route::get('/',['uses'=>'ApiController@BlaxkBlogGet']);

    Route::get('BlogAll',['uses'=>'BloggerController@BlogGetApi']);

    Route::get('BlogByCat/{CatId}',['uses'=>'BloggerController@BlogsByCatGetApi']);

  });



});

Route::group(['prefix'=>'BlaxkBlog/{SiteId}','middleware'=>'auth:api'],function(){

  



});


    //getProducts
  
    //getBrands




