<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css"
          integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

</head>
<body>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('companySave') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container register">
        <div class="row">

            <div class="col-md-12 head">
                <i class="fas fa-user-plus"></i>
                <span>sign up</span>
            </div>
            <div class="col-md-2 file">
                <input name="photo" type="file" id="filee" onChange="readURL(this);">
                <div id="changeImage">
                    <label id="deleteImage" for="filee"><i class="far fa-image"></i></label>
                </div>
                <h2>Upload your company logo</h2>
                <h3>140x140 PX</h3>
                <small class="text-danger">{{ $errors->first('photo') }}</small>
            </div>
            <div class="col-md-5 inps">
                <div class="forms">
                    <h4>first name</h4>
                    <input placeholder="Enter your first name" type="text" name="fname" value="{{ old('fname') }}">
                    <small class="text-danger">{{ $errors->first('fname') }}</small>
                </div>
                <div class="forms">
                    <h4>surname</h4>
                    <input placeholder="Enter your surname" type="text" name="sname" value="{{ old('sname') }}">
                    <small class="text-danger">{{ $errors->first('sname') }}</small>
                </div>
                <div class="forms">
                    <h4>e-mail</h4>
                    <input placeholder="Enter your corparate e-mail" type="email" name="mail" value="{{ old('mail') }}">
                    <small class="text-danger">{{ $errors->first('mail') }}</small>
                    <small class="text-danger">{{ $errors->first('companyMail') }}</small>

                </div>
                <div class="forms">
                    <h4>your position</h4>
                    <select name="position_id" class="custom-select">
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}" {{ (old('position_id')== $position->id ? "selected":"") }}>{{ $position->position_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="forms">
                    <h4>password</h4>
                    <input placeholder="Enter your password" type="password" name="pass">
                    <small class="text-danger">{{ $errors->first('pass') }}</small>
                </div>
                <div class="forms">
                    <h4>confirm password</h4>
                    <input placeholder="Confirm your password" type="password" name="cpass">
                    <small class="text-danger">{{ $errors->first('cpass') }}</small>
                </div>
            </div>
            <div class="col-md-5 inps">
                <div class="forms">
                    <h4>country</h4>
                    <select name="country_id" class="custom-select">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ (old('country_id')== $country->id ? "selected":"") }}>{{ $country->name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="forms">
                    <h4>city</h4>
                    <input placeholder="Select your city" type="text" name="city" value="{{ old('city') }}">
                    <small class="text-danger">{{ $errors->first('city') }}</small>
                </div>
                <div class="forms">
                    <h4>company</h4>
                    <input placeholder="Enter your company name" type="text" name="cname" value="{{ old('cname') }}">
                    <small class="text-danger">{{ $errors->first('cname') }}</small>
                </div>
                <div class="forms">
                    <h4>Product</h4>
                    <input placeholder="Enter your product name" type="text" name="pname" value="{{ old('pname') }}">
                    <small class="text-danger">{{ $errors->first('pname') }}</small>
                </div>
                <div class="forms">
                    <h4>business sector</h4>
                    <select name="sector_id" class="custom-select">
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ (old('sector_id')== $sector->id ? "selected":"") }}>{{ $sector->business_name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="forms">
                    <h4>your phone</h4>
                    <input placeholder="Enter your phone" type="text" name="phone" value="{{ old('phone') }}">
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>
            </div>
            <div class="col-md-10 offset-md-2">
                <div class="form inps">
                    <h4 class="mission">your mission</h4>
                    <textarea rows="4" name="mission" placeholder="ENTER YOUR COMPANY'S MISSON & IMPRESSIUM"
                              style="margin-left:57px;">{{ old('mission') }}</textarea>
                    <small class="text-danger" style="margin-left: 64px;">{{ $errors->first('mission') }}</small>
                </div>
            </div>
            <div class="col-md-10 offset-md-2 buttons">
                <div class="row">

                    <div class="col-md-6">
                        <input type="submit" name="ok" value="SAVE" class="save"/>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="cancel">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    function readURL(input) {
        var ext = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#changeImage").html("<img height='140' weight = '140' id='imgdsd' src='{{ asset('images/eazistart.png') }}' style='    margin: 0 auto;\n" + "    display: table;' />");

                $('#imgdsd').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // $("#changeImage").change(function(){
            //     readURL(this);
            // });


            // $('#img').attr('src', '/assets/no_preview.png');
        }
    }

    {{--function changeImage() {--}}

    {{--$("#changeImage").html("<img height='80' src='{{ asset('images/eazistart.png') }}' style='    margin: 0 auto;\n" +--}}
    {{--"    display: table;' />");--}}
    {{--}--}}

    {{--$(document).on('change', '#filee', function () {--}}
    {{--changeImage();--}}
    {{--});--}}

</script>


</body>
</html>
