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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="AddDiscount">
                        <button class="Show btn btn-primary" type="submit"><span class="circ plus"></span>Add Discount</button>
                        <button class=" btn Hide" type="submit"><span class="circ minus"></span>Add Discount</button>
                        <div id="target">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Total discound transavtions</h4>
                                </div>
                                <div class="content ">
                                    <div class="container-fluid bg-light py-3">
                                        <form id="contact-form" method="post" action="contact.php" role="form">
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="labelname" for="form_name">Product</label>
                                                            <input id="form_name" type="text" name="surname" class="form-control" placeholder="Enter Your Product Name" required="required" data-error="name is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <hr class="verticalhr">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="labelname" for="form_phone">Discount</label>
                                                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Etc. 15%">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="labelname" for="exampleFormControlSelect1">Select Your Country</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Country</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="labelname" for="form_phone">Amount</label>
                                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Etc. 3">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="labelname" for="exampleFormControlSelect1">City</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Select Your City</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <form>

                                                    <div class="switch-field">
                                                        <input type="radio" id="radio-three" name="switch-two" value="yes" checked/>
                                                        <label class="left" for="radio-three"> <span class="circle circleyellow"></span> Gold</label>
                                                        <input type="radio" id="radio-four" name="switch-two" value="maybe" />
                                                        <label for="radio-four"> <span class="circle circleblue"></span> Premium</label>
                                                        <input type="radio" id="radio-five" name="switch-two" value="no" />
                                                        <label class="right" for="radio-five"> <span class="circle circlegray"></span> Standart</label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="submit" class="btn btn-warning btn-send send" value="Send message">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 discount">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Total discound transavtions</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
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
                            <img src="img/Map.svg" class="card-img-top" alt="...">
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
                                        <td><img src="img/1product.png" alt=""><p  class="product">Women’s Vintage Peacoat</p></td>
                                        <td class="aviability">Niger</td>
                                        <td class="city">Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/2product.png" alt=""><p class="product">Women’s Oatmeal Sweater</p></td>
                                        <td class="aviability"> Curaçao</td>
                                        <td class="city">Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/3product.png" alt=""><p class="product">Women’s Denim Shirt</p></td>
                                        <td class="aviability">Netherlands</td>
                                        <td class="city">Baileux</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/4product.png" alt=""><p class="product">Women’s Vintage Peacoat</p></td>
                                        <td class="aviability">Korea, South</td>
                                        <td class="city">Overland Park</td>
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
    <script src="{{asset('dj-dash/js/discountadd.js')}}"></script>
@stop
