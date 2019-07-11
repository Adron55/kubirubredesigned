@extends('layouts.default')
@section('head')
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('dj-dash/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dj-dash/css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('dj-dash/css/main.css')}}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('dj-dash/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
@stop
@section('content')
<div class="wrapper">
    @include('includes.sidebar')
    <div class="main-panel">
        @include('includes.dashboard-header')
        <div class="content ">
            <div class="container-fluid">
                <div class="row users">
                    <div class="col-md-6">
                        <div class="card card-user carduser">
                            <div class="head col-md-12">
                                <p class="text-center headtext">Personal Profile</p>
                            </div>
                            <div class="content usercontent">
                                <div class="author">
                                    <div class="img col-md-4">
                                        <div class="small-12 medium-2 large-2 columns">
                                            <div>

                                                <img class="profile-pic" src="{{asset($info->path)}}">

                                            </div>
                                            <div class="p-image">
                                                <i class="fa fa-camera upload-button"> <p class="uploadimg">Upload image</p> </i>
                                                <input class="file-upload" type="file" accept="image/*"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about col-md-8 text-left">
                                        <h4 class="title">{{$info->firstname}} {{$info->lastname}}<br />
                                            <small></small>
                                        </h4>
                                        <p class="text-left description ">

                                        </p>
                                    </div>
                                    <div class="col-md-12 cardtext">
                                        <div class="col-md-4 text-left">
                                            <p>Email:</p>
                                            <p>Company:</p>
                                            <p>Position:</p>
                                            <p>City:</p>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <p>{{$info->email}}</p>
                                            <p>{{ $companies->company_name }}</p>
                                            <p>{{ $sectors[$companies->business_sector_id - 1 ]['business_name'] }}</p>
                                            <p>{{ $companies->city }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{route('edit')}}">
                                            <button class="btn userprofile">
                                                Edit Profile
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 deactive">
                        <div class="card card-user cardcomp">
                            <div class=" head comphead col-md-12">
                                <p class="text-center headtext">Company Profile</p>
                            </div>
                            <div class="content usercontent">
                                <div class="author ">
                                    <div class="img">
                                        <img class="col-md-4" src="{{asset('dj-dash/img/logocomp.png')}}"/>
                                    </div>
                                    <div class="about col-md-8 text-left ">
                                        <h4 class="title">{{ $companies->company_name }}<br />
                                            <small><br></small>
                                        </h4>


                                        <p class="text-left description ">
                                            {{ $sectors[$companies->business_sector_id -1 ]['business_name'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-12 cardtext ">
                                        <div class="col-md-5 text-left">
                                            <p>Email:</p>
                                            <p>Country</p>
                                            <p>City:</p>
                                            <p>Product:</p>
                                            <p>Bussines Sector:</p>
                                            <p>Phone:</p>
                                            <p>Your mission:</p>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <p>{{ $info->email  }}</p>
                                            <p>{{ $countries[$companies->country_id -1 ]['name'] }}</p>
                                            <p>{{ $companies->city }}</p>
                                            <p>{{ $companies->product }}</p>
                                            <p>{{ $sectors[$companies->business_sector_id -1 ]['business_name'] }}</p>
                                            <p>{{ $info->phone }}</p>
                                            <p>{{ $companies->mission }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button id="Button" class="companyprofile" disabled>
                                            Edit Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
    <script src="{{asset('dj-dash/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dj-dash/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
    <script src="{{asset('dj-dash/js/bootstrap-notify.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{asset('dj-dash/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
<script src="{{asset('dj-dash/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });

    function expand() {
        $(".search").toggleClass("close");
        $(".input").toggleClass("square");
        if ($('.search').hasClass('close')) {
            $('input').focus();
        } else {
            $('input').blur();
        }
    }
    $('button').on('click', expand);

@stop
