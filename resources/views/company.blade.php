@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{asset('dj/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dj/css/fa.css')}}">

@stop

    @section('nav')
        <section class="sign">
            <div class="container-fluid">
    @include('includes/header')
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{route('company.register')}}">
                                <button class="btn btn-default add">Add new Company</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{ route('password.request') }}">
                                <button class="btn btn-default reset">Reset Password</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="signfooter">
                    <hr class="signfoot">

                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <p class=" help">help</p>
                                <hr class="vertical">
                                <p class="support ">support</p>
                            </div>
                            <div class="col productby">
                                <img src="{{asset('dj/img/productby.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
@stop

@section('content')

@stop

@section('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@stop

