@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{asset('dj/css/main.css')}}">

@stop

@section('nav')
    <section class="sign">
        <div class="container-fluid">


            @include('includes.header')
                <div class="container">
                    <div class="row" style="margin-top:100px;">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Reset Password</div>

                                <div class="panel-body">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Send Password Reset Link
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
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

