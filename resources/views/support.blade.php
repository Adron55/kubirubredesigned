@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
@stop

    @section('nav')
        <section class="about">
            <div class="container-fluid">
    @include('includes/header')
                <div class="container-fluid">
                    <h1 class="text-center suptext">Support</h1>
                    <div class="row">
                        <div class="col">
                            <form class="support">
                                <div class="row name">
                                    <div class="col">
                                        <label for="">first name*</label>
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <label for="">last name*</label>
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">topic*</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Billing & Account</option>
                                        <option>Common Errors</option>
                                        <option>Using your App</option>
                                        <option>Technical Support</option>
                                        <option>Getting Help</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">text*</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-white supsend">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="col supportimg">
                            <img src="{{asset('dj/img/support.svg')}}" alt="">
                        </div>
                    </div>
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

