<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SP BPJS Ketenagakerjaan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css">

    <!--Styles for froster navbar-->
    <link rel="stylesheet" href="/css/frosted.bar.css">

    <style>
        /*
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        */

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links p{
            font-family: Arial;
            font-weight: lighter;
        }

        .links li {
            list-style: none;
            padding: 0 25px;
        }
        .links >ul li a {
            color: #636b6f;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        .border {
            border: 1px solid red;
        }

        .awesome {
            text-align: left;
            left: 0;
        }

        .logo {
            margin-right: 10px;
            float: left;
        }
        .logo h2 {
            line-height: 10px;
        }

        .btn {
            color: black;
        }

        .nav-tabs li a {
            font-family: Arial;
            font-weight: lighter;
        }

        .row {
            margin-bottom: 20px;
        }

        .tab-content {

            border: 1px solid #e9e9e9;
            border-top: 0px;
        }

        .custom {
            margin-top: 110px;
        }

        @media (max-width: 768px) {
            .custom {
                margin-top: 70px;
            }
        }

        .jarak {
            height: 140px;
        }

        @media (max-width: 768px) {
            .jarak {
                height: 100px;
            }
        }

        .spasi {
            margin-top: 10px;
        }
        
        .komentar {
            background-color: #eaeaea;
            padding-left : 10px;
        }

        .komentar h4 {
            background-color : white;
            padding-left : none;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="overlayViewport">
        <div class="container">
            <div class="content-wrapper">
            </div>
        </div>
        <div class="overlayContent">
            <nav class="navbar navbar-fixed-top container">
                <div class="row">
                    <div class="logo hidden-xs">
                        <a href="/"><img src="/pictures/logo.png" width="100px"></a>
                    </div>
                    <div class="logo visible-xs">
                        <img src="/pictures/logo.png" width="70px">
                    </div>
                    <div class="logo">
                        <h2>SERIKAT PEKERJA</h2>
                        <h2>BPJS KETENAGAKERJAAN</h2>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row">
        <nav class="custom navbar navbar-fixed-top">
            <div class="container">

                <div class="navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="links bs-navbar-collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left ">
                            <li><a href="/"><span class="fa fa-newspaper-o"></span> Berita & Rubrik</a></li>
                            <li><a href="#"><span class="mega-octicon octicon-organization" style="font-size: 16px"></span>&nbsp;Tentang Kami</a></li>
                            <li><a href="#"><span class="fa fa-paper-plane-o"></span> Program Kerja</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Route::has('login'))
                                @if(Auth::check())
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->first_name }}<span class="caret"></span> </a>
                                        <ul class="dropdown-menu"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                                        </ul>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{ url('/social/google') }}">Login</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <div class="contentViewport">
        <div class="content">
            <div class="jarak"></div>

            <div class="slider">
                @yield('slider')
            </div>

            <div class="row spasi">
                <div class="col-md-8 col-md-push-2">
                    @yield('berita')
                </div>
                @yield('panel')
            </div>
            <div class="row">
                <div class="navbar navbar-static-top navbar-inverse links">
                    <p style="text-align: center; margin-top: 10px">Copyright &copy; Serikat Pekerja BPJS Ketenagakerjaan</p>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('script')
<script src="/js/frosted.bar.js"></script>



</body>
</html>
