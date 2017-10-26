@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-red-white">
        <div class="background-media" style="background-image: url({{asset('images/design/section-bg/bg-2.jpg')}}); background-repeat: ; background-size: ; background-attachment: ; background-position: ; background-size: cover" data-start="background-position: 50% 0px" data-top-bottom="background-position: 50% -200px"></div>
        <div class="background-overlay" style="background-color:rgba(231,76,60,0.8)"></div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline hyper hairline">Welcome to One58 Travel & Tour</h1>
                <p class="big">We make your dream vacations come true</p>
            </header>
        </div>
    </section>
    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="#">
                <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
            </svg></div><div class="container">
            <header class="section-header underline">
                <h1 class="headline super hairline">Best Features Possible</h1>
                <p class=""> Things we include in our packages. </p>
            </header>
            <div class="row">
                <ul class="list-unstyled row box-list">
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                        <div class="box-round">
                            <div class="box-dummy">
                            </div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" style="margin-top: 15px ;size: 30px ;width: 190px;height: 190px" src="{{asset('images/tour.png')}}" alt="a clock" data-animation="">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Flights Booking</a>
                        </h3>
                        <p class="text-center"> We reserve your return flights for our tour so you could enjoy worry free tours. </p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
                        <div class="box-round">
                            <div class="box-dummy">
                            </div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" src="{{asset('images/hotel.jpg')}}" alt="a clock" data-animation="">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Hotels</a>
                        </h3>
                        <p class="text-center"> We care about your worries not only here but abroad too, so we take good care your stay there. </p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
                        <div class="box-round">
                            <div class="box-dummy">
                            </div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" style="height: 150px;width: 150px" src="{{asset('images/food.jpg')}}" alt="a clock" data-animation="">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Food</a>
                        </h3>
                        <p class="text-center"> Food is one the biggest concerns while it come to stay abroad. So we provide it to you too. </p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".9s">
                        <div class="box-round">
                            <div class="box-dummy">
                            </div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject"  src="{{asset('images/travel.jpg')}}" alt="a clock" data-animation="">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#"> Travel</a>
                        </h3>
                        <p class="text-center"> We go abroad to change the environment and to see te colors of life and for that we've got your back. </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('admin.continent.continent')

    <section class="section swatch-red-white has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="#">
                <path d="M0 100 L100 0 L100 100" stroke-width="0">
                </path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline super hairline">Clients said</h1>
            </header>
            <div class="row">
                <div class="col-md-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".1s">
                    <div id="slider-flex1" class="flexslider" data-flex-speed="7000" data-flex-animation="slide" data-flex-directions="hide" data-flex-controls="show" data-flex-controlsalign="center">
                        <ul class="slides">
                            <li>
                                <blockquote class="fancy-blockquote">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="box-round box-huge">
                                                <div class="box-dummy">
                                                </div>
                                                <div class="box-inner">
                                                    <img width="300" height="300" src="{{asset('images/design/people/man-1-300x300.png')}}" class="attachment-square-image-small wp-post-image" alt="some alt" draggable="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <p>Nullam vitae sollicitudin eros. Cras varius vehicula velit ac congue quam dictum sed. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.Donec sed odio dui. Nulla vitae elit libero a pharetra augue. Nullam id dolor id ultricies ut vehicula ut id. Integer posuere erat a venenatis dapibus posuere velit aliquet duis mollis. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                            <small>John Langan</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote class="fancy-blockquote">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="box-round box-huge">
                                                <div class="box-dummy"></div>
                                                <div class="box-inner">
                                                    <img width="300" height="300" src="{{asset('images/design/people/woman-1-300x300.png')}}" class="attachment-square-image-small wp-post-image" alt="some alt" draggable="false">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <p>Nullam vitae sollicitudin eros. Cras varius vehicula velit ac congue quam dictum sed. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.Donec sed odio dui. Nulla vitae elit libero a pharetra augue. Nullam id dolor id ultricies ut vehicula ut id. Integer posuere erat a venenatis dapibus posuere velit aliquet duis mollis. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                            <small>Sue Doe</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@extends('includes.header')