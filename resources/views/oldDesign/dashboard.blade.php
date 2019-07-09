<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
{{--    <link rel="icon" type="image/png" href="assets/img/favicon.ico">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('dj/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dj/css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('dj/css/main.css')}}" rel="stylesheet"/>
{{--    <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('dj/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-image="Menu.png">
        <div class="sidebar-wrapper">
            <div class="logo">
                <img  src="{{asset('dj-dashboard')}}" alt="">
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Inbox</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Discounts</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Feedbacks</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Chat Room</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Help Center</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                        <li>

                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <form id="content">
                            <input type="text" name="input" class="input inputsearch">
                            <button type="reset" class="search"></button>
                        </form>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret hidden-sm hidden-xs"></b>
                                <span class="notification hidden-sm hidden-xs">5</span>
                                <p class="hidden-lg hidden-md">
                                    5 Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Jamal Aghayev
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <img class="userpic" src="{{asset('dj/img/jamal.png')}}" alt="">
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
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
                                    <img class="blue" src="{{asset('dj/img/blue.png')}}" alt="">
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
                                    <img class="blue" src="{{asset('dj/img/purple.png')}}" alt="">
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
                                    <img class="blue" src="{{asset('dj/img/green.png')}}" alt="">
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
                            <img src="{{asset('dj/img/Map.svg')}}" class="card-img-top" alt="...">
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
                                        <td><img src="{{asset('dj-dashboard')}}" alt=""><p  class="product">Women’s Vintage Peacoat</p></td>
                                        <td class="aviability">Niger</td>
                                        <td class="city">Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj-dashboard')}}" alt=""><p class="product">Women’s Oatmeal Sweater</p></td>
                                        <td class="aviability"> Curaçao</td>
                                        <td class="city">Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj/img/3product.png')}}" alt=""><p class="product">Women’s Denim Shirt</p></td>
                                        <td class="aviability">Netherlands</td>
                                        <td class="city">Baileux</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('dj/img/4product.png')}}" alt=""><p class="product">Women’s Vintage Peacoat</p></td>
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
<script src="{{asset('dj/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dj/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dj/js/bootstrap-notify.js')}}"></script>
</body>

</html>

