@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">

                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4 >Company Profile</h4>
                    </div>
                    <div class="panel-body">
                        <a style="float:right;" href="/edit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <div class="box box-info">

                            <div class="box-body">
                                <div class="col-sm-3">
                                    <div  align="center"><img alt="User Pic" src="{{$info->path }}" id="profile-image1" class="img-circle img-responsive">


                                        <!--Upload Image Js And Css-->
                                    </div>

                                    <br>

                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;">{{ $companies->company_name }} </h4></span>
                                    <span><p>{{$positions[$companies->position_id]['position_name']}}</p></span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">


                                <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 ">{{ $info->firstname }}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> {{ $info ->lastname}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7">{{ $info ->email }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7">{{ $info -> phone }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Country:</div><div class="col-sm-7">{{ $countries[$companies->country_id]['name'] }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >City:</div><div class="col-sm-7">{{ $companies->city }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Product:</div><div class="col-sm-7">{{ $companies->product }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Business Sector:</div><div class="col-sm-7">{{ $sectors[$companies->business_sector_id]['business_name'] }}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Your Mission:</div><div class="col-sm-7">{{ $companies->mission }}</div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">  <h4 >Your Product</h4></div>
                    {{--<div class="panel-body">--}}
                        {{--<h2>Carousel Example</h2>--}}
                        {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
                            {{--<!-- Indicators -->--}}
                            {{--<ol class="carousel-indicators">--}}
                                {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                                {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                                {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                            {{--</ol>--}}

                            {{--<!-- Wrapper for slides -->--}}
                            {{--<div class="carousel-inner">--}}

                                {{--<div class="item active">--}}
                                    {{--<img src="storage/logos/1_image.jpeg" alt="Los Angeles" style="width:140px; height:140px;">--}}
                                    {{--<div class="carousel-caption">--}}
                                        {{--<h3>Los Angeles</h3>--}}
                                        {{--<p>LA is always so much fun!</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="item">--}}
                                    {{--<img src="storage/logos/12_image.png" alt="Chicago" style="width:140px; height:140px;">--}}
                                    {{--<div class="carousel-caption">--}}
                                        {{--<h3>Chicago</h3>--}}
                                        {{--<p>Thank you, Chicago!</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="item">--}}
                                    {{--<img src="storage/logos/11_image.png" alt="New York" style="width:140px; height:140px;">--}}
                                    {{--<div class="carousel-caption">--}}
                                        {{--<h3>New York</h3>--}}
                                        {{--<p>We love the Big Apple!</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<!-- Left and right controls -->--}}
                            {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
                                {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                            {{--<a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
                                {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

            </div>


            </div>

        </div>
    </div>
    <script>
        $(function() {
            $('#profile-image1').on('click', function() {
                $('#profile-image-upload').click();
            });
        });
    </script>
@endsection
