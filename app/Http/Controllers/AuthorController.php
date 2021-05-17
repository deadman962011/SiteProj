<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BlaxkAuthor;
use App\Models\BlaxkFolder;
use Auth;

class AuthorController extends Controller
{
    //


    
public function AuthorListGet($SiteType,$SiteId)
{
   //get Authors
   $getAuthors=BlaxkAuthor::where('SiteId',$SiteId)->get();

   return view("Dashboard.AuthorList",['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Authors'=>$getAuthors]);
}


public function AddAuthorPost(Request $request,$SiteType,$SiteId)
{
   
    //validate Inputs
    $validate=$request->validate([
        'AuthorNameI'=>'required',
        'AuthorDescI'=>"required",
    ]);


   // Check Author
    $getAuthor=BlaxkAuthor::where([['SiteId',$SiteId],['AuthorName',$validate['AuthorNameI']]])->count();

    if($getAuthor >0){
        return  redirect()->route('MainDashboard',['SiteType'=>$SiteType,'SiteId'=>$SiteId])->With('err',['err'=>'0','message'=>'Author Is Already Exists']);
    }
    else{

        // //upload Author pic
        // if($request->hasFile("AuthorPicI")){

        //     //get AuthorPic Folder

        //     $getAuthorF=BlaxkFolder::where("SiteId",$SiteId)->first();

        //     $dir=$getAuthorF['AuthorPic'];
        //     $filename=Storage::cloud()->put($dir,$request->file("AuthorPicI"),file_get_contents($request->file('AuthorPicI')));
        //     $recursive = false; // Get subdirectories also?
        //     $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        
        //     $file = $contents
        //         ->where('type', '=', 'file')
        //         ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        //         ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        //         ->first(); // there can be duplicate file names!
        //         $fileId=$file['basename'];              
        // }
        // else{
             $fileId="1H4MM53CFgxGgMfM7XF_Mz4EqrR28Xy8V";
        // }

     
       // save Author 

        $saveAuthor=new BlaxkAuthor([
            'AuthorName'=>$validate['AuthorNameI'],
            'AuthorPic'=>$fileId,
            'AuthorDesc'=>$validate['AuthorDescI'],
            'BookNum'=>0,
            'SiteId'=>$SiteId
        ]);
        $saveAuthor->save(); 
        return redirect()->route('MainDashboard',['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>'1','message'=>"Author Saved Successfully"]);
    }
}




public function UpdateAuthorAj(Request $request)
{

    // validate Inputs
    $validate=$request->validate([
        "id"=>"required"
    ]);


    //get Author
    $getAuthor=BlaxkAuthor::find($validate['id']);
    if(!empty($getAuthor)){
        return $getAuthor;
    }
}


public function UpdateAuthorPost (Request $request,$SiteType,$SiteId)
{

   //validate Inputs
   $validate=$request->validate([
       "AuthorNameI"=>"required",
       "AuthorDescI"=>"required",
       "AuthorId"=>"required"
   ]);

   //get Author
   $getAuthor=BlaxkAuthor::find($validate['AuthorId']);

   //get Folders
   $getFolders=BlaxkFolder::where("SiteId",$SiteId)->first();

   if(!empty($getAuthor)){

       //Chcek Author if Author Pic Has File
        if($request->hasFile("AuthorPicI")){

            //get Old File And Delete It 
                    //get Old file  And Remove It
        $dirAP=$getFolders['AuthorPic'];
        $recursive = false; // Get subdirectories also?
        $contentsAP = collect(Storage::cloud()->listContents($dirAP, $recursive));
    
        $fileAP = $contentsAP
            ->where('type', '=', 'file')
            ->where('basename', '=', $getAuthor['AuthorPic'])
            ->first(); // there can be duplicate file names!
            Storage::cloud()->delete($fileAP['path']); 
    
    
       //Upload New File
       $filenameNewAP=Storage::cloud()->put($dirAP,$request->file("AuthorPicI"),file_get_contents($request->file('AuthorPicI')));
       $contentsNewAP = collect(Storage::cloud()->listContents($dirAP, $recursive));
       //get New basename
       $fileNewAP = $contentsNewAP
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filenameNewAP, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filenameNewAP, PATHINFO_EXTENSION))
       ->first(); // there can be duplicate file names!
       $fileId=$fileNewAP['basename'];

        }else{
            $fileId=$getAuthor['AuthorPic'];
        }


        //Update Author


        $getAuthor->update([
            "AuthorName"=>$validate['AuthorNameI'],
            "AuthorDesc"=>$validate['AuthorDescI'],
            "AuthorPic"=>$fileId
        ]);

        return redirect()->route("AuthorList",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with('err',['err'=>'1','message'=>'Author Successfully Updated']);
   }
}






public function DelAuthorPost(Request $request,$SiteType,$SiteId)
{

    //validate Inputs
    $validate=$request->validate([
        "DelPassI"=>'required',
        "AuthorDelId"=>"required"
    ]);
  
    //get User And Check User Password
    $getUser=Auth::guard('BlaxkUser')->user();
     
   $pass= $validate['DelPassI'];
    if(Auth::guard('BlaxkUser')->attempt(
        [
        'BlaxkUser'=>$getUser['BlaxkUser'],
        'password'=>$pass
        ])){

        //get Author

        $getAuthor=BlaxkAuthor::find($validate['AuthorDelId']);
    
        //Check If Authors have Items
        if($getAuthor['ItemNum'] > 0){
            return redirect()->route("AuthorList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Cant Delete Category Delete Books First"]);
        }
        else{
    
        //Delete Category
        $getAuthor->delete();
        return redirect()->route("AuthorList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"1",'message'=>"Category Succsessfully Deleted"]);

        }

     }
     else{
        return redirect()->route("CategoryList",['SiteType'=>$SiteType,"SiteId"=>$SiteId])->with("err",['err'=>"0",'message'=>"Wrong Password"]);
     }

}




public function AuthorGetApi($SiteType,$SiteId)
{
    //get Authors 
    $getAuthors=BlaxkAuthor::where('SiteId',$SiteId)->get();

    return response()->json(['code'=>200,'message'=>'GetAuthorSuccessErr','status'=>true,'item'=>$getAuthors], 200);
    //Done




}



}
