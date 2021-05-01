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


Route::get('/', function () {
    return bcrypt('a5522122');
});

Route::get('put', function() {
    Storage::cloud()->put('fuck.txt', 'FuckYou');
    return 'File was saved to Google Drive';
});

Route::get('list', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where('type', '=', 'dir'); // directories
    return $contents->where('type', '=', 'file'); // files
});



Route::group(['prefix' => 'users'], function () {
   
 Route::get("/BigLogIn",['uses'=>"UserController@BigBlaxkLogInGet","as"=>"BigLogInGet"]);

 Route::post("/BigLogIn",['uses'=>"UserController@BigBlaxkLogInPost","as"=>"BigLogInPost"]);

 Route::get("/Login",['uses'=>"UserController@UserLogInGet","as"=>"LogIn"]);
 
 Route::post("/Login",['uses'=>"UserController@UserLogInPost","as"=>"LogInPost"]);

 Route::group(['middleware'=>['auth:BigBlaxk']], function () {
    
    Route::get("/BigMain",['uses'=>"UserController@MainBig","as"=>"BigMain"]);
   
    Route::post("BigAddSite",['uses'=>"SiteController@BigAddSite",'as'=>'BigAddSite']);

    Route::get("/BigLogOut",['uses'=>"UserController@LogoutBig","as"=>"BigLogOut"]);
 });



 Route::group(['middleware'=>['auth:BlaxkUser']], function () {

    Route::get("/LogOut",['uses'=>'UserController@LogOut',"as"=>"LogOut"]);

    Route::group(['prefix' =>'{SiteType}/{SiteId}'],function(){

        //Route::get("Dashboard",['uses'=>"DashboardController@MainDashboard","as"=>"MainDashboard"]);
        
        Route::get("CategoryList",['uses'=>'CategoryController@CategoryListGet','as'=>'CategoryList']);

        Route::post('AddCategory',['uses'=>"CategoryController@AddCategoryPost","as"=>"AddCategoryPost"]);

        Route::post("UpdateCategoryAj",['uses'=>"CategoryController@UpdateCategoryAj","as"=>"UpdateCategoryAj"]);

        Route::post("UpdateCategoryPost",['uses'=>"CategoryController@UpdateCategoryPost","as"=>"UpdateCategoryPost"]);

        Route::post("DelCategory",['uses'=>"CategoryController@DelCategoryPost","as"=>"DelCategoryPost"]);

        Route::get("AuthorList",['uses'=>'AuthorController@AuthorListGet','as'=>'AuthorList']);

        Route::post("AddAuthor",['uses'=>"AuthorController@AddAuthorPost","as"=>"AddAuthorPost"]);

        Route::post("UpdateAuthor",['uses'=>"AuthorController@UpdateAuthorPost","as"=>"UpdateAuthorPost"]);
   
        Route::post("UpdateAuthorAj",['uses'=>"AuthorController@UpdateAuthorAj","as"=>"UpdateAuthorAj"]);

        Route::post('DelAuthor',['uses'=>'AuthorController@DelAuthorPost','as'=>'DelAuthorPost']);

        Route::get("Adevertisments",['uses'=>'DashboardController@AdvertismentGet','as'=>"AdvertismentGet"]);

        Route::post("AdUpdate",["uses"=>"DashboardController@AdUpdatePost","as"=>"UpdateAd"]);

        Route::post("AdUpdateAj",["uses"=>"DashboardController@AdUpdatePostAj","as"=>"UpdateAdAj"]);
    });

    Route::group(['prefix' =>'{SiteType}/{SiteId}','where'=>['SiteType'=>'PDFCenter']], function () {
       
        // Route::get("/",['uses'=>'Controller@PDFMainDashboard','as'=>'MainDashboard']);
        Route::get("Dashboard",['uses'=>"Controller@PDFMainDashboard","as"=>"MainDashboard"]);

        Route::get("BookList",['uses'=>"PdfController@BooksListGet","as"=>"BookListGet"]);

        Route::post("BookList",['uses'=>"PdfController@BooksListPost","as"=>"BookListPost"]);

        Route::get("AddBook",['uses'=>"PdfController@AddBookGet","as"=>"AddBookGet"]);

        Route::post("AddBook",['uses'=>'PdfController@AddBookPost','as'=>'AddBookPost']);

        Route::post("DelBookPost",['uses'=>"PdfController@DelBookPost","as"=>"DelBookPost"]);

        Route::post("UpdateBookAj",['uses'=>"PdfController@UpdateBookAj",'as'=>"UpdateBookAj"]);

        Route::post("UpdateBookPost",['uses'=>'PdfController@UpdateBookPost','as'=>'UpdateBookPost']);
    });

    Route::group(['prefix' =>'{SiteType}/{SiteId}','where'=>['SiteType'=>'Blogger']], function () {

        //Route::get("/",['uses'=>'Controller@BloggerMainDashboard','as'=>'MainDashboard']);

        Route::get("Dashboard",['uses'=>"DashboardController@BloggerMainDashboard","as"=>"MainDashboard"]);
    
        Route::get("AddBlog",['uses'=>"BloggerController@AddBlogGet",'as'=>"AddBlogGet"]);

        Route::post("AddBlog",['uses'=>"BloggerController@AddBlogPost","as"=>"AddBlogPost"]);

        Route::post("SaveImage",['uses'=>"BloggerController@SaveImage","as"=>"SaveImage" ]);

        Route::post("DelImage",['uses'=>"BloggerController@DelImage","as"=>"DelImage"]);
    
    });

    Route::group(['prefix' =>'{SiteType}/{SiteId}','where'=>['SiteType'=>'Store']], function () { 

        //Route::get("Dashboard",['uses'=>"DashboardController@MainDashboard","as"=>"MainDashboard"]);

        Route::get('ProductList',['uses'=>'ProductController@ProductListGet','as'=>'ProductListGet']);

        Route::get('AddProduct',['uses'=>'ProductController@AddProductGet','as'=>'AddProductGet']);

        Route::post('AddProduct',['uses'=>'ProductController@AddProductPost','as'=>'AddProductPost']);

        Route::post('DelProdPost',['uses'=>'ProductController@DelProdPost','as'=>'DelProdPost']);

        

     });

 });

});