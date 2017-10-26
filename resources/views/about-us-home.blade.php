@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-red-white">
        @if($abouts)
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline hyper hairline">Meet the team</h1>
                <p class="">Your bones don&#x27;t break, mine do. That&#x27;s clear. Your cells react to bacteria and viruses differently than mine. You don&#x27;t get sick, I do. That&#x27;s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke.</p>
            </header>
            <div class="row">
                <ul class="list-unstyled row box-list">
                    @foreach($abouts as $about)
                    <li class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                        <div class="box-round flat-shadow box-huge">
                            <div class="box-dummy"></div>
                            <figure class="box-inner">
                                <a href="{{route('about.show',$about->id)}}">
                                <img class="svg-inject"  src="{{$about->photo ? asset($about->photo->file) : asset('images/404.png')}}" alt="a man with a mustache">
                                <figcaption class="box-caption">
                                    <h4>Likes</h4>
                                    <p>Coffee </p>
                                </figcaption>
                                </a>
                            </figure>
                        </div>
                        <h3 class="text-center">
                            <a href="{{route('about.show',$about->id)}}">{{$about->name}}</a>
                            <small class="block">{{$about->title}}</small>
                            <small class="block">0300{{$about->contact}}</small>
                        </h3>
                        <p class="text-center">{{$about->description}}</p>
                        <ul class="list-inline text-center social-icons social-simple">
                            <li>
                                <a href="#" target="_self"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_self"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
        @endif
    </section>
    <section class="section swatch-white-red has-top has-bottom">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M-5 100 Q 0 20 5 100 Z M0 100 Q 5 0 10 100 M5 100 Q 10 30 15 100 M10 100 Q 15 10 20 100 M15 100 Q 20 30 25 100 M20 100 Q 25 -10 30 100 M25 100 Q 30 10 35 100 M30 100 Q 35 30 40 100 M35 100 Q 40 10 45 100 M40 100 Q 45 50 50 100 M45 100 Q 50 20 55 100 M50 100 Q 55 40 60 100 M55 100 Q 60 60 65 100 M60 100 Q 65 50 70 100 M65 100 Q 70 20 75 100 M70 100 Q 75 45 80 100 M75 100 Q 80 30 85 100 M80 100 Q 85 20 90 100 M85 100 Q 90 50 95 100 M90 100 Q 95 25 100 100 M95 100 Q 100 15 105 100 Z" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline hyper hairline">What we do best?</h1>
                <p class="">He&#x27;s the exact opposite of the hero. And most times they&#x27;re friends, like you and me! I should&#x27;ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
            </header>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="92" data-size="200"><span>92</span> <i class="fa fa-css3"></i></div>
                    <h3 class="margin-top">CSS Skills</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="70" data-size="200"><span>70</span> <i class="fa fa-html5"></i></div>
                    <h3 class="margin-top">Time for games</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="10" data-size="200">
                        <span>10</span> <i class="fa fa-gamepad"></i>
                    </div>
                    <h3 class="margin-top">HTML powers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="chart easyPieChart" data-track-color="#e2d9d8" data-bar-color="#dd3333" data-line-width="20" data-percent="50" data-size="200"><span>50</span> <i class="fa fa-coffee"></i>
                    </div>
                    <h3 class="margin-top">Coffee drinking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, id, temporibus, sapiente, enim unde molestiae adipisci obcaecati aliquam quisquam impedit et similique quasi ut beatae tenetur assumenda nihil esse facere.</p>
                </div>
            </div>
        </div>
        <div class="decor-bottom">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M-5 0 Q 0 80 5 0 Z M0 0 Q 5 100 10 0 M5 0 Q 10 70 15 0 M10 0 Q 15 90 20 0 M15 0 Q 20 70 25 0 M20 0 Q 25 90 30 0 M25 0 Q 30 80 35 0 M30 0 Q 35 70 40 0 M35 0 Q 40 90 45 0 M40 0 Q 45 50 50 0 M45 0 Q 50 80 55 0 M50 0 Q 55 60 60 0 M55 0 Q 60 40 65 0 M60 0 Q 65 50 70 0 M65 0 Q 70 80 75 0 M70 0 Q 75 45 80 0 M75 0 Q 80 70 85 0 M80 0 Q 85 80 90 0 M85 0 Q 90 50 95 0 M90 0 Q 95 75 100 0 M95 0 Q 100 85 105 0 Z" stroke-width="0"></path>
            </svg>
        </div>
    </section>
    <section class="section swatch-red-white">
        <div class="container">
            <header class="section-header">
                <h1 class="headline super hairline">Services</h1>
                <p class="">Now that we know who you are, I know who I am. I&#x27;m not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain&#x27;s going to be?</p>
            </header>
            <div class="row">
                <ul class="list-unstyled row box-list">
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                        <div class="box-round">
                            <div class="box-dummy"></div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" src="{{asset('images/design/custom-icons/custom-icon-wayfarer.png')}}" alt="glasses" data-animation="bounce">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Flat design</a>
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
                        <div class="box-round">
                            <div class="box-dummy"></div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" src="{{asset('images/design/custom-icons/custom-icon-mobile.png')}}" alt="a clock" data-animation="bounce">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Free updates</a>
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
                        <div class="box-round">
                            <div class="box-dummy"></div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" src="{{asset('images/design/custom-icons/custom-icon-map.png')}}" alt="a clock" data-animation="bounce">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Multilanguage support</a>
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                    <li class="col-md-3 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".9s">
                        <div class="box-round">
                            <div class="box-dummy"></div>
                            <a class="box-inner" href="#">
                                <img class="svg-inject" src="{{asset('images/design/custom-icons/custom-icon-commerce.png')}}" alt="a clock" data-animation="bounce">
                            </a>
                        </div>
                        <h3 class="text-center">
                            <a href="#">Woocommerce</a>
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 C50 0 50 0 100 100 Z" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <header class="section-header underline">
                <h1 class="headline super hairline">Why work with us?</h1>
                <p class="">He&#x27;s the exact opposite of the hero. And most times they&#x27;re friends, like you and me! I should&#x27;ve known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
            </header>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">1. Why our team?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseOne">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat mattis dolor, commodo ultrices elit posuere non. Proin nec lorem ipsum. Sed tincidunt lorem id sapien dignissim ullamcorper. Fusce mauris ligula, luctus at dictum in, blandit ut odio. Curabitur dignissim luctus est non eleifend. Nam faucibus pretium accumsan. Mauris a semper libero. Morbi eu tellus tellus. Morbi mollis, sapien at sodales elementum, magna lectus consectetur elit, a feugiat ipsum eros vitae justo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">2. How much will it cost?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseTwo">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">3. What exactly do I get?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseThree">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">4. Why is it so cheap?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseFour">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">5. How long will it take?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseFive">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">6. Are you going to support it?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseSix">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">7. Can I please have it?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseSeven">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">8. Why do I keep asking?</a>
                        </div>
                        <div class="panel-collapse collapse" id="collapseEight">
                            <div class="panel-body">
                                <p>Aliquam erat volutpat. Praesent rutrum auctor metus, in feugiat mi congue id. Curabitur ultricies dapibus aliquet. Sed id scelerisque tortor. Nulla facilisi. Praesent placerat gravida velit, ut adipiscing est tristique sed. Cras vel elit mauris, sed sagittis sem. Donec urna tellus, suscipit ac convallis vel, euismod a leo. Nulla pretium dapibus magna bibendum vehicula. Nunc laoreet magna nec dolor ornare pulvinar. Phasellus vel lacus dui, sit amet blandit tellus. Sed id ipsum at justo ultrices tempus vel vitae dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('includes.header')