@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{asset('dj/css/main.css')}}">

@stop

@section('nav')
    <section class="sign">
        <div class="container-fluid">


        @include('includes.header')
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="container signcontainer">
                    <div class="row">
                        <div class="col-4 signform">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="">e-mail*</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="">password*</label>
                                <input name="password" type="password" class="form-control" >
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                @endif
                            </div>

                            <input type="radio" id="m" name="genero">
                            <label for="m" class="m">
                                <div class="circulo"><p>Remember Me</p></div>
                            </label>
                            <button class="btn btn-default signin signinform">Sign In</button>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col-4">
                            <div class="signbuttons">


                                <button class="col btn btn-default add">Add New Company</button>



                                <button class="col btn btn-default reset">Reset Password</button>

                            </div>
                        </div>
                    </div>
                </div>

            </form>

{{-- Nav ending --}}

            {{--                Footer--}}
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

            {{--                Footer end--}}

        </div>
    </section>
@stop

