<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;
use Auth;

class ProductController extends Controller
{
    //

    public function AddProductGet(Request $request,$StoreType,$SiteId)
    {
        

        //get User
        $getUser = Auth::guard('BlaxkUser')->user();

        //get Categories 
        $getCategory=BlaxkCategory::where('SiteId',$SiteId)->get();

        //get Brands
        $getBrands=BlaxkAuthor::where('SiteId',$SiteId)->get();
 
        //render Add Product View 
        return view('Dashboard.Store.AddProduct',['Categories'=>$getCategory,'Brands'=>$getBrands,'SiteType'=>$StoreType,'SiteId'=>$SiteId]);

    }


    public function AddProductPost(Request $request,$SiteType,$SiteId)
    {




        //Validate Inputs 
        $validate= $request->validate([
         'ProdTitleI'=>'requried',
         'ProdDescI'=>'requried',
         'ProdCategoryI'=>'requried',
         'ProdBrandI'=>'requried',
         'ProdPriceI'=>'requried',
         'ProdBodyI'=>'requried',
         'ProdStatusI'=>'requried',
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
            'ProductPrice'=>$validate['ProductPriceI'],
            'ProductDesc'=>$validate['ProdDescI'],
            'ProductBody'=>$validate['ProdBodyI'],
            'ProductStatus'=>'Save',
            'SiteId'=>$SiteId,
            'ProductCategory'=>$validate['ProdCategoryI'],
            'ProductBrand'=>$validate['ProdBrandI'],
        ]);


        //ProductName	ProductPrice	ProductDesc	ProductBody	
        //ProductStatus	SiteId	ProductCategory	ProductBrand

    }



}
