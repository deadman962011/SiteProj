<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BlaxkCategory;
use App\Models\BlaxkFolder;
use App\Models\BlaxkUser;

use Auth;

class CategoryController extends Controller
{
    //

    public function CategoryListGet($SiteType,$SiteId)
{
    //get Categories
    $getCategory=BlaxkCategory::where("SiteId",$SiteId)->get();
    return view("Dashboard.CategoryList",['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Categories'=>$getCategory]);
}


public function AddCategoryPost(Request $request,$SiteType,$SiteId)
{
    //validate Inputs
    $validate=$request->validate([
        "CategoryNameI"=>"required",
        "CategoryIconI"=>"required",
        "CategoryColorI"=>"required"
    ]);


    //Check Category Name

    $getCategory=BlaxkCategory::where([["CategoryName",$validate['CategoryNameI']],['SiteId',$SiteId]])->count();

    if($getCategory > 0){
        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",["err","err"=>"0","message"=>"Category Is Already Exists"]);       
    }
    else{
        $saveCategory=new BlaxkCategory([
            "CategoryName"=>$validate['CategoryNameI'],
            "CategoryIcon"=>$validate['CategoryIconI'],
            "CategoryColor"=>$validate['CategoryColorI'],
            'CategoryThumb'=>'test',//Default
            "SiteId"=>$SiteId,
            "BookNum"=>0
            
        ]);
    
        $saveCategory->save();


        


    
        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",["err","err"=>"1","message"=>"PDF Category Saved Successfully"]);    
    }

}


public function UpdateCategoryAj(Request $request)
{

    //validate Inputs
    $validate=$request->validate([
        "CatId"=>"required"
    ]);
   //get Category data

   $getCategory=BlaxkCategory::find($validate['CatId']);

   return $getCategory;


}

public function UpdateCategoryPost(Request $request,$SiteType,$SiteId)
{

    //validate Inputs
    $validate=$request->validate([
        "CategoryNameI"=>'required',
        "CategoryIconI"=>'required',
        'CategoryId'=>'required',
    ]);
    
    //Update Category

    $UpdateCategory=BlaxkCategory::find($validate['CategoryId']);

    $UpdateCategory->update([
        "CategoryName"=>$validate['CategoryNameI'],
        "CategoryIcon"=>$validate['CategoryIconI']
    ]);

    return redirect()->route("CategoryList",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>'1','message'=>'Category Successfully Updated']);
    
}



public function DelCategoryPost(Request $request,$SiteType,$SiteId)
{

    //validate Inputs
    $validate=$request->validate([
        "DelPassI"=>'required',
        "CategoryDelId"=>"required"
    ]);
  
    //get User And Check User Password
    $getUser=Auth::guard('BlaxkUser')->user();
     
   $pass= $validate['DelPassI'];
    if(Auth::guard('BlaxkUser')->attempt(
        [
        'BlaxkUser'=>$getUser['BlaxkUser'],
        'password'=>$pass
        ])){

        //get Category

        $getCategory=BlaxkCategory::find($validate['CategoryDelId']);
    
        //Check If Category have Items
        if($getCategory['ItemNum'] > 0){
            return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Cant Delete Category Delete Books First"]);
        }
        else{
    
        //Delete Category
        $getCategory->delete();
        return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"1",'message'=>"Category Succsessfully Deleted"]);

        }

     }
     else{
        return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Wrong Password"]);
     }

}


public function CatGetApi(Request $request,$SiteType,$SiteId)
{
    //Validate Inputs
 
 
    //get Categories
    $getCategories=BlaxkCategory::where('SiteId',$SiteId)->get();


    return response()->json($getCategories, 200);

}




}
