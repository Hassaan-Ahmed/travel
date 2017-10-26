@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-red-white text-center">
        @if($abouts)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box-round flat-shadow box-huge">
                        <div class="box-dummy"></div>
                        <figure class="box-inner">
                            <img class="svg-inject" src="{{$abouts->photo ? asset($about->photo->file) : asset('images/404.png')}}" alt="a man with a mustache">
                            <figcaption class="box-caption">
                                <h4>Likes</h4>
                                <p>Coffee</p>
                            </figcaption>
                        </figure>
                    </div>
                    <h1>{{$abouts->name}}</h1>
                    <p class="lead">{{$abouts->title}}</p>
                    <p class="lead">+92300{{$abouts->contact}}</p>
                    <p class="lead">{{$abouts->description}}</p>
                    <ul class="list-inline text-center social-icons social-simple">
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </section>
    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor hidden-xs hidden-sm" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg"><path d="M0 100 L2 60 L4 100 L6 60 L8 100 L10 60 L12 100 L14 60 L16 100 L18 60 L20 100 L22 60 L24 100 L26 60 L28 100 L30 60 L32 100 L34 60 L36 100 L38 60 L40 100 L42 60 L44 100 L46 60 L48 100 L50 60 L52 100 L54 60 L56 100 L58 60 L60 100 L62 60 L64 100 L66 60 L68 100 L70 60 L72 100 L74 60 L76 100 L78 60 L80 100 L82 60 L84 100 L86 60 L88 100 L90 60 L92 100 L94 60 L96 100 L98 60 L100 100 Z" stroke-width="0"></path></svg><svg class="decor visible-xs visible-sm" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg"><path d="M0 100 L5 60 L10 100 L5 60 L10 100 L15 60 L20 100 L25 60 L30 100 L35 60 L40 100 L45 60 L50 100 L55 60 L60 100 L65 60 L70 100 L75 60 L80 100 L85 60 L90 100 L95 60 L100 100"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline super hairline">My skills</h1>
                <p class="">He&#x27;s the exact opposite of the hero. And most times they&#x27;re friends, like you and me! I should&#x27;ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
            </header>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="92" data-size="200"><span>92</span>
                        <i class="fa fa-css3"></i>
                    </div>
                    <h3 class="margin-top">CSS Skills</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="70" data-size="200"><span>70</span>
                        <i class="fa fa-html5"></i>
                    </div>
                    <h3 class="margin-top">Time for games</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="10" data-size="200"><span>10</span>
                        <i class="fa fa-gamepad"></i>
                    </div>
                    <h3 class="margin-top">HTML powers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="50" data-size="200"><span>50</span>
                        <i class="fa fa-coffee"></i>
                    </div>
                    <h3 class="margin-top">Coffee drinking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L50 0 L100 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline text-center">
                <h1 class="headline super hairline">Work with me</h1>
                <p class="">He&#x27;s the exact opposite of the hero. And most times they&#x27;re friends, like you and me! I should&#x27;ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
            </header>
            <div class="row">
                <div class="col-md-12 text-default">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-lg btn-icon-right" target="_self">Lets make it happen <span class="hex-alt">
                                <i class="fa fa-rocket" data-animation="shake"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@extends('includes.header')