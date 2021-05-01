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
    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#UpdateProdModal" data-prod="{{ $Product['id'] }}" >Update</button>
    <button type="button" class="btn btn-danger DelProdBtn " data-toggle="modal" data-target="#DelProdModal" data-prod="{{ $Product['id'] }}" >Delete</button>

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

    @endforeach
 
</div>
@endsection

@section('script')

<script>

 $(document).on('click','.DelProdBtn',function(){

    var Prod =$(this).data('prod');

    $('input[name=ProdDelId]').val(Prod)

 })

</script>

@endsection