@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
@stop

    @section('nav')
        <section class="about">
            <div class="container-fluid">
    @include('includes/header')
    <div class="row accrow container-fluid">
            <div class="col-7">
                <section class="accordion">
                    <section>
                        <h1>Lorem ipsum dolor sit amet, consetetur sadipscing elitr?</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>
                    </section>
                    <section>
                        <h1>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet?</h1>
                        <p>orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam e</p>

                    </section>
                    <section>
                        <h1>At vero eos et accusam et justo duo dolores et ea rebum?</h1>
                        <p>orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam e<p>
                    </section>
                    <section>
                        <h1>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna?</h1>
                        <p>orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam e<p>
                    </section>

                </section>
                <div>
                <button class="btn btn-white center-block">Add your question!</button>
                </div>
            </div>

        <section class="col-5">
            <img src="{{asset('dj/img/accordion.svg')}}" alt="">
        </section>
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

