@extends('layouts.default')
@section('head')

    @include('includes/head')

    <link rel="stylesheet" type="text/css" href="{{asset('dj/css/modal-video.min.css')}}">
    <link rel="stylesheet" href="{{asset('dj/css/carousel.css')}}">

    <link rel="stylesheet" type="text/css" href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css"/>
    <link rel="stylesheet" href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css">
    <link rel="stylesheet" href="{{asset('dj/css/main.css')}}">
@stop

    @section('nav')
        <section class="bg">
            <div class="container-fluid">
    @include('includes/header')

                <div class="col-md-6  text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5">Here is a superb mobile
                        game for you </h1>

                    <h6 class="">Just install our app and change your approach!</h6>
                    <a href="https://play.google.com/store/apps/details?id=com.Teching.KubiRub">
                        <button class="btn btn-white">Download Game</button>
                    </a>
                    <button type="button" class="video-btn btn btn-outline-white" data-toggle="modal" data-src="https://www.youtube.com/embed/nGNEqQAaWPM" data-target="#myModal">
                        <span class="icon-play"></span>
                        Watch Video
                    </button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background:rgba(255, 255, 255, 0.5);box-shadow: 0px 0px 300px -4px rgba(255,255,255,1) ">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
@stop


@section('content')
<section class="partners">
    <div class="container-fluid">
        <h1 class="text-center partnerstext">Our Best Partners</h1>
        <div class="row text-center">
            <div class="col">
                <img class="partner" src="{{asset('dj/img/microsoft.svg')}}" alt="">
            </div>
            <div class="col">
                <img class="partner" src="{{asset('dj/img/theoffice.svg')}}" alt="">
            </div>
            <div class="col">
                <img class="partner3 partner" src="{{asset('dj/img/adnsu.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="count">
    <div  class="container-fluid">
        <div class="row text-center numbers">
            <div class="col">
                <p>Active Users</p>
                <p class="statistic">10563</p>
            </div>
            <hr class="vertical1">
            <div class="col">
                <p>Active Companies</p>
                <p class="statistic">455</p>
            </div>
            <hr class="vertical1">
            <div class="col">
                <p>Active Country</p>
                <p class="statistic">9</p>
            </div>
            <hr class="vertical1">
            <div class="col">
                <p>Coupon Transactions</p>
                <p class="statistic">130012</p>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="why text-center">

    <div class="container-fluid">
        <h1>Why Choose KubiRub</h1>
        <div class="row comp ">
            <div class="col choose">
                <img src="{{asset('dj/img/graph.svg')}}" alt="">
                <h5 class="text-center">Firstly, companies can advertise their different products using “Kubirub”</h5>
                <p>The one of the main features of “Kubirub” is using electronic platform to work with companies.</p>
            </div>
            <div class="col choose">
                <img src="{{asset('dj/img/packs.svg')}}" alt="">
                <h5>So many packages are available for companies</h5>
                <p>Different tariffs give opportunity to each user to use our platform</p>
            </div>
        </div>
        <div class="row phone choose phone">
            <div class="col">
                <img src="{{asset('dj/img/percent.svg')}}" alt="">
                <h5>Our platform is absolutely free for users</h5>
                <p>By applying their mental thinking they can gain coupons, gifts from companies.Check your earned coupons</p>
            </div>
            <div class="col choose phone">
                <img src="{{asset('dj/img/price.svg')}}" alt="">
                <h5>Our aim is to work with 70+ companies per country and cooperate </h5>
                <p>With each day with a new company in order to give a chance to users tocreate new coupon by themselves.</p>
            </div>
        </div>
    </div>

</section>

<section class="tariffs text-center">
    <div class="container-fluid">
        <h1 class="text-center tariftext">Choose your plan for your company</h1>
        <div class="row crd">
            <div class="col">
                <div class="card tarif">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345 84.52">
                        <defs>
                            <style>.cls-1{filter:url(#a);}.cls-2{fill:#1598e5;}</style>
                            <filter id="a" width="363" height="102.52" name="a">
                                <feOffset dy="3"/><feGaussianBlur result="b" stdDeviation="3"/><feFlood flood-opacity="0.16"/>
                                <feComposite operator="in" in="b"/><feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <title>Path 1865</title><g class="cls-1">
                            <path class="cls-2" d="M-580-340h345v82s-79.84-15.48-167.57-3.88S-580-258-580-258Z" transform="translate(580 340)"/></g></svg>
                    <h1>Standart</h1>
                    <p class="first">1 month contract</p>
                    <div class="second">
                        <p>2 hours per day</p>
                        <p>14 hours per week</p>
                        <p>56 hours per month</p>
                    </div>
                    <p class="price">59$</p>
                    <button type="button" class="btn rounded">Select</button>
                </div>
            </div>
            <div class="col">
                <div class="card tarif good">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345 84.52">
                        <defs>
                            <style>.cls-1{filter:url(#a);}.cls-2{fill:#1598e5;}</style>
                            <filter id="a" width="363" height="102.52" name="a">
                                <feOffset dy="3"/><feGaussianBlur result="b" stdDeviation="3"/><feFlood flood-opacity="0.16"/>
                                <feComposite operator="in" in="b"/><feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <title>Path 1865</title><g class="cls-1">
                            <path class="cls-2" d="M-580-340h345v82s-79.84-15.48-167.57-3.88S-580-258-580-258Z" transform="translate(580 340)"/></g></svg>
                    <h1>Gold</h1>
                    <p class="first">3 months contract</p>
                    <div class="second">
                        <p>3 hours per day</p>
                        <p>21 hours per week</p>
                        <p>84 hours per month</p>
                    </div>
                    <p class="price">135$</p>
                    <button type="button" class="btn rounded">Select</button>
                </div>
            </div>
            <div class="col">
                <div class="card tarif">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345 84.52">
                        <defs>
                            <style>.cls-1{filter:url(#a);}.cls-2{fill:#1598e5;}</style>
                            <filter id="a" width="363" height="102.52" name="a">
                                <feOffset dy="3"/><feGaussianBlur result="b" stdDeviation="3"/><feFlood flood-opacity="0.16"/>
                                <feComposite operator="in" in="b"/><feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <title>Path 1865</title><g class="cls-1">
                            <path class="cls-2" d="M-580-340h345v82s-79.84-15.48-167.57-3.88S-580-258-580-258Z" transform="translate(580 340)"/></g></svg>
                    <h1>Premium</h1>
                    <p class="first">6 month contract</p>
                    <div class="second">
                        <p>4 hours per day</p>
                        <p>28 hours per week</p>
                        <p>112 hours per month</p>
                    </div>
                    <p class="price">299$</p>
                    <button type="button" class="btn rounded">Select</button>
                </div>
            </div>
            <div class="col">
                <div class="card tarif">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345 84.52">
                        <defs>
                            <style>.cls-1{filter:url(#a);}.cls-2{fill:#1598e5;}</style>
                            <filter id="a" width="363" height="102.52" name="a">
                                <feOffset dy="3"/><feGaussianBlur result="b" stdDeviation="3"/><feFlood flood-opacity="0.16"/>
                                <feComposite operator="in" in="b"/><feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <title>Path 1865</title><g class="cls-1">
                            <path class="cls-2" d="M-580-340h345v82s-79.84-15.48-167.57-3.88S-580-258-580-258Z" transform="translate(580 340)"/></g></svg>
                    <h1>Partnership</h1>
                    <p class="first">1 year contract</p>
                    <div class="second">
                        <p>5 hours per day</p>
                        <p>35 hours per week</p>
                        <p>140 hours per month</p>
                    </div>
                    <p class="price">646$</p>
                    <button type="button" class="btn rounded">Select</button>
                </div>
            </div>
            <div class="col">
                <div class="card tarif startuptarif">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 345 84.52">
                        <defs>
                            <style>.cls-1{fill:#fff;}</style>
                        </defs>
                        <title>Path 1869</title>
                        <path id="Path_1869-2" data-name="Path 1869-2" class="cls-1" d="M-216-189H129v82s-79.84-15.48-167.57-3.88S-216-107-216-107Z" transform="translate(216 189)"/></svg>
                    <h1 class="startup">Startup</h1>
                    <p class="first">2 month contract</p>
                    <div class="second">
                        <p>1 hours per day</p>
                        <p>7 hours per week</p>
                        <p>30 hours per month</p>
                    </div>
                    <p class="price">0$</p>
                    <button type="button" class="btn rounded">Select</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container-fluid">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="basic">
                <div  class="test-case-wrap center-mode">
                    <div class="sliders">
                        <div class="item">
                            <div class=""> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>   <div class="item">
                            <div class=" "> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>   <div class="item">
                            <div class=""> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=""> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>     <div class="item">
                            <div class=""> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>   <div class="item">
                            <div class=""> <div class="card">
                                    <figure>
                                        <img src="{{asset('dj/img/micro.svg')}}">
                                        <figcaption>
                                            <p class="text-center">
                                                The Office - Coworking
                                                Center contract
                                                with us
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tag hometag" style="background-color:black;">
    <div class="container-fluid">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="basic">
                <div class="test-case-wrap center-mode">
                    <div class="slider">
                        <p>kubirub</p>
                        <p>mobile game</p>
                        <p>discounts</p>
                        <p>Rubic's cube</p>
                        <p>companies</p>
                        <p>company</p>
                        <p>android game</p>
                        <p>ios game</p>
                        <p>game</p>
                        <p>best game</p>
                        <p>digital ads</p>
                        <p>ads</p>
                        <p>digital advertise</p>
                        <p>advertise</p>
                        <p>kubirub</p>
                        <p>Kubik-Rubik</p>
                        <p>Rubics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

{{--footer--}}
{{--<section class="footer">--}}
{{--    @include('includes/footer')--}}
{{--</section>--}}
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.5/countUp.min.js"></script>
<script src="{{asset('dj/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('dj/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dj/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('dj/js/numbers.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js"></script>
<script src="{{asset('dj/js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        var $videoSrc;
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });
        console.log($videoSrc);
        $('#myModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
        })
        $('#myModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src',$videoSrc);
        })
// document ready
    });
</script>
@stop
</body>
</html>
