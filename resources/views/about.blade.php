@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
    <link rel="stylesheet" href="{{'dj/css/about.css'}}">
@stop

    @section('nav')
        <section class="about">
            <div class="container-fluid">
    @include('includes/header')
                <p class="abouttext text-center">“KubiRub” is a 3D mobile game which has been created by the startup company Teching. Even though at first glance it looks like the general idea is just online version of the traditional Rubik’s Cube hand toy, but indeed it has a lot of different features which will make you addicted to this game. In this version of Rubik’s Cube it holds logos of companies on its sides rather than colors and getting just one side of the Rubik’s Cube completed is enough to make players gain coupons and discounts from the choosen company. The companies will be able to manage all information about coupons, their activity status, sale strategies of the company’s mobile gaming platform, brand or product promotion.
                </p>
                <div class="container">
                    <div class="row game">
                        <div class="col"><img src="{{asset('dj/img/home.svg')}}" alt=""></div>
                        <div class="col"><img src="{{'dj/img/registr.svg'}}" alt=""></div>
                        <div class="col"><img src="{{'dj/img/game.svg'}}" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
@stop

@section('content')
    <section class="second">

        <div class="row">
            <div class="col">
                <button class="btn btn-white center-block">Download Game</button>
            </div>
        </div>
        <p class="abouttext text-center">People are usually looking for discounts in stores. Through our system, people
            will be able to get and apply discounts themselves. Companies consider it a more enjoyable way to give their
            quotes via quizzes rather than simply offering discounts to their customers. “Kubirub” provides users not
            only mental development, but also it helps them to meet their material needs.”Kubirub” is considered a new
            digital advertising platform as well.
        </p>
        <div class="container">
            <div class="row game">
                <div class="col"><img src="{{asset('dj/img/home1.svg')}}" alt=""></div>
                <div class="col"><img src="{{asset('dj/img/registr1.svg')}}" alt=""></div>
                <div class="col"><img src="{{asset('dj/img/game1.svg')}}" alt=""></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-white center-block">Download App</button>
            </div>
        </div>
        <p class="abouttext text-center">In this project we target a limited number of companies and unlimited number of
            users across each country. Therefore, the appeal of companies to our platform, payment for their
            registration and connection will also be done through the internet. That is the reason why we can physically
            enter the corporate and game market of that country without any physical presence, and we can easily
            increase our revenue and market share.
        </p>
    </section>

<section class="tag" style="background-color:black;">

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

