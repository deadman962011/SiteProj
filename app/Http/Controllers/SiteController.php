<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlaxkUser;
use App\Models\blaxkSite;
use App\Models\BlaxkFolder;
use App\Models\BlaxkAd;

class SiteController extends Controller
{
    

    public function BigAddSite(Request $request)
    {
      
        //Validate Inputs
        $validate=$request->validate([
            "SiteNameI"=>"required",
            "SiteTypeI"=>"required",
            "SitePlanI"=>"required",
            "SiteUserI"=>"required",
            "SitePassI"=>"required",
        ]);



        //check User From DB
        $CheckUser=BlaxkUser::where("BlaxkUser",$validate['SiteUserI'])->count();

        if($CheckUser == 0){

            //Save User 
            $saveUser=new BlaxkUser([
                "BlaxkUser"=>$validate['SiteUserI'],
                "BlaxkPass"=>bcrypt($validate['SitePassI'])
            ]);
            $getUser=$saveUser->save();

            //Save Store
            $saveStore=new blaxkSite([
                "SiteName"=>$validate['SiteNameI'],
                "SiteType"=>$validate['SiteTypeI'],
                "SiteUser"=>$saveUser['id'],
                "PlanType"=>$validate['SitePlanI'],
                'ClientToken'=>md5(rand(1, 10) . microtime()),
            ]);
            $saveStore->save();

            $SiteId=$saveStore['id'];


        // experemental Not  Tested Yet And Need For Updates


            //Add Ads rows For Site

            $saveAd0=new BlaxkAd([
                "AdName"=>"HeadBanner",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd1=new BlaxkAd([
                "AdName"=>"MainSideBox",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd2=new BlaxkAd([
                "AdName"=>"MainSideBanner",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd3=new BlaxkAd([
                "AdName"=>"AdTopBlogBanner",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd4=new BlaxkAd([
                "AdName"=>"AdBottomBlogBanner",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd5=new BlaxkAd([
                "AdName"=>"AdBlogTopBox",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd6=new BlaxkAd([
                "AdName"=>"AdBlogBottomBox",
                "AdImage"=>"http://127.0.0.1/cdn/images/1.jpg",
                "AdView"=>"0",
                "AdClick"=>"0",
                "SiteId"=>$SiteId
            ]);

            $saveAd0->save();
            $saveAd1->save();
            $saveAd2->save();
            $saveAd3->save();
            $saveAd4->save();
            $saveAd5->save();
            $saveAd6->save();
            
        // experemental Not  Tested Yet And Need For Updates


            //Add Folders On Drive
        //     $SiteDir=Storage::cloud()->makeDirectory($SiteId);

        //     //Check Folder
        //     $dir = '/';
        //     $recursive = false; // Get subdirectories also?
        //     $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        //     $dir = $contents->where('type', '=', 'dir')
        //         ->where('filename', '=',$SiteId)
        //         ->first(); // There could be duplicate directory names!

        //     if ( ! $dir) {
        //         return 'Directory does not exist!';
        //     }

        //     //Make Sub Folders for Pdf Center
        //     $AuthorPic=Storage::cloud()->makeDirectory($dir['path'].'/AuthorPic');
        //     $BookPdf=Storage::cloud()->makeDirectory($dir['path'].'/File');
        //     $BookThumbnail=Storage::cloud()->makeDirectory($dir['path'].'/Thumbnail');
            
        //     //getFolders 
        //     $CollectDir=collect(Storage::cloud()->listContents($dir['path'], $recursive));
        //     $folders=$CollectDir->where('type','=','dir');

        //     foreach( $folders as $folder){

        //     $array[$folder['name']]=$folder['basename'];
        //     };

        // //save folders On DB
        //     $saveFolders=new BlaxkFolder([
        //         'AuthorPic'=>$array['AuthorPic'],
        //         'File'=>$array['File'],
        //         'Thumbnail'=>$array['Thumbnail'],
        //         'SiteId'=>$SiteId
        //     ]);

        //     $saveFolders->save();

            return  redirect()->route('BigMain')->with("err",['err'=>"1","message"=>"Site Succsessfully Saved"]);
        }
        else{
            return  redirect()->route('BigMain')->with("err",['err'=>"0","message"=>"User Name Is Alerady Exists"]);
        }
    }



}
