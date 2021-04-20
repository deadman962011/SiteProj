<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\blaxkSite;
use App\Models\BlaxkFolder;
use App\Models\BlaxkAd;
use Auth;

class DashboardController extends Controller
{
    //

public function MainDashboard($SiteType,$SiteId)
{
    $getUser=Auth::guard("BlaxkUser")->user();
    
    //Check Site
    $getSite=blaxkSite::where([['SiteType',$SiteType],['id',$SiteId],['SiteUser',$getUser['id']]])->first();
     
    if(!empty($getSite)){

        if($SiteType =="PDFCenter"){
            return view('Dashboard.PDFCenter.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
        }
        elseif ($SiteType =="Blogger") {
            return view('Dashboard.Blogger.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
        }
        elseif($SiteType =="Store"){
            return view('Dashboard.Store.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
        }
    }
    else{
        return abort(404);
    }
}





public function AdvertismentGet($SiteType,$SiteId)
{
    //get Ads
    $getAds=BlaxkAd::where('SiteId',$SiteId)->get();
    return view('Dashboard.Advertisment',['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Ads'=>$getAds]);
}



public function AdUpdatePost(Request $request,$SiteType,$SiteId)
{
    //validate Input
    $validate=$request->validate([
        'UpdateSubmitI'=>'required',
        'AdIdI'=>'required'
    ]);


    //Check Ad
    $getAd=BlaxkAd::find($validate['AdIdI']);

    if(!empty($getAd)){
    
    //update Ad
    $getAd->update(['AdValue'=>$request->input("AdValueI")]);

    return  redirect()->route('AdvertismentGet', ['SiteType' =>$SiteType,'SiteId'=>$SiteId])->with('err',['err'=>'1','message'=>'Ad Sucsessfully Updated']);
 
    }
}



public function AdUpdatePostAj(Request $request)
{
    //validate Inputs
    $validate=$request->validate([
        "AdId"=>"required"
    ]);
    
    //Check Ad
    $getAd=BlaxkAd::find($validate['AdId']);

    if(!empty($getAd)){
        return response()->json(['Ad'=>$getAd], 200);
    }
}



}
