
@extends('layout.master')





@section('content')

@include('inc.error')

<img src="https://drive.google.com/uc?id=10Tn7qTzP5xcmwXWx3n_3AWhn_NoX7MII" />
<div class="col-xs-12 col-sm-7 col-sm-offset-2 col-md-7 col-md-offset-2">
    <div class="LogInPanel ">
        <h4 class="text-center text-bold">Log In</h4>
        <br>
        <br>

        <form  method="POST" class="form-horizontal">
         
            <div class="form-group">
                <div class="col-sm-3"><label for="BigUserI">User Name:</label></div>
                <div class="col-sm-9"><input name="BigUserI" type="text" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"><label for="BigPassI">Password:</label></div>
                <div class="col-sm-9"><input name="BigPassI" type="text" class="form-control"></div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-4"><input type="submit" value="Log In" class="btn btn-block btn-primary"></div>
            </div>
            {{ csrf_field() }}
        </form>

    </div>
</div>




@endsection

