@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
@stop

    @section('nav')
        <section class="howto">
            <div class="container-fluid">
    @include('includes/header')
                <div class="embed-responsive embed-responsive-16by9 video1">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nGNEqQAaWPM?rel=0" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9 video2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RsPtmpAkdLY?rel=0" allowfullscreen></iframe>
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
<script src="{{asset('dj/js/accordion.js')}}"></script>
@stop

