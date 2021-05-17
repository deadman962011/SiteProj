<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\BlaxkCust;
use App\Models\BlaxkCu;

use Auth;


class CustController extends Controller
{
    //


    public function SaveCust(Request $request,$SiteType,$SiteId)
    {
        
        //Check Site 
        
        //Validate Inputs
        $validate =$request->validate([
            'FullNameI'=>'required',
            'UserNameI'=>'required|min:5',
            'MailI'=>'required|email',
            'PasswordI'=>'required',
            'Password2I'=>'required',
            'CountryI'=>'required',
            'AddressI'=>'required'
        ]);


       //Check Passowrds Are Matches 
       if( $validate['PasswordI'] != $validate['Password2I'] ){
        return response()->json('Wrong', 402);
       }

       //Check Mail Is Uniqe
       $CheckMail=BlaxkCu::where('CustMail',$validate['MailI'])->count();
       if($CheckMail > 0){
        return response()->json('Wrong', 402);
       }

       //Check Username Is Uniqe
       $CheckUsername=BlaxkCu::where('CustUserName',$validate['UserNameI'])->count();
       if($CheckUsername > 0){
        return response()->json('Wrong username exits', 402);
       }

       //Check SiteId 


       //Generate Random Token 
       $token =md5(rand(1,6) . microtime());

       //Save Cust
       $SaveCust=new BlaxkCu([
        'CustFullName'=>$validate['FullNameI'],
        'CustUserName'=>$validate['UserNameI'],
        'CustMail'=>$validate['MailI'],
        'CustPass'=> bcrypt($validate['PasswordI']),
        'CustStatus'=>0,
        'CustActiveToken'=>$token ,
        'CustCountry'=>$validate['CountryI'],
        'CustAddress'=>$validate['AddressI'],
        'SiteId'=>$SiteId
       ]);

       $SaveCust->save();

       return response()->json('Done', 201);
       //Done

    }


    public function CustLogin2(Request $request,$SiteType,$SiteId)
    {

        //Validate Inputs
        $validate = Validator::make(request()->all(), [
            'CustUserNameI'=>'required',
            'CustPassI'=>'required'
        ]);
        
        

        if ($validate->fails()) {
        
            return response()->json(['code'=>400,'message'=>'ValidationErr','status'=>false,'item'=>null],400);
        }

        //Attempt login With UserName           
        if (!$token = Auth::guard('cu')->attempt(["CustUserName"=>$request->input('CustUserNameI'),"password"=>$request->input('CustPassI'),'CustStatus'=>1,'SiteId'=>$SiteId])) {

            return response()->json(['code'=>401,'message'=>'UnauthorizedErr','status'=>false,'item'=>null],401);
        }    
    
        //get Customer
        $getCust=Auth::guard('cu')->user();
    
        return response()->json(['code'=>200,'message'=>'CustAuthSuccesErr','status'=>true,'item'=>$getCust,'token'=>$token],200);

        //Done
    }

}
