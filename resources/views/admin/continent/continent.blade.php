
    <section class="section swatch-red-white">
        <div class="container">
            @if($continents)
                <header class="section-header underline">
                    <h1 class="headline hyper hairline">Meet the team</h1>
                    <p class="">Your bones don&#x27;t break, mine do. That&#x27;s clear. Your cells react to bacteria and viruses differently than mine. You don&#x27;t get sick, I do. That&#x27;s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke.</p>
                </header>
                <div class="row">
                    <ul class="list-unstyled row box-list">
                        @foreach($continents as $continent)
                            <li class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                                <div class="box-round flat-shadow box-huge">
                                    <div class="box-dummy"></div>
                                    <a href="{{url('tour/'.$continent->id)}}">
                                    <figure class="box-inner" style="height: 200px; width: 200px; margin: 0px">
                                        <img class="svg-inject" src="{{$continent->photo ? asset($continent->photo->file) : asset('images/404.png')}}" alt="a man with a mustache">
                                        <figcaption class="box-caption">
                                            <h4>Continent</h4>
                                            <p>{{$continent->name}}</p>
                                        </figcaption>
                                    </figure>
                                    </a>
                                </div>
                                <h3 class="text-center">
                                    <a href="#">{{$continent->name}}</a>
                                </h3>
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
            @endif
        </div>
    </section>
