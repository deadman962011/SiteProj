@extends('layout.master')

@section('style')

<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables-responsive/dataTables.responsive.css">
@endsection



@section('content')

@include('inc.navbar')

@if ($SiteType == "Blogger")
 @include('inc.BloggerSideNav') 
@else
 @include('inc.PDFCenterSideNav') 
@endif

@include('inc.error')

<div id="content">

    <table id='AuthorTable' class="table table-bordered table-responsive">
        <thead>
         <tr>
             <th>Author Pic</th>
             <th>Author Name</th>
             <th>Books Count</th>
             <th>Options</th>
         </tr>
        </thead>
        <tbody>
            @foreach ($Authors as $Author)
                <tr>
                    <td><img class='img-responsive' style='width:150px' src="https://drive.google.com/uc?id={{$Author['AuthorPic']}} " alt=""></td>
                    <td>{{$Author['AuthorName']}}</td>
                    <td>{{$Author['BookNum']}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options</button>
                            <ul class="dropdown-menu">
                                <li><button type="button" class="btn btn-warning btn-block UpdateAuthor" data-toggle="modal" data-target="#UpdateAuthor" data-id="{{ $Author['id'] }}">Update</button></li>
                                <li><button class="btn btn-danger btn-block DelAutBtn" data-toggle="modal" data-target="#DelAuthor" data-aut="{{$Author['id']}}" >Delete</button></li>
                              </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
<div id="UpdateAuthor" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Update Author  Modal </h4>
        </div>
        <div class="modal-body">
            <form action="{{ route("UpdateAuthorPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="post" enctype='multipart/form-data' class="form-horizontal">
                <div class="form-group">
                   <div class="col-sm-3"><label for="AuthorNameI">Author Name:</label></div>
                   <div class="col-sm-6"><input type="text" name="AuthorNameI" class="form-control"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3"><label for="AuthorPicI">Author Pic:</label></div>
                  <div class="col-sm-6"><input type="file" name="AuthorPicI" class="form-control"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3"><label for="AuthorDescI">Author Descreption </label></div>
                  <div class="col-sm-6"><textarea name="AuthorDescI" class='form-control AuthoDesc' cols="30" rows="10"></textarea></div>
                </div>
           </div>
           <div class="modal-footer">
               <input type="hidden" name="AuthorId">
             {{ csrf_field() }}
             <input type="submit" value="Update Author" class="btn btn-primary">
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

$(document).on("click",'.UpdateAuthor',function(){


  var AuthorId= $(this).data("id");

  $.ajax({
      method:"post",
      url:"{{ route('UpdateAuthorAj',['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}",
      data:{
          id:AuthorId,
          _token:"{{ csrf_token()}}"
      },success:function(data){
              $("input[name='AuthorNameI']").val(data.AuthorName);
              $(".AuthoDesc").val(data.AuthorDesc);
              $("input[name='AuthorId']").val(data.id)
            }
  })
})



$(document).on('click','.DelAutBtn',function(){

 var AutId =$(this).data('aut');

 $('input[name=AuthorDelId]').val(AutId);

})


$("#AuthorTable").dataTable()


})

</script>

@endsection