@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class='view_parent_image1'>
    <div class="col-xs-12 text-center">
        <h2 style="color:white;">Success! Please login with your company app</h2>
        <a href="https://play.google.com/store/apps/details?id=co.teching.kubirubCompanyService" style="color: white;">Download link</a>
        {{--<span>{{$user}}</span>--}}
    </div>
</div>
</body>

</html>
@endsection