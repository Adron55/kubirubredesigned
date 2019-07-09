<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KubiRub Mobile Game</title>
    <meta name="description"="content"=“KubiRub” (familiar to us as Rubik`s cube hand toy) will be launched as a 3D mobile game. Users can enjoy not only playing and relaxing, but also obtain bonuses and discounts from different companies. The mobile game is based on the main principle of Rubik`s cube but the faces of cubes consist of logos of companies instead of colors.>
    <meta name="keywords" content="game,kubirub,kubik-rubik,ruibc`s cube,cube,mobile game, mobil oyun,oyun,oyunlar,endirimler,endirimlər,android oyun,ayfon oyunlari,endirim kampaniyalari,oyun dunyasi,online oyunlar, onlayn oyun">
    <link rel="shortcut icon" href="images/logo.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
<div class="mainmenu">
    <button id="meyu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-times"></i>
    </button>

    <ul class="navbar-nav resp">
        <li class="nav-item">
            <a id="scores1" class="nav-link">SCORES</a>
        </li>
        <li class="nav-item">
            <a id="discover1" class="nav-link">DISCOVER</a>
        </li>
        <li class="nav-item">
            <a id="about1" class="nav-link">ABOUT</a>
        </li>
        <li class="nav-item">
            <a id="company1" class="nav-link">COMPANY PROFILE</a>
        </li>
        <li class="nav-item">
            <a id="privacy1" class="nav-link">PRIVACY POLICY</a>
        </li>
        <li class="nav-item">
            <a id="contact1" class="nav-link">CONTACT</a>
        </li>

    </ul>
</div>
<div class="container-fluid all">
    <header>
        <div class="row">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a id="home" class="navbar-brand"><img src="images/logo.png"></a>
                <button id="menyu" class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="scores" class="nav-link">SCORES</a>
                        </li>
                        <li class="nav-item">
                            <a id="discover" class="nav-link">DISCOVER</a>
                        </li>
                        <li class="nav-item">
                            <a id="about" class="nav-link">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a id="company" class="nav-link">COMPANY PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a id="privacy" class="nav-link">PRIVACY POLICY</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" id="contact" class="nav-link">CONTACT</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col-md-8">
                <section id="homepage">
                    <h1>Here is a superb mobile game for you,</h1>
                    <p>Just install our app and <span>change your approach!</span></p>
                    <button id="download">download</button>
                    <div style="display: none;" class="row store">
                        <div class="offset-md-3 col-md-6 offset-md-3">
                            <a href="https://itunes.apple.com/app/id1421285507">
                                <img src="images/astore.png">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.Teching.KubiRub">
                                <img src="images/pstore.png">
                            </a>
                        </div>
                    </div>

                </section>
                <section style="display: none;" id="homepage1">
                    <h1>404 not found</h1>
                    <p>This page is activate coming soon.</p>
                </section>
                <section style="display: none;" id="homepage2">
                    <h1>404 not found</h1>
                    <p>This page is activate coming soon.</p>
                </section>
                <section style="display: none;" id="homepage3">
                    <h1>What is Kubirub</h1>
                    <p>“KubiRub” (familiar to us as Rubik`s cube hand toy) will be launched as a 3D mobile game.
                        Users can enjoy not only playing and relaxing, but also obtain bonuses and discounts from
                        different companies. The mobile game is based on the main principle of Rubik`s cube but the
                        faces of cubes consist of logos of companies instead of colors.</p>
                </section>
                <section style="display: none;" id="homepage4">
                    @guest
                    <a href="{{ route('login') }}">Login</a>
                    <br>
                    <a href="{{ route('password.request') }}">Reset Password</a>
                    <br>
                    <a href="/company/registration"><i style="margin-right: 5px;" class="fas fa-plus"></i>Add Your
                        Company</a>
                    @else

                        <a href="{{ route('home') }}">Home</a>
                        <br>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                        @endguest

                </section>
                <section style="display: none;" id="homepage5">
                    <div class="row">
                        <div class="offset-md-1 col-md-6">
                            <h5>Feed back us</h5>
                            <form>
                                <input placeholder="Name" class="namesur" style="display: inline;" type="text" name="">
                                <input placeholder="Surname" class="namesur" style="display: inline; float: right;"
                                       type="text" name="">
                                <input placeholder="Your mail adress" class="inputs" type="email" name="">
                                <input placeholder="Topic" class="inputs" type="text" name="">
                                <textarea rows="5" placeholder="Text..."></textarea>
                                <input class="submit" value="SEND" type="submit" name="">
                            </form>
                        </div>
                        <div class="col-md-5">
                            <div class="info">
                                <div><img src="images/location.svg">Azadlig ave.20.Baku,Azerbaijan<br>Postal Code:
                                    AZ1010
                                </div>
                                <div><img src="images/phone.svg">+994 55 753 19 35</div>
                                <div><img src="images/envelope.svg">support@kubirub.online</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section style="display: none;" id="homepage6">
                    <h1>Privacy Policy</h1>

                    <p>Effective date: July 09, 2018</p>

                    <p>Teching ("us", "we", or "our") operates the http://kubirub.online/ website and the Kubirub mobile
                        application (the "Service").</p>

                    <p>This page informs you of our policies regarding the collection, use, and disclosure of personal
                        data when you use our Service and the choices you have associated with that data.

                    <p>We use your data to provide and improve the Service. By using the Service, you agree to the
                        collection and use of information in accordance with this policy. Unless otherwise defined in
                        this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms
                        and Conditions. <a href="/privacy-policy.html">read more</a></p>
                </section>
            </div>
            <div class="col-md-3 phone">
                <img src="images/ix.png">
                <a href="https://itunes.apple.com/app/id1421285507"><img class="topstore stores"
                                                                         src="images/astore.png"></a>
                <a href="https://play.google.com/store/apps/details?id=com.Teching.KubiRub"><img
                            class="bottomstore stores" src="images/pstore.png"></a>
            </div>
            <div class="col-md-1">
                <div class="mediaContent">
                    <a href="https://www.linkedin.com/company/kubirub-game/" class="linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/kubirub_game" class="twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/kubirub.game/" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <div class="col-md-12">

        <footer>
            <div class="row footer">
                <div class="col-md-4 left">
                    <p>All rights <span>reserved</span></p>
                </div>
                <div class="col-md-4 center">
                    <p>Product by <span><a href="http://teching.co/">TECHING</a></span></p>
                </div>
                <div class="col-md-4 right">
                    <p>Baku <span>2018</span></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script type="text/javascript">

    $("#download").click(function () {
        $(".store").show("slow");
        $(".stores").hide("slow");
    });

    $("#menyu").click(function () {
        $(".mainmenu").css({"display": "block", "position": "fixed", "top": "0"});

    });

    $("#meyu").click(function () {
        $(".mainmenu").css({"display": "none"});
    });


    $("#home").click(function () {
        $("#homepage1").hide("slow")
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#scores").click(function () {
        $("#homepage").hide("slow")
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage1").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#discover").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage2").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#about").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage3").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#company").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage4").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#contact").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage5").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#privacy").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").show("slow");
        $(".mainmenu").css({"display": "none"});
    });


    $("#home1").click(function () {
        $("#homepage1").hide("slow")
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#scores1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage1").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#discover1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage2").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#about1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage3").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#company1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage4").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#contact1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage6").hide("slow");
        $("#homepage5").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
    $("#privacy1").click(function () {
        $("#homepage").hide("slow")
        $("#homepage1").hide("slow");
        $("#homepage2").hide("slow");
        $("#homepage3").hide("slow");
        $("#homepage4").hide("slow");
        $("#homepage5").hide("slow");
        $("#homepage6").show("slow");
        $(".mainmenu").css({"display": "none"});
    });
</script>
</body>
</html>