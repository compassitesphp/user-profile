@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">  <h1>Welcome</h1></div>

                <div class="panel-body">
                   
                <img src="{{asset('/assests/images/image1.jpg')}}" height ="140%" width="100%"/>
                  
<!--                     <img src="image1.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
