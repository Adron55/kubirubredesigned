@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
@stop

    @section('nav')
        <section class="about">
            <div class="container-fluid">
    @include('includes/header')
                <h1 class="text-center">Page not found</h1>
                <div class="img404 text-center">
                    <img src="{{asset('dj/img/404.svg')}}" alt="">
                </div>
            </div>
        </section>
@stop

@section('content')
<section class="tag">

    <div class="container-fluid text-center play">
        <div class="wintext">
            <h1>Play & Win!</h1>
            <h4>Change your approach!</h4>
        </div>
        <div class="store">
            <img class="appstore" src="{{asset('dj/img/appstore.svg')}}" alt="">
            <img class="playstore" src="{{asset('dj/img/playstore.svg')}}" alt="">
        </div>
    </div>
</section>
@stop
@section('footer')
    @include('includes/footer')
@stop
@section('scripts')

@stop

