@extends('layout.master')

@section('style')

<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1/cdn/datatables-responsive/dataTables.responsive.css">
@endsection



@section('content')
@include('inc.navbar')
@include('inc.StoreSideNav')
@include('inc.error')

<div id="content">

    @foreach ($Products as $Product)
    <button type="button" class="btn btn-warning UpdateProdBtn " data-toggle="modal" data-target="#UpdateProdModal" data-prod="{{ $Product['id'] }}" >Update</button>
    <button type="button" class="btn btn-danger DelProdBtn " data-toggle="modal" data-target="#DelProdModal" data-prod="{{ $Product['id'] }}" >Delete</button>

    @endforeach

<!-- Del Product Modal -->
<div class="modal fade" id="DelProdModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Delete Product Modal</h4>
    </div>
    <div class="modal-body">
      <form action="{{ route('DelProdPost',['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method='POST' class="">
          <div class="form-group">
              <input type="text" name="DelPassI" placeholder=" Enter Your Password"  class="form-control">
          </div>
        
          <input type="hidden" name="ProdDelId"  >
        {{ csrf_field() }}
    </div>
    <div class="modal-footer">
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>


<!--  Update Product Modal -->
<div id="UpdateProdModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Update Product Modal </h4>
      </div>
      <div class="modal-body">
        
      <form action="{{route("UpdateProdPost",["SiteType"=>$SiteType,'SiteId'=>$SiteId])}}" method="post" enctype='multipart/form-data' class="form-horizontal">
    <!--Product Title   -->
    <div class="form-group">
      <div class="col-sm-3"><label for="ProdTitleUI" class="form-label">Product Title:</label></div>
      <div class="col-sm-9"><input type="text" name='ProdTitleUI' class="form-control" required></div>
     </div> 

     <!-- Product Descreption -->
     <div class="form-group">
         <div class="col-sm-3"><label for="ProdDescUI">Product Description:</label></div>
         <div class="col-sm-9"><textarea name="ProdDescUI" class="form-control"  rows="5" required></textarea></div>
     </div>
   
     <!-- Product Thumbnail -->
     <div class="form-group">
      <div class="col-sm-3"><label for="ProdThumbUI" class="form-label">Prod Thumbnail:</label></div>
      <div class="col-sm-9"><input type="file" name="ProdThumbUI"  class="form-control"></div>
     </div>
    
     <!-- Prod  Category  -->
     <div class="form-group">
      <div class="col-sm-3"><label for="ProdCategoryUI" class="form-label">Prod Category:</label></div>
      <div class="col-sm-6">
        <select  name="ProdCategoryUI" class='singleSelect BookSelect form-control' required>
          @foreach ($Categories as $Category)
            <option value="{{ $Category["id"] }}">{{ $Category['CategoryName'] }}</option>
          @endforeach
      </select>
      </div>
     </div>
   
     <!-- Prod  author  -->
     <div class="form-group">
      <div class="col-sm-3"><label for="ProdBrandUI" class="form-label">Prod Brand:</label></div>
      <div class="col-sm-6">
        <select  name="ProdBrandUI" class='singleSelect form-control BookSelect' required >
          @foreach ($Brands as $Brand)
            <option value="{{ $Brand["id"] }}">{{ $Brand['AuthorName'] }}</option>
          @endforeach
        </select>
      </div>
     </div>
     
     <!-- Prod Tags -->
     <div class="form-group">
      <div class="col-sm-3"><label for="ProdPriceUI">Prod Price:</label></div>
      <div class="col-sm-9"><input type="text" name="ProdPriceUI" class="form-control" required></div>
     </div>
   
   
     <!-- Prod Body  -->
     <div class="form-group">
      <div class="col-sm-2"><label for="ProdBodyUI" class="form-label">Prod  Body:</label></div>
      <div class="col-sm-12"><textarea name="ProdBodyUI" class='form-control'  rows="30" required></textarea></div>
     </div>
         </div>
         <div class="modal-footer">
             <input type="hidden" name="ProdUI">
           {{ csrf_field() }}
           <input type="submit" value="Update Product" class="btn btn-primary">
           </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 
</div>
@endsection

@section('script')

<script>

 $(document).on('click','.DelProdBtn',function(){

    var Prod =$(this).data('prod');

    $('input[name=ProdDelId]').val(Prod)

 })




 //Update Product 

 $(document).on('click','.UpdateProdBtn',function(){

    var Prod =$(this).data('prod');


     //get Product
     $.ajax({
       method:'post',
       url:'{{ route("UpdateProdAj",["SiteType"=>$SiteType,"SiteId"=>$SiteId]) }}',
       data:{
         ProdId:Prod,
         _token:"{{ csrf_token()}}"
       },
       success:function(res){

        console.log(res)

        //Display Spinner
        
        //Fill Inputs Values 
        
        $('input[name=ProdTitleUI]').val(res.ProductName)
        $('textarea[name=ProdDescUI]').val(res.ProductDesc)
        $('select[name=ProdCategoryUI]').val(res.ProductCategory)
        $('select[name=ProdBrandUI]').val(res.ProductBrand)
        $('input[name=ProdPriceUI]').val(res.ProductPrice)
        $('textarea[name=ProdBodyUI]').val(res.ProductBody)
        $('input[name=ProdUI]').val(Prod)

        //Hide Spinner





       }
     })
  
 })




</script>

@endsection