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
        {{--    <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">--}}
        {{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="{{asset('dj-dash/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

@stop

@section('content')
<div class="wrapper">
    @include('includes.sidebar')
    <div class="main-panel">
        @include('includes.dashboard-header')
        <div class="content">
            <div class="container-fluid">
                <div class="col-lg-4 col-sm-8">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="card-category">Total views your logo</p>
                                    <h4 class="card-title">246K</h4>
                                </div>
                                <div class="col-md-5">
                                    <img class="blue" src="{{asset('dj-dash/img/blue.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="card-category">Requirement</p>
                                    <h4 class="card-title">2453</h4>
                                </div>
                                <div class="col-md-5">
                                    <img class="blue" src="{{asset('dj-dash/img/purple.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class=" card-category">Total activity</p>
                                    <h4 class="card-title">$39K</h4>
                                </div>
                                <div class="col-md-5">
                                    <img class="blue" src="{{asset('dj-dash/img/green.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-8 discount">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Total discound transavtions</h4>

                            </div>
                            <div class="content table-responsive table-full-width tablefirst">
                                <table class="table table-hover table-striped tablefirst">
                                    <thead>
                                    <th>Location</th>
                                    <th>Views</th>
                                    <th>Discount</th>
                                    <th>Convension</th>
                                    <th>Total</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Canada</td>
                                        <td>3746</td>
                                        <td>19</td>
                                        <td>26%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    <tr>
                                        <td>Brasil</td>
                                        <td>1524</td>
                                        <td>12</td>
                                        <td>33%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    <tr>
                                        <td>Egypt</td>
                                        <td>56652</td>
                                        <td>11</td>
                                        <td>10%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    <tr>
                                        <td>Russia</td>
                                        <td>4254</td>
                                        <td>20</td>
                                        <td>19%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    <tr>
                                        <td>China</td>
                                        <td>6525</td>
                                        <td>16</td>
                                        <td>20%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    <tr>
                                        <td>Australia</td>
                                        <td>4525</td>
                                        <td>15</td>
                                        <td>13%</td>
                                        <td>$19,291</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 map">
                        <div class="card" style="width: 37rem;">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <p>Details on Map</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="#">Show All List</a>
                                </div>
                            </div>
                            <img src="{{asset('dj-dash/img/Map.svg')}}" class="card-img-top" alt="...">
                            <table class="table table-hover table-striped">
                                <tbody>
                                <tr>
                                    <td>Canada</td>
                                    <td class="text-right">$29,193</td>
                                </tr>
                                <tr>
                                    <td>Brasil</td>
                                    <td class="text-right">$18,832</td>

                                </tr>
                                <tr>
                                    <td>Egypt</td>
                                    <td class="text-right">$19,758</td>

                                </tr>
                                <tr>
                                    <td>Russia</td>
                                    <td class="text-right">$23,078</td>
                                </tr>
                                <tr>
                                    <td>China</td>
                                    <td class="text-right">$29,193</td>
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td class="text-right">$37,760</td>
                                </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-8 products">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>Product</th>
                                    <th>Aviability</th>
                                    <th>City</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset('dj-dash/img/1product.png')}}" alt=""><p  class="product">Women’s Vintage Peacoat</p></td>
                                        <td class="aviability">Niger</td>
                                        <td class="city">Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj-dash/img/2product.png')}}" alt=""><p class="product">Women’s Oatmeal Sweater</p></td>
                                        <td class="aviability"> Curaçao</td>
                                        <td class="city">Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj-dash/img/3product.png')}}" alt=""><p class="product">Women’s Denim Shirt</p></td>
                                        <td class="aviability">Netherlands</td>
                                        <td class="city">Baileux</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj-dash/img/4product.png')}}" alt=""><p class="product">Women’s Vintage Peacoat</p></td>
                                        <td class="aviability">Korea, South</td>
                                        <td class="city">Overland Park</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 map">
                        <div class="card" style="width: 37rem;">
                            <div class="col-md-12 details">
                                <div style="padding:25px;" class="col-md-6">
                                    <p>Quick Details</p>
                                </div>

                            </div>

                            <table class="table table-hover table-striped">
                                <tbody>
                                <tr>
                                    <td style="padding:25px;"><img src="" alt=""> 290 new Customers</td>
                                    <td style="padding:25px;" class="text-right">$29,193</td>
                                </tr>
                                <tr>
                                    <td style="padding:25px;">490 Orders</td>
                                    <td class="text-right">$18,832</td>

                                </tr>
                                <tr>
                                    <td style="padding:25px;">120 Orders</td>
                                    <td style="padding:25px;" class="text-right">$19,758</td>

                                </tr>
                                <tr>
                                    <td style="padding:25px;">490 Orders</td>
                                    <td style="padding:25px;" class="text-right">$23,078</td>
                                </tr>
                                <tr>
                                    <td style="padding:25px;">42 items</td>
                                    <td style="padding:25px;" class="text-right">$29,193</td>
                                </tr>

                                </tbody>
                            </table>



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
<script src="{{asset('dj-dash/js/bootstrap-notify.js')}}"></script>
@stop
