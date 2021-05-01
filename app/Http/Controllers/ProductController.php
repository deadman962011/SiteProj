<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;
use App\Models\BlaxkProduct;
use Auth;

class ProductController extends Controller
{
    //


    public function ProductListGet($SiteType,$SiteId)
    {
       
        //get Products 
        $getProducts=BlaxkProduct::where('SiteId',$SiteId)->get();
        $getProducts->load('Category');
        $getProducts->load('Author');

        //render Product list View 

        return view('Dashboard.Store.ProductList',['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Products'=>$getProducts]);
        

    }

    public function AddProductGet(Request $request,$SiteType,$SiteId)
    {
        

        //get User
        $getUser = Auth::guard('BlaxkUser')->user();

        //get Categories 
        $getCategory=BlaxkCategory::where('SiteId',$SiteId)->get();

        //get Brands
        $getBrands=BlaxkAuthor::where('SiteId',$SiteId)->get();
 
        //render Add Product View 
        return view('Dashboard.Store.AddProduct',['Categories'=>$getCategory,'Brands'=>$getBrands,'SiteType'=>$SiteType,'SiteId'=>$SiteId]);

    }


    public function AddProductPost(Request $request,$SiteType,$SiteId)
    {




        //Validate Inputs 
        $validate= $request->validate([
         'ProdTitleI'=>'required',
         'ProdDescI'=>'required',
         'ProdCategoryI'=>'required',
         'ProdBrandI'=>'required',
         'ProdPriceI'=>'required',
         'ProdBodyI'=>'required',
         'ProdStatusI'=>'required',
        ]);

        //Check Category
        $getBrand=BlaxkCategory::where(['SiteId'=>$SiteId,'id'=>$validate['ProdCategoryI']])->count();
        if( $getCategory = 0){
            //Error
            return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0",'message'=>'Category Wrong']);
        }

        //Check Brand
        $getBrand=BlaxkAuthor::where(['SiteId'=>$SiteId,'id'=>$validate['ProdBrandI']])->count();
        if( $getBrand = 0){
            //Error
            return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0",'message'=>'Brand Wrong']);
        }

        //Save Product
        $SaveProd=new BlaxkProduct([
            'ProductName'=>$validate['ProdTitleI'],
            'ProductPrice'=>$validate['ProdPriceI'],
            'ProductDesc'=>$validate['ProdDescI'],
            'ProductBody'=>$validate['ProdBodyI'],
            'ProductStatus'=>'Save',
            'SiteId'=>$SiteId,
            'ProductCategory'=>$validate['ProdCategoryI'],
            'ProductBrand'=>$validate['ProdBrandI'],
        ]);

        $SaveProd->save();

        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Product Successfully Added']);

    }


    public function DelProdPost(Request $request,$SiteType,$SiteId)
    {
          //validate Inputs
    $validate=$request->validate([
        "DelPassI"=>'required',
        "ProdDelId"=>"required"
    ]);
  
    //get User And Check User Password
    $getUser=Auth::guard('BlaxkUser')->user();
     
   $pass= $validate['DelPassI'];
    if(Auth::guard('BlaxkUser')->attempt(
        [
        'BlaxkUser'=>$getUser['BlaxkUser'],
        'password'=>$pass
        ])){

        //get Product

        $getProd=BlaxkProduct::find($validate['ProdDelId']);
    
        //Check If Authors have Items
        if($getProd['ItemNum'] > 0){
            return redirect()->route("AuthorList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Cant Delete Category Delete Books First"]);
        }
        else{
    
        //Delete product
        $getProd->delete();
        return redirect()->route("AuthorList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"1",'message'=>"Category Succsessfully Deleted"]);

        }

     }
     else{
        return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Wrong Password"]);
     }

    }



}
