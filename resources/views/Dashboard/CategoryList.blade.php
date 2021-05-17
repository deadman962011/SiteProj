@extends('layout.master')

@section('style')

<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables-responsive/dataTables.responsive.css">
@endsection



@section('content')

@include('inc.navbar')

@if ($SiteType == "Blogger")
 @include('inc.BloggerSideNav') 
@elseif( $SiteType == "PDFCENTER" )
 @include('inc.PDFCenterSideNav') 
@elseif( $SiteType == "Store" )
 @include('inc.StoreSideNav')
@endif

@include('inc.error')

<div id="content">
<table class='table table-bordered'>
 <thead>
    <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Category Color</th>
        <th>Books Count</th>
        <th>Options</th>
    </tr>
 </thead>
 <tbody>
   @foreach ($Categories as $Category)
    <tr>
        <td><span class='{{ $Category['CategoryIcon'] }}' style='font-size:50px' ></span></td>
        <td>{{ $Category['CategoryName'] }}</td>
        <td><div style="width:60px;height:60px;background-color:{{ $Category['CategoryColor'] }}" ></div>  </td>
        <td>{{ $Category['BookNum'] }}</td>
        <td>
            <div class="dropdown">
                <button class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown" >Options</button>
                <ul class="dropdown-menu">
                    <li><button class="btn btn-warning btn-block UpdateBtn" data-toggle="modal" data-target="#UpdateCategory" data-cat="{{$Category['id']}}" >Update</button></li>
                    <li><button class="btn btn-danger btn-block DelCatBtn" data-toggle="modal" data-target="#DelCategory" data-cat="{{$Category['id']}}" >Delete</button></li>
                  </ul>
            </div>


        
        </td>
    </tr>
   @endforeach
 </tbody>
</table>

  <!-- Modal -->
  <div class="modal fade" id="UpdateCategory" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Category Modal</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route("UpdateCategoryPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="post" class="form-horizontal">
            
            <div class="form-group">
                <div class="col-sm-3"><label for="CategoryNameI">Category Name:</label></div>
                <div class="col-sm-6"><input type="text" name="CategoryNameI" class="form-control"></div>
            </div>
            <div class='form-group'>
              <div class="col-sm-3"><label for="CategoryIconI">Category Icon:</label></div>
              <div class='col-sm-6'>
               <div class="input-group">
                 <input data-placement="bottomRight" class="form-control icp icp-auto"  name='CategoryIconI' type="text"/>
                 <span class="input-group-addon"></span>
             </div>
              </div>
            </div>
       </div>
       <div class="modal-footer">
         <input type="hidden" name="CategoryId" >
         {{ csrf_field() }}
         <input type="submit" value="Update Category" class="btn btn-primary">
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

$(document).on("click",".UpdateBtn",function(){
  var CatId= $(this).data('cat');


  $.ajax({url:'{{ route("UpdateCategoryAj",["SiteType"=>$SiteType,"SiteId"=>$SiteId]) }}',
            method:'POST',
            data:{CatId:CatId,
                _token:"{{ csrf_token()}}"
            },
            success:function(data){
              $("input[name='CategoryNameI']").val(data.CategoryName);
              $("input[name='CategoryIconI']").val(data.CategoryIcon);
              $("input[name='CategoryId']").val(data.id);
            }
  })
})

$(document).on('click','.DelCatBtn',function(){

 var CatId = $(this).data('cat');

 $("input[name='CategoryDelId']").val(CatId);

})


})

</script>

@endsection