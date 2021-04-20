<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\blaxkSite;
use App\Models\BlaxkCategory;
use App\Models\BlaxkAuthor;     
use App\Models\BlaxkPdf;
use App\Models\BlaxkFolder;
use App\Models\BlaxkAd;


class PdfController extends Controller
{
    //


    public function BooksListGet ($SiteType,$SiteId)
{

    //get Book
    $getBooks=BlaxkPdf::where('SiteId',$SiteId)->get();
    $getBooks->load("Category");
    $getBooks->load("Author");

    //get Categories
    $getCategory=BlaxkCategory::where('SiteId',$SiteId)->get();


    //get Authors
    $getAuthor=BlaxkAuthor::where("SiteId",$SiteId)->get();

    return view("Dashboard.PDFCenter.BooksList",['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Books'=>$getBooks,'Categories'=>$getCategory,'Authors'=>$getAuthor]);
}

public function BooksListPost(Request $request,$SiteType,$SiteId)
{

    //Update Book To Not Approved
    $validate=$request->validate([
        "BookId"=>"required",
    ]);
   $getBook=BlaxkPdf::find($validate['BookId']);

   if($getBook['BookStatus'] == "0"){

        //Update Book To Not Approved
        $updateBook=$getBook->update([
            'BookStatus'=>"1"
        ]);
        return redirect()->route('BookListGet',['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Book Updated isnt Approved Now']);
    }
    elseif ($getBook['BookStatus'] == "1") {

        //Update Book To Approved
        $updateBook=$getBook->update([
            'BookStatus'=>"0"
        ]);
        return redirect()->route('BookListGet',['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Book Updated is Approved Now']);
    }
}



public function AddBookGet($SiteType,$SiteId)
{   

    //get Categories
    $getCategories=BlaxkCategory::where('SiteId',$SiteId)->get();

    //get Authors
    $getAuthors=BlaxkAuthor::where('SiteId',$SiteId)->get();

    return view("Dashboard.PDFCenter.AddBook",['SiteType'=>$SiteType,'SiteId'=>$SiteId,'Authors'=>$getAuthors,'Categories'=>$getCategories]);
}


public function AddBookPost(Request $request,$SiteType,$SiteId)
{
    //validate Inputs
    $validate=$request->validate([
        'BookNameI'=>'required',
        'BookPicI'=>"required|mimes:jpeg,png,jpg",
        'BookFileI'=>"mimes:pdf,zip",

        'BookCategoryI'=>'required',
        'BookAuthorI'=>'required',
        'BookReviewI'=>'required',
        'BookDescI'=>'required',
        'BookLangI'=>'required',
        'BookPagesNumI'=>'required',
        'BookSizeI'=>'required',
        'BookRelaseDateI'=>'required'
    ]);


    //if no uploaded file and alt link is empty Break the request
   if(empty($request->input('BookLinkI')) && empty($request->file("BookFileI"))){
       return redirect()->route("AddBookGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with('err',['err'=>"0",'message'=>'You Need To Upload Pdf file or Put An external Link']);
   }
      


    //Increase Category By 1
    $getCategory=BlaxkCategory::find($validate['BookCategoryI']);
    if(!empty($getCategory)){

        $NewBookNumC=$getCategory['BookNum']+1;

        $getCategory->update([
            "BookNum"=>$NewBookNumC
        ]);
    }
    else{
        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0","message"=>"Somthing Worng"]);
    }

    //Increase Author By 1
    $getAuthor=BlaxkAuthor::find($validate['BookAuthorI']);
    if(!empty($getAuthor)){

        $NewBookNumA=$getAuthor['BookNum']+1;

        $getAuthor->update([
            "BookNum"=>$NewBookNumA
        ]);
    }
    else{
        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0","message"=>"Somthing Worng"]);
    }


    //get Folders
    $getFolders=BlaxkFolder::where("SiteId",$SiteId)->first();

    //Upload Book Cover
    if($request->hasFile("BookPicI")){

        $dir=$getFolders['Thumbnail'];
        $filename=Storage::cloud()->put($dir,$request->file("BookPicI"),file_get_contents($request->file('BookPicI')));
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
    
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
            $fileId=$file['basename'];              
    }
    else{
        $fileId="default";
    }

    
    //Upload Book To GDrive
    if($request->hasFile("BookFileI")){

    $dirPdf=$getFolders['File'];
    $filenamePdf=Storage::cloud()->put($dirPdf,$request->file("BookFileI"),file_get_contents($request->file('BookFileI')));
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dirPdf, $recursive));
    $filePdf = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filenamePdf, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filenamePdf, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!
        $fileIdPdf=$filePdf['basename'];
    }
    else{
        $fileIdPdf=null;
    }

    //Check Book

    $getBook=BlaxkPdf::where([['SiteId',$SiteId],['BookName',$validate['BookNameI']]])->count();
    if($getBook > 0){
        return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"0","message"=>"Book IS Already Exists"]);
    }
    else{
 
    $saveBook=new BlaxkPdf([
        "BookName"=>$validate['BookNameI'],
        'BookPic'=>$fileId,
        'BookFile'=>$fileIdPdf,
        'BookLink'=>$request->input("BookLinkI"),
        'BookCategory'=>$validate['BookCategoryI'],
        'BookAuthor'=>$validate['BookAuthorI'],
        'BookReview'=>$validate['BookReviewI'],
        'BookDesc'=>$validate['BookDescI'],
        'BookLang'=>$validate['BookLangI'],
        'BookPagesNum'=>$validate['BookPagesNumI'],
        'BookSize'=>$validate['BookSizeI'],
        'BookRelaseDate'=>$validate['BookRelaseDateI'],
        'SiteId'=>$SiteId,
        'ViewsNum'=>"0",
        'DownloadsNum'=>"0",
        'BookStatus'=>"0"
    ]);
    $saveBook->Save();

    return redirect()->route("MainDashboard",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>"1",'message'=>'Book Successfully Added']);

    }

}

public function DelBookPost(Request $request,$SiteType,$SiteId)
{
    //validate Input
    $validate=$request->validate([
        "BookId"=>"required",
    ]);

    //get Book
    $getBook=BlaxkPdf::find($validate['BookId']);

    //get Folders
    $getFolders=BlaxkFolder::find($SiteId);


    //Delete Pdf File If !empty
    if(!empty($getBook['BookFile'])){
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($getFolders['File'], $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('basename', '=', $getBook['BookFile'])
            ->where('extension', '=', "pdf")
            ->first(); // there can be duplicate file names!
        Storage::cloud()->delete($file['path']);
    }
    
    //Delete Thumbnail If !empty
    if(!empty($getBook['BookPic'])){
        $recursive = false; // Get subdirectories also?
        $contentsT = collect(Storage::cloud()->listContents($getFolders['Thumbnail'], $recursive));
        $fileT = $contentsT
            ->where('type', '=', 'file')
            ->where('basename', '=', $getBook['BookPic'])
            ->first(); // there can be duplicate file names!
        Storage::cloud()->delete($fileT['path']);  
    }
    else{
        return redirect()->route("BookListGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->With('err',['err'=>'1','message'=>"Somthing Wrong"]);
    }

    //reduce Author BooksNum By -1
    $getAuthor=BlaxkAuthor::find($getBook['BookAuthor']);
    if(!empty($getAuthor)){
         $getAuthorR=$getAuthor['BookNum']-1;
        $getAuthor->update([
            'BookNum'=>$getAuthorR
        ]);
    }
    else{
        return redirect()->route("BookListGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->With('err',['err'=>'1','message'=>"Somthing Wrong"]);
    }

    //reduce Category NooksNum By -1
    $getCategory=BlaxkCategory::find($getBook['BookCategory']);
    if(!empty($getCategory)){
        $getCategoryR=$getCategory['BookNum']-1;

        $getCategory->update([
            'BookNum'=>$getCategoryR
        ]);
    }

    //Delete Book
    $getBook->delete();
    return redirect()->route("BookListGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->With('err',['err'=>'1','message'=>"Book Deleted Successfully"]);

}



public function UpdateBookAj(Request $request)
{

    //validate Inputs
    $validate=$request->validate([
        "BookId"=>"required"
    ]);

    //get Book
    $getBook=BlaxkPdf::find($validate['BookId']);
    $getBook->load("Category");
    $getBook->load("Author");
    return $getBook;

}


public function UpdateBookPost(Request $request ,$SiteType,$SiteId)
{


   //validate Some Inputs
   $validate=$request->validate([
       "BookId"=>"required",
       "BookNameI"=>"required",
       "BookDescI"=>"required",
       "BookLangI"=>"required",
       "BookPagesNumI"=>"required",
       "BookSizeI"=>"required",
       "BookRelaseDateI"=>"required"
   ]);

   //get Book
   $getBook=BlaxkPdf::find($validate['BookId']);

   //get Folders
   $getFolders=BlaxkFolder::find($SiteId);


   //update Category 
    
        //get old Category and reduce it by -1
        $OldCategory=BlaxkCategory::find($getBook['BookCategory']);
        $OldCategory->update([
        "BookNum"=>$OldCategory['BookNum']-1
        ]); 

        //get New Category and increase it By +1
        $NewCategory=BlaxkCategory::find($request->input('BookCategoryI'));
        $NewCategory->update([
        "BookNum"=>$NewCategory['BookNum']+1
        ]);


   //Update Author

        //get old Author and reduce it by -1
        $OldAuthor=BlaxkAuthor::find($getBook['BookAuthor']);
        $OldAuthor->update([
        "BookNum"=>$OldAuthor['BookNum']-1
        ]); 

        //get New Author and increase it By +1
        $NewAuthor=BlaxkAuthor::find($request->input('BookAuthorI'));
        $NewAuthor->update([
        "BookNum"=>$NewAuthor['BookNum']+1
        ]);


   //Update Cover File
   if($request->hasFile("BookPicI")){
   
        //get Old Cover And Remove It
        $dirT=$getFolders['Thumbnail'];
        $recursive = false; // Get subdirectories also?
        $contentsT = collect(Storage::cloud()->listContents($dirT, $recursive));

        $fileT = $contentsT
            ->where('type', '=', 'file')
            ->where('basename', '=', $getBook['BookPic'])
            ->first(); // there can be duplicate file names!
            Storage::cloud()->delete($fileT['path']); 

        //Upload New File
        $filenameNewT=Storage::cloud()->put($dirT,$request->file("BookPicI"),file_get_contents($request->file('BookPicI')));
        $contentsNewT = collect(Storage::cloud()->listContents($dirT, $recursive));
        //get New basename
        $fileNewT = $contentsNewT
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filenameNewT, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filenameNewT, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!
        $ThumbnailT=$fileNewT['basename'];
   }else{
       $ThumbnailT=$getBook['BookPic'];
   }

   
   //Update Pdf File
   if($request->hasFile("BookFileI")){

        //get Old file  And Remove It
        $dirF=$getFolders['File'];
        $recursive = false; // Get subdirectories also?
        $contentsF = collect(Storage::cloud()->listContents($dirF, $recursive));
    
        $fileF = $contentsF
            ->where('type', '=', 'file')
            ->where('basename', '=', $getBook['BookFileI'])
            ->first(); // there can be duplicate file names!
            Storage::cloud()->delete($fileF['path']); 
    
    
       //Upload New File
       $filenameNewF=Storage::cloud()->put($dirF,$request->file("BookFileI"),file_get_contents($request->file('BookFileI')));
       $contentsNewF = collect(Storage::cloud()->listContents($dirF, $recursive));
       //get New basename
       $fileNewF = $contentsNewF
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filenameNewF, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filenameNewF, PATHINFO_EXTENSION))
       ->first(); // there can be duplicate file names!
       $FileF=$fileNewF['basename'];
   }
   else{
       $FileF=$getBook['BookFile'];
   }

   //Update Book
   $getBook->update([
       "BookName"=>$validate['BookNameI'],
       "BookPic"=>$ThumbnailT,
       "BookLink"=>$request->input("BookLinkI"),
       "BookCategory"=>$request->input("BookCategoryI"),
       "BookAuthor"=>$request->input("BookAuthorI"),
       "BookReview"=>$request->input("BookReviewI"),
       "BookDesc"=>$validate['BookDescI'],
       "BookLang"=>$validate['BookLangI'],
       "BookPagesNum"=>$validate['BookPagesNumI'],
       "BookSize"=>$validate['BookSizeI'],
       "BookRelaseDateI"=>$validate['BookRelaseDateI'],
       "BookFile"=>$FileF
   ]);

   return redirect()->route("BookListGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId])->with("err",['err'=>'1','message'=>"Book Successfully Updated"]);
}




}
