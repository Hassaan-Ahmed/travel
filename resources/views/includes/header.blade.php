<!DOCTYPE html><html lang="en">
<!-- Mirrored from anglehtml.oxygenna.com/ by AzuzToGo, Fri, 02 Jan 2015 16:53:26 GMT -->
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage | One58 Travel & Tour</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicons/favicon.ico')}}">
    <link rel="icon" type="image/png" href="{{asset('images/favicons/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/favicons/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/favicons/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/favicons/apple-touch-icon-60x60-precomposed.png')}}">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/color-defaults.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-beige-black.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-black-beige.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-black-white.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-black-yellow.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-blue-white.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-green-white.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-red-white.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-white-black.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-white-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-white-green.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-white-red.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swatch-yellow-black.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/demo.min.css')}}">
</head>
<div class="top-bar swatch-red-white">
    <div class="container">
        <div class="top top-left">
            <div class="sidebar-widget">
                <ul class="list-unstyled inline social-icons social-simple">
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="top top-right">
            <div class="sidebar-widget">Contact us now: 03094177989</div>
        </div>
    </div>
</div>
<body>
<header id="masthead" class="navbar navbar-sticky swatch-red-white" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <a href="{!! url('/') !!}" class="navbar-brand">
                <img src="{{asset('images/logo.jpg')}}" alt="One of the best themes ever"> One58 Travel & Tour
            </a>
        </div>
        <nav class="collapse navbar-collapse main-navbar" role="navigation">
            <div class="sidebar-widget widget_search pull-right">
                <form>
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search here....">
                        <span class="input-group-btn">
                            <button class="btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="{{url('/')}}">Home</a>

                </li>
                <li class="dropdown">
                    <a href="{{url('about')}}">About</a>
                </li>
                <li class="dropdown">
                    <a href="{{url('tour')}}" >Tours</a>
                </li>
                <li class="dropdown">
                    <a href="{{url('contact')}}" >Contact</a>
                </li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#">Two Columns</a>--}}
                        {{--</li>--}}
                        {{--<li role="presentation" class="divider">--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Single Big</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#">Contact</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="dropdown"><a href="#" alt="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li style="margin-top: 20px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 70px; ">
                                    <img src="{{Auth::user()->photo ? asset(Auth::user()->photo->file) : asset('images/default.png')}}" style="width: 40px;height: 40px; position: absolute;top: 10px; left: 10px; border-radius: 50% ; margin-top: 0px; margin-bottom: 18px;">
                                    {{ Auth::user()->userName }} <span class="select2-drop-mask"></span>
                                </a>
                            </li>
                            <li style="margin-top: 20px;"><a href="{{url('user/profile')}}"><i class="fa fa-user" aria-hidden="true"></i> User Profile</a></li>
                            @if (Auth::user()->isAdmin())

                            <li><a href="{{url('admin/tour')}}"><i class="fa fa-user" aria-hidden="true"></i> Admin Panel</a></li>

                            @endif
                            <li class="divider" role="seprator"></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                            <li><a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                            <li><a href="{{route('register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                        @endif

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')