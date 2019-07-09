@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
{{--<nav class="navbar navbar-default sidebar" role="navigation">--}}
    {{--<div class="container-fluid">--}}
        <!-- Brand and toggle get grouped for better mobile display -->

        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#">My Profile</a>--}}
        {{--</div>--}}

        <!-- Collect the nav links, forms, and other content for toggling -->

        {{--<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="active"><a href="#">About Me<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>--}}
                {{--<li><a href="#">Libraries<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>--}}
                {{--<li><a href="#">Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>--}}
                {{--<li><a href="#">Notifications<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</nav>--}}

<div class="main">


    {{--<div class="row">--}}
        {{--<div class="form-group">--}}
            {{--<div class="col-xs-12">--}}
                {{--<button type="submit" class="btn btn-default">Save</button>--}}
                {{--<button type="close" class="btn btn-default">Close</button>--}}
                {{--<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

    <div class="row-push-6">
        <div class="col-xs-12 col-lg-10">
            <div class="panel panel-primary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h4>My Information</h4>
                    </div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('companyUpdate') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div  class=" col-xs-12 col-sm-3 col-lg-2 text-center ">
                                <img id="uploadPreview" src="http://placehold.it/140x140"  style="width: 140px; height: 140px;" alt="..." class="img-rounded" >
                                <div class="clearfix"></div>
                                <small class="text-danger">{{ $errors->first('myPhoto') }}</small>

                                <div class="fileUpload btn">
                                    {{--<button style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">Add your photo</button>--}}
                                    {{--<input type='file' id="getFile" style="display:none;" onchange="PreviewImage();"/>--}}
                                    <input id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();" />
                                </div>

                                {{--<img id="uploadPreview" style="width: 100px; height: 100px;" />--}}

                            </div>
                            <div class="col-sm-9 col-lg-10">
                                <div class="form-group">
                                    <label for="fname" class="col-sm-4  col-md-4 col-lg-3 control-label">First Name</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <input type="text" name="fname" class="form-control" id="fname" value="{{ $user->firstname }}">
                                        <small class="text-danger">{{ $errors->first('fname') }}</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="col-sm-4  col-md-4 col-lg-3 control-label">Surname</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <input type="text" name="sname" class="form-control" id="sname" value="{{ $user->lastname }}">
                                        <small class="text-danger">{{ $errors->first('sname') }}</small>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mail" class="col-sm-4   col-md-4 col-lg-3 control-label">Email</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <input type="email" name="mail" class="form-control" id="mail" value="{{ $user->email }}">
                                        <small class="text-danger">{{ $errors->first('mail') }}</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">Your Position</label>
                                    <div class="col-sm-8 col-md-8  col-lg-9">
                                        <select name="position_id" class="form-control">
                                            @foreach($positions as $position)
                                                <option value="{{$position->id}}">{{$position->position_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">Country</label>
                                    <div class="col-sm-8 col-md-8  col-lg-9">
                                        <select name="country_id" class="form-control">
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4   col-md-4 col-lg-3 control-label">City</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <input type="text" name="city" class="form-control" id="city" value="{{ $companies->city }}">
                                        <small class="text-danger">{{ $errors->first('city') }}</small>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Company</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <input type="text" name="cname"  class="form-control" id="cname" value="{{ $companies->company_name }}">
                                        <small class="text-danger">{{ $errors->first('cname') }}</small>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Product</label>
                                    <div class="col-sm-8  col-lg-9">
                                        <input type="text" name="pname" class="form-control" id="pname" value="{{ $companies->product }}">
                                        <small class="text-danger">{{ $errors->first('pname') }}</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Business Sector</label>
                                    <div class="col-sm-8  col-lg-9">
                                        <select name="sector_id" class="form-control">
                                            @foreach($sectors as $sector)
                                                <option value="{{$sector->id}}">{{$sector->business_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Your Phone</label>
                                    <div class="col-sm-8  col-lg-9">
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{ $user->phone }}">
                                        <small class="text-danger">{{ $errors->first('phone') }}</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Your Mission</label>
                                    <div class="col-sm-8  col-lg-9">
                                    <textarea rows="4" class="form-control" name="mission" >{{ $companies->mission }}</textarea>
                                        <small class="text-danger" style="margin-left: 64px;">{{ $errors->first('mission') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <button type="submit" class="btn btn-default">Save</button>
                            <button type="button" class="btn btn-default"  onclick="window.location='{{ url("/home") }}'">Close</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


</div>
<script type="text/javascript">
    //FOR VIEW OF SELECTED PICTURE
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
</body>

</html>
@endsection