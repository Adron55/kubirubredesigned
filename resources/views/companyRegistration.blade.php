@extends('layouts.default')

@section('head')
    @include('includes/head')
    <link rel="stylesheet" href="{{asset('dj/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dj/css/fa.css')}}">

@stop

    @section('nav')
        <section class="companyreg">
            <div class="container-fluid">
    @include('includes/header')
                <div class="container">
                    <div class="row regform">
                        <div class="col-7">
                            <h3 class="text-center">Company Registration</h3>
                            <div class="card">
                                <form class="reg">
                                    <div class="row">
                                        <div class="col">
                                            <label for="">full name*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="col">
                                            <label for="">e-mail*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">your phone number*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="col">
                                            <label for="">your position*</label>
{{--                                            <input type="text" class="form-control" >--}}
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                @foreach($positions as $position)
                                                    <option value="{{ $position->id }}" {{ (old('position_id')== $position->id ? "selected":"") }}>{{ $position->position_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">company</label>
                                                <input type="text" class="form-control" name="company">
{{--                                                <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                                    <option>1</option>--}}
{{--                                                    <option>2</option>--}}
{{--                                                    <option>3</option>--}}
{{--                                                    <option>4</option>--}}
{{--                                                    <option>5</option>--}}
{{--                                                </select>--}}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="">company website*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">country*</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}" {{ (old('country_id')== $country->id ? "selected":"") }}>{{ $country->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">city*</label>
{{--                                                <select class="form-control" id="exampleFormControlSelect1">--}}

{{--                                                </select>--}}
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">business sector*</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    @foreach($sectors as $sector)
                                                        <option value="{{ $sector->id }}" {{ (old('sector_id')== $sector->id ? "selected":"") }}>{{ $sector->business_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="">corporative e-mail for company*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">password*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="col">
                                            <label for="">confirm password*</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <hr class="formhr">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col"> <div id="background">
                                                <div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
                                                    <div class="icon-container tilt-logo-inner">
                                                        <input id="probeUpload" type="file"/>

                                                    </div>
                                                    <img id="probePreview" src=""/>
                                                </div>
                                            </div></div>
                                        <div class="col text-center uploadtext"><p>upload your
                                                company logo</p></div>
                                    </div>
                                    <div class="col"></div>



                                </form>

                            </div>
                            <div class="row btns">
                                <div class="col text-center">
                                    <button class="btn btn-default chooseplan">Next to choose the plan</button>
                                    <button class="btn btn-default cancel">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 contract">
                            <h3 class="text-center">Contract for partnership</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam et justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam et justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam et justo duo
                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet.</p>
                            <form id='form' action='honeypot.php' data-method='post' data-action='realtarget.php'>
                                <a href="#" class="check"></a>
                                <br><br>

                            </form>
                            <div class="row btns">
                                <div class="col text-center">
                                    <button class="btn btn-default chooseplan accept">Accept</button>
                                    <button class="btn btn-default cancel decline">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="signfooter registfoot">
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
            </div>


            </div>
        </section>
@stop

@section('content')


@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>


    $('.icon-container').change(function(){
        $('.icon-container').hide()
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {

                $('#probePreview').attr('src',  e.target.result);}
            reader.readAsDataURL(input.files[0]);}
    }

    $("#probeUpload").change(function () {
        console.log(this)
        readURL(this);
    });

    var accept = 0;
    $('.check').click(function(e){
        window.accept=1;
        e.preventDefault();
        $('#form').toggleClass('checked');
        retun: false;
    });

    $('.submit').click(function(e){
        e.preventDefault();


    });

</script>
@stop

