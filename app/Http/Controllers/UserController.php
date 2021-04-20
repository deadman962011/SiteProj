<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\blaxkSite;

class UserController extends Controller
{
    //

public function BigBlaxkLogInGet()
{
    return view("users.LogIn");
}


public function BigBlaxkLogInPost(Request $request)
{



    $validate=$request->validate([
        "BigUserI"=>"required",
        "BigPassI"=>"required",
    ]);

    //Check User
    if(Auth::guard('BigBlaxk')->attempt(
        [
        'BigBlaxkUser'=>$validate['BigUserI'],
        'password'=>$validate['BigPassI']
        ]
    )){
        return redirect()->route('BigMain');
        }
        else{
            return redirect()->route("BigLogInGet")->With('err',['err'=>'0','message'=>'Wrong UserName Or Password']);
        }
}
    
public function UserLogInGet()
{
    return view("users.LogIn");
}


public function UserLogInPost(Request $request)
{
    $validate=$request->validate([
        "BigUserI"=>"required",
        "BigPassI"=>"required",
    ]);


    if(Auth::guard("BlaxkUser")->attempt(["BlaxkUser"=>$validate['BigUserI'],"password"=>$validate['BigPassI']])){
        

        $getUser=Auth::guard("BlaxkUser")->user();

         //get Site Info By User Id
         $getSite=blaxkSite::where("SiteUser",$getUser['id'])->first();

         return redirect()->route("MainDashboard",['SiteType'=>$getSite['SiteType'],'SiteId'=>$getSite['id']]);
    }
    else{
        return "baaaad";
    }
}

public function LogOut()
{
    Auth::guard('BlaxkUser')->logout();

    return redirect()->route('LogIn');
}





public function MainBig()
{
    return view("Users.BigMain");
}




public function LogoutBig()
{
    Auth::guard('BigBlaxk')->logout();

     return redirect()->route('BigLogInGet');
}



}
