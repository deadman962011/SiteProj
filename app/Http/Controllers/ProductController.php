<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;
use App\Models\BlaxkProduct;
use App\Models\BlaxkSite;

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

        //get Categories 
        $getCategoirs = BlaxkCategory::where('SiteId',$SiteId)->get();

        //get Brands
        $getBrands= BlaxkAuthor::where('SiteId',$SiteId)->get();

        //render Product list View 

        return view('Dashboard.Store.ProductList',['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Products'=>$getProducts,'Categories'=>$getCategoirs,'Brands'=>$getBrands]);
        

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
        $Category=BlaxkCategory::where(['SiteId'=>$SiteId,'id'=>$validate['ProdCategoryI']])->get();
        $getCategory=$Category->count();
        if( $getCategory = 0){
            //Error
            return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0",'message'=>'Category Wrong']);
        }

        //Check Brand
        $Brand=BlaxkAuthor::where(['SiteId'=>$SiteId,'id'=>$validate['ProdBrandI']])->get();
        $getBrand=$Brand->count();
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

        //Increase Category ItemNum +1
        $NewCat=$Category[0]['ItemNum'] +1 ;
        $Category[0]->update(['ItemNum'=>$NewCat]);

        //Increase Author ItemNum +1
        $NewAut=$Brand[0]['ItemNum'] +1 ;
        $Brand[0]->update(['ItemNum'=>$NewAut]);
     
        
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

        if(!empty($getProd)){

         //Reduce Category Item Num

            //get Category
            $getCategory=BlaxkCategory::find($getProd['ProductCategory']);
           
            //Reduce By -1
            $NewCat= $getCategory['ItemNum'] -1 ;
            $getCategory->update(['ItemNum'=>$NewCat]); 

         //Reduce Barnd Item Num

            //get Brand
            $getBrand=BlaxkAuthor::find($getProd['ProductBrand']);

            //reduce By -1 
            $NewBrand= $getBrand['ItemNum'] -1 ;
            $getBrand->update(['ItemNum'=>$NewBrand]);

            //Delete product
            $getProd->delete();

         return redirect()->route("AuthorList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"1",'message'=>"Product Succsessfully Deleted"]);

        }

    


     }
     else{
        return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Wrong Password"]);
     }

    }

    public function UpdateProdAj(Request $request)
    {
        //validate Inputs 
        $validate=$request->validate([
            'ProdId'=>'required'
        ]);

        //Get Product 
        $getProd=BlaxkProduct::find($validate['ProdId']);

        if(!empty($getProd)){
            return response()->json($getProd, 200);
        }
        else{
            return 'Wrong';
        }
    }


    public function UpdateProdPost(Request $request,$SiteType,$SiteId)
    {
    
        //Validate Inputs 
        $validate=$request->validate([
            'ProdTitleUI'=>'required',
            'ProdDescUI'=>'required',
            'ProdCategoryUI'=>'required',
            'ProdBrandUI'=>'required',
            'ProdPriceUI'=>'required',
            'ProdBodyUI'=>'required',
            'ProdUI'=>'required'
        ]);

        //Check Product 
        $CheckProd=BlaxkProduct::find($validate['ProdUI']);
        
        if(empty($CheckProd)){
            return 'wrong Prod';
        }

        $oldCatId= $CheckProd['ProductCategory'];
        $oldBrandId = $CheckProd['ProductBrand'];

        //Check Category
        $CheckCat=BlaxkCategory::find($validate['ProdCategoryUI']);

        if(empty($CheckCat)){
            return 'Wrong Cat';
        }

        //Check Brand
        $CheckBrand=BlaxkAuthor::find($validate['ProdBrandUI']);

        if(empty($CheckBrand)){

            return 'Wrong Brand';

        }

        //Do Update Product 

         //Update Prod Thumb

         
        //Update Product 
        $CheckProd->update([
            'ProductName'=>$validate['ProdTitleUI'],
            'ProductBody'=>$validate['ProdBodyUI'],
            'ProductPrice'=>$validate['ProdPriceUI'],
            'ProductDesc'=>$validate['ProdDescUI'],
            'ProductCategory'=>$validate['ProdCategoryUI'],
            'ProductBrand'=>$validate['ProdBrandUI'],
        ]);


        //Update Category
        $newCatId=$validate['ProdCategoryUI'];


        if($oldCatId != $newCatId){

       
            //get Old Category 
            $oldCat=BlaxkCategory::find($oldCatId);

            //reduce itemNum On Old Category
            $reduceCatNum = $oldCat['ItemNum'] -1 ;
            $oldCat->update(['ItemNum'=>$reduceCatNum]);
           

           //increase ItemNum On New Category
           $newCat=BlaxkCategory::find($newCatId);
           $increaseCatNum=$newCat['ItemNum'] +1;
           $newCat->update(['ItemNum'=>$increaseCatNum]);
        }




        //Update Brand 
        $NewBrandId=$validate['ProdBrandUI'];
        if($oldBrandId !== $NewBrandId){


            //get Old Brand 
            $oldBrand=BlaxkAuthor::find($oldBrandId);

            //reduce itemNum On Old Brand
            $reduceBrandNum = $oldBrand['ItemNum'] -1 ;
            $oldBrand->update(['ItemNum'=>$reduceBrandNum]);
            

            //increase ItemNum On New Brand
            $newBrand=BlaxkAuthor::find($NewBrandId);
            $increaseBrandNum=$newBrand['ItemNum'] +1;
            $newBrand->update(['ItemNum'=>$increaseBrandNum]);

        }



        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Product Successfully Updated']);

    }










    ///Api Controllers



    public function ProductAll($SiteType,$SiteId)
    {

        //Check SiteId
        $CheckSite=BlaxkSite::find($SiteId);

        if(empty($CheckSite)){

            return response()->json('worng', 401);

        };

        //Get Products 
        $getProducts=BlaxkProduct::where('SiteId',$SiteId)->get();
        $getProducts->load('Category');
        $getProducts->load('Author');
        

        //Done
        return response()->json(['code'=>200,'message'=>'GetProductSuccessErr','status'=>true,'item'=>$getProducts],200);

    }



}
