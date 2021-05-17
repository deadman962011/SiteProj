<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\blaxkSite;
use App\Models\BlaxkAd;
use Auth;

class Controller extends BaseController
{
    


    public function MainGet()
    {

        return view('Main');
    }

    public function LoginGet()
    {
        
        return view('Login');
    }

    public function RegisterGet()
    {

        return view('Register');
    }

    public function PDFMainDashboard($SiteType,$SiteId)
    {
        $getUser=Auth::guard("BlaxkUser")->user();
    
        //Check Site
        $getSite=blaxkSite::where([['SiteType',$SiteType],['id',$SiteId],['SiteUser',$getUser['id']]])->first();
        if(!empty($getSite)){
       
         return view('Dashboard.PDFCenter.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
           
        }


    }

    public function BloggerMainDashboard($SiteType,$SiteId)
    {
        $getUser=Auth::guard("BlaxkUser")->user();
    
        //Check Site
        $getSite=blaxkSite::where([['SiteType',$SiteType],['id',$SiteId],['SiteUser',$getUser['id']]])->first();
        if(!empty($getSite)){
       
         return view('Dashboard.Blogger.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
           
        }
    }

    public function StoreMainDashboard($SiteType,$SiteId)
    {
        //
        $getUser=Auth::guard("BlaxkUser")->user();
    
        //Check Site
        $getSite=blaxkSite::where([['SiteType',$SiteType],['id',$SiteId],['SiteUser',$getUser['id']]])->first();
        if(!empty($getSite)){
       
         return view('Dashboard.Store.main',['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
        }
    }


}