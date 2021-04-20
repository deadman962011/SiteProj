<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;
use App\Models\BlaxkFolder;
use App\Models\BlaxkBlog;

class BloggerController extends Controller
{
    //

    public function DashboardBlog($SiteType,$SiteId)
    {
      return view("Dashboard.Blogger.main",['SiteType'=>$SiteType,'SiteId'=>$SiteId]);
    }

    
    public function AddBlogGet($SiteType,$SiteId)
    {

        //get Category
        $getCategory=BlaxkCategory::where("SiteId",$SiteId)->get();

        //get Authors
        $getAuthor=BlaxkAuthor::where('SiteId',$SiteId)->get();


        return view("Dashboard.Blogger.AddBlog",['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Authors'=>$getAuthor,'Categories'=>$getCategory]);
    }

        

    public function AddBlogPost(Request $request,$SiteType,$SiteId)
    {
        //get Folders
        $getFolders=blaxkFolder::where('SiteId',$SiteId)->first();

        //validate Inputs
        $validate=$request->validate([
        'BlogTitleI'=>'required',
        'BlogDescI'=>'required',
        'BlogCategoryI'=>'required',
        'BlogAuthorI'=>'required',
        'BlogBodyI'=>'required',
        'BlogTagsI'=>'required',
        'BlogStatusI'=>"required"
        //  'BlogThumbI'=>'required'
        ]);
        
        // //upload Thumbnail

        //         $filename=Storage::cloud()->put($getFolders['Thumbnail'],$request->file("BlogThumbI"),file_get_contents($request->file('BlogThumbI')));
        //         $recursive = false; // Get subdirectories also?
        //         $contents = collect(Storage::cloud()->listContents($getFolders['Thumbnail'], $recursive));
        //         //get New basename
        //         $file = $contents
        //             ->where('type', '=', 'file')
        //             ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        //             ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        //         ->first(); // there can be duplicate file names!
        //         $Thumbnail=$file['basename'];
                $Thumbnail='http://127.0.0.1/cdn/images/1.jpg';

                //Set BlogStatus
            if($validate['BlogStatusI'] == "save"){
                $BlogStatus=0;
            }elseif($validate['BlogStatusI'] == "draft"){
                $BlogStatus=1;
            }

        
            //Save New Blog
            $saveBlog=new BlaxkBlog([
                "BlogTitle"=>$validate['BlogTitleI'],
                "BlogDesc"=>$validate['BlogDescI'],
                "BlogCategory"=>$validate['BlogCategoryI'],
                "BlogAuthor"=>$validate['BlogAuthorI'],
                "BlogBody"=>$validate['BlogBodyI'],
                "BlogTags"=>$validate['BlogTagsI'],
                "BlogThumb"=>$Thumbnail,
                'SiteId'=>$SiteId ,
                'BlogStatus'=>$BlogStatus,
                'ViewNum'=>0
            ]);

            $saveBlog->save();

            return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Blog Successfuly Created']);
    }

    
 public function SaveImage(Request $request,$SiteType,$SiteId)
 {

    ///get Folders 
    $getFolders=BlaxkFolder::where("SiteId",$SiteId)->first();
    if($request->hasFile("file")){

        $dirPdf=$getFolders['File'];
        $filenamePdf=Storage::cloud()->put($dirPdf,$request->file("file"),file_get_contents($request->file('file')));
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dirPdf, $recursive));
        $filePdf = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filenamePdf, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filenamePdf, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
            $fileIdPdf=$filePdf['basename'];

        return response()->json(['location'=>"https://drive.google.com/uc?id=".$fileIdPdf], 200);
    }
    else{
        return response()->json("Somthing Wrong", 404);
    }
    
 }

 public function DelImage(Request $request,$SiteType,$SiteId)
 {


    //get Folders
    $getFolders=BlaxkFolder::where("SiteId",$SiteId)->first();


    //get File BaseName
     $Src=$request->input('Src');
     $baseName = explode("uc?id=", $Src);
    
     
     //Delete Image
     $dir=$getFolders['File'];
     $recursive = false; // Get subdirectories also?
     $contents = collect(Storage::cloud()->listContents($dir, $recursive));
 
     $file = $contents
         ->where('type', '=', 'file')
         ->where('basename', '=', $baseName[1])
         ->first(); // there can be duplicate file names!

         Storage::cloud()->delete($file['path']);

         return  response(200);
         

 }





}
