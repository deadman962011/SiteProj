@extends('layout.master')

@section('style')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
   <h4>hello world in Advertisment Dashboard</h4>
   <div class="table-responsive">
    <table class="table table-light ">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Ad Name</th>
                <th>Views</th>
                <th>Clicks</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($Ads as $Ad)

            <tr>
              <td><img src="{{ $Ad['AdImage'] }}" style="width:150px" class='img-responsive' alt=""></td>
              <td>{{ $Ad['AdName'] }}</td>
              <td>{{ $Ad['AdView'] }}</td>
              <td>{{ $Ad['AdClick'] }}</td>
              <td>{{ $Ad['AdStatus'] }}

              </td>
              <td><button type="button" name='test1'></button><button type="button" name="UpdateAd" class="btn btn-warning btn-block" data-toggle="modal" data-target="#UpdateAd" data-AdId="{{ $Ad['id'] }}">Update Ad</button></li></td>
            </tr>
               
           @endforeach
        </tbody>
    </table>
   </div>


<!-- Modal -->
<div id="UpdateAd" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Ad Modal </h4>
        </div>
        <div class="modal-body">
          <form action="{{ route("UpdateAd",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="post">
              <div class="form-group">
                  <textarea name="AdValueI"  cols="30" rows="10" class="form-control AdValueI"></textarea>
                  <input type="hidden" name="AdIdI" >
              </div>
  
        </div>
        <div class="modal-footer">
          {{ csrf_field() }}
          <input type="submit" value="Update" name='UpdateSubmitI' class="btn btn-success">
          <input type="submit" value="default" name='UpdateSubmitI' class="btn btn-warning">
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
</div>






</div>

@endsection


@section('script')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>

// $("[name='AdStatusI']").bootstrapSwitch();

// $(document).on("click",'button[name="test1"]',function(){
//   var test = $("[name='AdStatusI']").val();
//   console.log(test);
 

// })

$(document).on('click',"button[name='UpdateAd']",function(){

  var AdId=$(this).data('adid');
  
  $.ajax({
    method:'post',
    url:"{{ route('UpdateAdAj',['SiteId'=>$SiteId,'SiteType'=>$SiteType]) }}",
    data:{AdId:AdId,_token:"{{ csrf_token() }}"},
    success:function(data){ 
      
      console.log(data) 
      $('input[name="AdIdI"]').val(AdId)
      $(".AdValueI").val(data.Ad.AdValue)
    }
  })
})





</script>
@endsection