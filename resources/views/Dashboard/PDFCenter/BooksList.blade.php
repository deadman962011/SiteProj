@extends('layout.master')

@section('style')

<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables-responsive/dataTables.responsive.css">
@endsection
@include('inc.navbar')


@section('content')
@include('inc.PDFCenterSideNav')
@include('inc.error')

<div id="content">

    <table id='AuthorTable' class="table table-bordered table-responsive">
        <thead>
         <tr>
             <th>Book Cover</th>
             <th>Book Name</th>
             <th>Book Link</th>
             <th>Book Alt</th>
             <th>Book Category</th>
             <th>Book Author</th>
             <th>Review</th>
             <th>Language</th>
             <th> Pages Num</th>
             <th>Size </th>
             <th>Relase Date</th>
             <th>Downloads</th>
             <th>Views</th>
             <th>Status</th>
         </tr>
        </thead>
        <tbody>
          @if (!empty($Books))
              

         @foreach ($Books as $book)
             <tr>
                 <td><img src="https://drive.google.com/uc?id={{ $book['BookPic'] }}" class='img-responsive'></td>
                 <td>{{ $book['BookName'] }}</td>
                 <td>
                     @if (empty($book['BookFile']))
                         Link
                     @else
                     <a href="https://drive.google.com/open?id={{ $book['BookFile'] }}">Link</a>
                     @endif
                     
                    
                 </td>
                 <td>
                 @if (empty($book['BookLink']))
                  Alternative
                 @else
                  <a href="{{ $book['BookLink'] }}" >Alternative</a>
                 @endif
                </td>
                 <td>{{ $book['Category']['CategoryName'] }}</td>
                 <td>{{ $book['Author']['AuthorName'] }}</td>
                 <td>{{ $book['BookReview'] }}</td>
                 <td>{{ $book['BookLang'] }}</td>
                 <td>{{ $book['BookPagesNum'] }}</td>
                 <td>{{ $book['BookSize'] }}</td>
                 <td>{{ $book['BookRelaseDate'] }}</td>
                 <td>{{ $book['DownloadsNum'] }}</td>
                 <td>{{ $book['ViewsNum'] }}</td>
                 <td>
                    <div class="dropdown">
                        <button class='btn btn-primary btn-block' data-toggle="dropdown" >Options</button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <form  method="post">
                                @if ($book['BookStatus'] == "0")
                                  <input  type="submit" value="Approved" class="btn btn-success btn-block">
                                 @else
                                  <input  type="submit" value="Un Approved" class="btn btn-warning btn-block">
                                @endif
                                <input type="hidden" name="BookId" value='{{ $book['id'] }}'>
                               
                                {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                                <form action="{{ route("DelBookPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="POST">
                                 <input type="submit" value="Delete" class="btn btn-danger btn-block">
                                 <input type="hidden" name="BookId" value='{{ $book['id'] }}' >
                                 {{ csrf_field() }}
                                </form>
                            </li>
                            <li><button id="UpdateBtn" class="btn btn-warning btn-block" data-toggle="modal" data-target="#UpdateBookM" data-book="{{ $book['id'] }}" >Update Book</button></li>
                          </ul>
                    </div>
                </td>
             </tr>
         @endforeach
         @endif
        </tbody>
    </table>






     <!-- Modal -->
  <div class="modal fade" id="UpdateBookM" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Book Modal</h4>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" method='POST' action="{{ route("UpdateBookPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" class="form-horizontal">
       <!--Book name  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookNameI" class="form-label">Book Name:</label></div>
        <div class="col-sm-8"><input type="text" name='BookNameI' class="form-control"></div>
       </div> 
     
       <!-- Book Pic -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookPicI" class="form-label">Book Cover:</label></div>
        <div class="col-sm-2"><a class='BookCoverLink' href="#">Link</a></div>
        <div class="col-sm-6"><input type="file" name="BookPicI"  class="form-control"></div>
       </div>
   
       <!-- Book File Upload -->
       <div class="form-group">
         <div class="col-sm-3"><label for="BookFileI" class="form-label">Book File Upload:</label></div>
         <div class="col-sm-2"><a class='BookFileLink' href="">link</a></div>
         <div class="col-sm-6"><input type="file" name="BookFileI"  class="form-control"></div>
        </div>
   
     
     
       <!-- Book link -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookLinkI" class="form-label">Book Link:</label></div>
        <div class="col-sm-2"><a class='BookAltLink' href="">Alternative</a></div>
        <div class="col-sm-6"><input type="text" name="BookLinkI"  class="form-control"></div>
       </div>
     
     
       <!-- Book Category  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookCategoryI" class="form-label">Book Category:</label></div>
        <div class="col-sm-2"><h4 class='CategoryNameH' ></h4></div>
        <div class="col-sm-6"><select name="BookCategoryI" class='BookSelect form-control'>
         @foreach ($Categories as $Category)
           <option value="{{ $Category['id'] }}">{{ $Category['CategoryName'] }}</option>
         @endforeach
        </select>
        </div>
       </div>
     
     
     
       <!-- Book author  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookAuthorI" class="form-label">Book Author:</label></div>
        <div class="col-sm-2"><h4 class='AuthorNameH' ></h4></div>
        <div class="col-sm-6">
          <select  name="BookAuthorI" class='form-control BookSelect ' >
           @foreach ($Authors as $Author)
              <option value="{{ $Author['id'] }}">{{ $Author['AuthorName'] }}</option>
           @endforeach
          </select>
         </div>
       </div>

     
         <!-- Book Review -->
         <div class="form-group">
        <div class="col-sm-3"><label for="BookReviewI" class="form-label">Review:</label></div>
        <div class="col-sm-2"><h4></h4></div>
        <div class="col-sm-6"><select name="BookReviewI" class='form-control' >
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
        </select>
        </div>
       </div>
     
     
       <!-- Book Descreption  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookDescI" class="form-label">Book Descreption:</label></div>
        <div class="col-sm-8"><textarea name="BookDescI" class='form-control DescArea'  rows="10"></textarea></div>
       </div>

       <!-- book Language -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookLangI" class="form-label">Book Language:</label></div>
        <div class="col-sm-8"><input type="text" name='BookLangI' class="form-control"></div>
       </div>
     
      <!-- Pages Number -->
      <div class="form-group">
        <div class="col-sm-3"><label for="BookPagesNumI" class="form-label">Book Pages Number:</label></div>
        <div class="col-sm-8"><input type="text" name='BookPagesNumI' class="form-control"></div>
       </div>
     
         <!-- Book size -->
       <div class="form-group">
        <div class="col-sm-3"><label for="BookSizeI" class="form-label">Book Size:</label></div>
        <div class="col-sm-8"><input type="text" name='BookSizeI' class="form-control"></div>
       </div>  
     
         <!-- Book Relase Date  -->
         <div class="form-group">
        <div class="col-sm-3"><label for="BookRelaseDateI" class="form-label">Book relase Date:</label></div>
        <div class="col-sm-8"><input type="date" name='BookRelaseDateI' class="form-control"></div>
       </div>
       <!-- submit  -->
       <input type="hidden" name="BookId" >
       {{ csrf_field() }}

     
        </div>
        <div class="modal-footer">
          <input type="submit" value="Update" class="btn btn-success">
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

@endSection


@section('script')

<script src="http://127.0.0.1/cdn/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="http://127.0.0.1/cdn/datatables-responsive/dataTables.responsive.js"></script>
<script>

$(document).ready(function(){
    $(document).on("click",'#UpdateBtn',function(){
     var BookId=$(this).data('book');
     $.ajax({url:'{{ route("UpdateBookAj",["SiteType"=>$SiteType,"SiteId"=>$SiteId]) }}',
            method:'POST',
            data:{BookId:BookId,
                _token:"{{ csrf_token()}}"
            },
            success:function(data){
                $("input[name='BookId']").val(data.id);
                $("input[name='BookNameI']").val(data.BookName);
                $("input[name='BookLinkI']").val(data.BookLink);
                $("input[name='BookLangI']").val(data.BookLang);
                $("input[name='BookPagesNumI']").val(data.BookPagesNum);
                $("input[name='BookSizeI']").val(data.BookSize);
                $("input[name='BookRelaseDateI']").val(data.BookRelaseDate);
                $(".DescArea").val(data.BookDesc);  

                $('.CategoryNameH').text(data.category.CategoryName);
                $('.AuthorNameH').text(data.author.AuthorName);

                if(data.BookFile !=null){
                  $(".BookFileLink").attr("href", "https://drive.google.com/open?id="+data.BookFile)
                }
                else{
                  $(".BookFileLink").attr("href", "")
                }
                if(data.BookLink !=null){
                  $(".BookAltLink").attr("href", ""+data.BookLink)
                }
                else{
                  $(".BookAltLink").attr("href", "")
                }
               
                $(".BookCoverLink").attr("href", "https://drive.google.com/uc?id="+data.BookPic)       
  
            }
           })


    })
})














</script>

@endsection