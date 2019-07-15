@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
    <link rel="stylesheet" href="{{'dj/css/about.css'}}">

@stop

    @section('nav')
        <section class="congrats">
            <div class="container-fluid">
    @include('includes/header')
                <div class="container-fluid congratsbody">
                    <div class="row">
                        <div class="col">
                            <h1>Congratulations!</h1>
                            <p>You are successfully applied to
                            </p>
                            <p>KubiRub Company Services.
                            </p>
                            <p>Please log in to edit your profile and add discounts.</p>
                            <a href="{{route('companysigin')}}">
                                <img class="loginpage" src="{{asset('dj/img/loginpage.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <img class="boy" src="{{asset('dj/img/congrats.svg')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
@stop


@section('content')
@stop
@section('footer')
    @include('includes/footer')
@stop

@section('scripts')
<script src="{{asset('dj/js/accordion.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

@stop

