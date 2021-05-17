<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;
use App\Models\BlaxkBlog;
use App\Models\BlaxkAd;


class ApiController extends Controller
{
    //

    public function BlaxkBlogGet($SiteType,$SiteId)
    {
        //

        //get Categories 
        $getCategories=BlaxkCategory::where('SiteId',$SiteId)->get();

        //get Blogs 
        $getBlogs=BlaxkBlog::where('SiteId',$SiteId)->get();
        $getBlogs->load('Category');
        $getBlogs->load('Author');

        //get Authors 
        $getAuthors=BlaxkAuthor::where('SiteId',$SiteId)->get();

        //get Ads
        $getAds=BlaxkAd::where('SiteId',$SiteId)->get();

        $data= ['Blogs'=>$getBlogs,'Categories'=>$getCategories,'Authors'=>$getAuthors,'Ads'=>$getAds];

        return response()->json(['message'=>'GetBlaxkBlogSuccessErr','status'=>true,'payload'=>$data],200);
        //Done


    }















    // public function GetOrderBill($limit,$SortType,$SortKey)
    // {

    //     //Get Customer
    //     $GetCust=Auth::guard('api')->user();

    //     //Validate Params

    //         //Check Limit Value
    //         if($limit ==='null'){
    //             $limit=null;
    //         }

    //         //Check OrderBy Inputs
    //         if($SortKey !="null"){
    //             $getBill=SylpayBill::limit($limit)->orderBy($SortKey, $SortType)->where('SylCustId',$GetCust['id'])->get();
    //         }
    //         else{
    //             $getBill=SylpayBill::limit($limit)->where('SylCustId',$GetCust['id'])->get();
    //         }


    //     return response()->json(['code'=>200,'message'=>'GetBillSucsessErr','status'=>true,'item'=>$getBill],200);
    //     //Done
    // }

    // public function SaveOrderBill(Request $request)
    // {

    //     //Validate inputs
    //     $validate = Validator::make(request()->all(), [
    //         'BillTypeI'=>"required",
    //         'BillCmpI'=>'required',
    //         'BillIdI'=>'required',
    //         'BillPropI'=>'required'
    //     ]);

    //     if ($validate->fails()) {
           
    //         return response()->json(['code'=>400,'message'=>'ValidationErr','status'=>false,'item'=>null],400);
    //     }

    //     //Get Customer
    //     $GetCust=Auth::guard('api')->user();
					
    //     //Save Bill
    //     $SaveBill=new SylPayBill([
    //         'SylBillType'=>$request->input('BillTypeI'),
    //         'SylCustId'=>$GetCust['id'],
    //         'SylBillCmpName'=>$request->input('BillCmpI'),
    //         'SylBillId'=>$request->input('BillIdI'),
    //         'SylBillProp'=>$request->input('BillPropI'),
    //         'SylOrderStatus'=>0,
    //         'SylPayStatus'=>0
    //     ]);
    //     $SaveBill->Save();

    //     return response()->json(['code'=>201,'message'=>'PayOrderSaveSuccessErr','status'=>true,'item'=>$SaveBill],201);
    //     //Done
    // }



}
