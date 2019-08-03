@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{'dj/css/main.css'}}">
    <link rel="stylesheet" href="{{'dj/css/fa.css'}}">
@stop

    @section('nav')
        <section class="command">
            <div class="container-fluid">
            @include('includes/header')
                <div class="container-fluid">
                    <h1 class="text-center owners">Founders & Owners</h1>
                </div>
                <div class=" container-fluid mainwrap card">
                    <div class="rgthdng eat">
                        <div class="row">
                            <div class="text col">
                                <div class="user-card">
                                    <div class="user-card__header">
                                        <img src="{{asset('dj/img/camal.svg')}}" class="user-card__header__img" alt="" />
                                    </div>
                                    <div class="user-card__body">
                                        <h3 class="user-card__body__name">Jamal Aghayev</h3>
                                        <p class="user-card__body__description">
                                            Founder & CEO</p>
                                        <p class="user-card__body__description">
                                            Project Manager
                                        </p>
                                        <p class="user-card__body__description"></p>
                                        UI/UX Specialist
                                        </p>
                                        <ul class="user-card__body__links">
                                            <li><a href="mailto:jamal@kubirub.com">jamal@kubirub.com</a></li>
                                        </ul>
                                        <ul class="user-card__body__links links">
                                            <li><a href="#" class="social fa fa-facebook"></a></li>
                                            <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                            <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text col">
                                <div class="user-card">
                                    <div class="user-card__header">
                                        <img src="{{asset('dj/img/seymur.svg')}}" class="user-card__header__img" alt="" />
                                    </div>
                                    <div class="user-card__body">
                                        <h3 class="user-card__body__name">Seymur Omarov</h3>
                                        <p class="user-card__body__description">
                                            Co-founder & CTO
                                        </p>
                                        <p class="user-card__body__description">
                                            Lead Developers
                                        </p>
                                        <p class="user-card__body__description"></p>
                                        Backend Developer
                                        </p>
                                        <ul class="user-card__body__links">
                                            <li><a href="mailto:seymur@kubirub.com">seymur@kubirub.com</a></li>
                                        </ul>
                                        <ul class="user-card__body__links links">
                                            <li><a href="#" class="social fa fa-facebook"></a></li>
                                            <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                            <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text col">
                                <div class="user-card">
                                    <div class="user-card__header">
                                        <img src="{{asset('dj/img/anar.svg')}}" class="user-card__header__img" alt="" />
                                    </div>
                                    <div class="user-card__body">
                                        <h3 class="user-card__body__name">Anar Mammadli</h3>
                                        <p class="user-card__body__description">
                                            Co-founder
                                        </p>
                                        <p class="user-card__body__description">
                                            Product Developer
                                        </p>
                                        <p class="user-card__body__description"></p>
                                        Game & Backend Developer
                                        </p>
                                        <ul class="user-card__body__links">
                                            <li><a href="mailto:anar@kubirub.com">anar@kubirub.com</a></li>
                                        </ul>
                                        <ul class="user-card__body__links links">
                                            <li><a href="#" class="social fa fa-facebook"></a></li>
                                            <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                            <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text col">
                                <div class="user-card">
                                    <div class="user-card__header">
                                        <img src="{{asset('dj/img/fred.svg')}}" class="user-card__header__img" alt="" />
                                    </div>
                                    <div class="user-card__body">
                                        <h3 class="user-card__body__name">Farid Jafarov</h3>
                                        <p class="user-card__body__description">
                                            Co-founder
                                        </p>
                                        <p class="user-card__body__description">
                                            Game & Mobile Developer
                                        </p>
                                        <p class="user-card__body__description"></p>
                                        <br>
                                        </p>
                                        <ul class="user-card__body__links">
                                            <li><a href="mailto:farid@kubirub.com">farid@kubirub.com</a></li>
                                        </ul>
                                        <ul class="user-card__body__links links">
                                            <li><a href="#" class="social fa fa-facebook"></a></li>
                                            <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                            <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="showpanel">
                            <div class="row">
                                <div class="text col">
                                    <div class="user-card">
                                        <div class="user-card__header">
                                            <img src="{{asset('dj/img/jeyran.svg')}}" class="user-card__header__img" alt="" />
                                        </div>
                                        <div class="user-card__body">
                                            <h3 class="user-card__body__name">Jeyran Aghazada</h3>
                                            <p class="user-card__body__description">
                                                Fontend Developer</p>
                                            <p class="user-card__body__description">
                                                <br>
                                            </p>
                                            <p class="user-card__body__description"></p>
                                            <br>
                                            </p>
                                            <ul class="user-card__body__links">
                                                <li><a href="jeyran@kubirub.com">jeyran@kubirub.com</a></li>
                                            </ul>
                                            <ul class="user-card__body__links links">
                                                <li><a href="#" class="social fa fa-facebook"></a></li>
                                                <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                                <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="text col">
                                    <div class="user-card">
                                        <div class="user-card__header">
                                            <img src="{{asset('dj/img/rahman.svg')}}" class="user-card__header__img" alt="" />
                                        </div>
                                        <div class="user-card__body">
                                            <h3 class="user-card__body__name">Rahman Mammadov</h3>
                                            <p class="user-card__body__description">
                                                Game Developer</p>
                                            <p class="user-card__body__description">
                                                <br>
                                            </p>
                                            <p class="user-card__body__description"></p>
                                            <br>
                                            </p>
                                            <ul class="user-card__body__links">
                                                <li><a href="rahman@kubirub.com">rahman@kubirub.com</a></li>
                                            </ul>
                                            <ul class="user-card__body__links links">
                                                <li><a href="#" class="social fa fa-facebook"></a></li>
                                                <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                                <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="text col">
                                    <div class="user-card">
                                        <div class="user-card__header">
                                            <img src="{{asset('dj/img/xeybar.svg')}}" class="user-card__header__img" alt="" />
                                        </div>
                                        <div class="user-card__body">
                                            <h3 class="user-card__body__name">Kheybar
                                                Mammadnaghiyev</h3>
                                            <p class="user-card__body__description">
                                                Mobile Developer</p>
                                            <p class="user-card__body__description">

                                            </p>
                                            <p class="user-card__body__description"><br></p>

                                            <p class="user-card__body__description"><br></p>
                                            <ul class="user-card__body__links">
                                                <li><a href="mailto:kheybar@kubirub.com">kheybar@kubirub.com</a></li>
                                            </ul>
                                            <ul class="user-card__body__links links">
                                                <li><a href="#" class="social fa fa-facebook"></a></li>
                                                <li>  <a href="#" class="social fa fa-twitter"></a></li>
                                                <li> <a href="#" class="social fa fa-linkedin"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="toggleHolder">
                            <span class="toggler Show">View full team<span class="circ plus"></span></span>
                            <span class="toggler Hide" style="display:none;">View full team<span class="circ minus"></span></span>
                        </div>

                    </div>

                </div>
                <div class="contactour">
                    <button class="btn btn-white center-block">Contact with our</button>
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('.toggler').on('click',function(){
            $(this).parent().children().toggle();  //swaps the display:none between the two spans
            $(this).parent().parent().find('.showpanel').slideToggle();  //swap the display of the main content with slide action
        });

    });
</script>
@stop

