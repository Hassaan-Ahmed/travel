@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-red-white">
        <div class="container">
            <header class="section-header no-underline">
                <h1 class="headline hyper hairline">Latest Tours</h1>
            </header>
        </div>
    </section>
    <section class="section swatch-white-red has-top">
        @if($tour)
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    {{--@foreach($tours as $tour)--}}
                    <article class="post post-showinfo">
                        <div class="post-media overlay">
                            <a class="feature-image magnific hover-animate" href="{{$tour->photo ? asset($tour->photo->file): asset('images/404.png')}}" title="{{$tour->continent->name}} {{$tour->location}}">
                                <img alt="some image" src="{{$tour->photo ? asset($tour->photo->file): asset('images/404.png')}}">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="post-head small-screen-center">
                            <h2 class="post-title">
                                <a href="#">{{$tour->name}}</a>
                            </h2>
                            <small class="post-author">
                                <a href="#">{{$tour->continent->name}}</a>
                            </small>
                            <small class="post-date">
                                <a href="#">{{$tour->location}}</a>
                            </small>
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big">
                                    <i class="fa fa-camera"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>{{$tour->description}}</p>
                            <a class="more-link" href="#">Contantact at : 0{{$tour->contact}}</a>
                        </div>
                        <div class="bordered post-extras text-center">
                            <div class="text-center">
                                <span class="post-category">
                                    <a href="#"><i class="fa fa-folder-open"></i> News</a>
                                </span>
                                <span class="post-tags">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Design,</a>
                                    <a href="#">Flat,</a>
                                    <a href="#">Dynamics</a>
                                </span>
                                <span class="post-link">
                                    <a href="#">
                                        <i class="fa fa-comments"></i> 2 comments
                                    </a>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="post post-showinfo">
                        <div class="post-head small-screen-center no-title">
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <blockquote>
                                <p>Donec accumsan commodo vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sit amet dolor ac sapien elementum dignissim sed at purus. Phasellus imperdiet non arcu in pulvinar. Aliquam sit amet justo vel purus eleifend consequat vitae nec felis. Vestibulum pretium, est ut mattis aliquam, lorem nisi semper augue, in malesuada est velit eu mauris.</p>
                                <small>
                                    Someone famous <cite title="Source Title">Source Title</cite>
                                </small>
                            </blockquote>
                        </div>
                        <div class="post-extras bordered padded-huge text-center"></div>
                    </article>
                    <div class="text-center post-showinfo">
                        <ul class="post-navigation pagination">
                            <li class="disabled">
                                <a href="#">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="active">
                                <span href="#">1</span>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                        {{--@endforeach--}}
                </div>
                <aside class="col-md-3 sidebar">
                    <div class="sidebar-widget widget_search">
                        <form>
                            <div class="input-group">
                                <input class="form-control" placeholder="search" type="text">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget widget_categories">
                        <h3 class="sidebar-header">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Company</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_tag_cloud">
                        <h3 class="sidebar-header">Popular Tags</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <span>Mountains</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Winter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Sports</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Boating</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Recreation</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Tourism</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Nature</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Alps</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">Recent posts</h3>
                        <ul>
                            <li>
                                <div class="post-icon">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <a href="#">Nunc vehicula dapibus</a>
                                <small>12 Feb 2013</small>
                            </li>
                            <li>
                                <div class="post-icon">
                                    <i class="fa fa-camera"></i>
                                </div>
                                <a href="#">Fusce a metus eu diam</a>
                                <small>21 Jan 2013</small>
                            </li>
                            <li>
                                <div class="post-icon">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <a href="#">Quisque lacus augue</a>
                                <small>13 dec 2012</small>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_archive">
                        <h3 class="sidebar-header">Archive</h3>
                        <ul>
                            <li>
                                <a href="#">January</a> (12)
                            </li>
                            <li>
                                <a href="#">December</a> (7)
                            </li>
                            <li>
                                <a href="#">October</a> (4)
                            </li>
                            <li>
                                <a href="#">September</a> (9)
                            </li>
                            <li>
                                <a href="#">August</a> (13)
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_oxy_twitter">
                        <h3 class="sidebar-header">Twitter feed</h3>
                        <ul>
                            <li>RT @<a href="#">maguay</a>: Making a new @
                                <a href="#">TryGhost</a> theme? @
                                <a href="#">Envato</a> and @
                                <a href="#">ThemeForest</a>
                                have doubled their bounty for great new themes:
                                <a href="#" rel="nofollow">asd</a>
                                <small class="block text-italic">1&nbsp;day&nbsp;ago</small>
                            </li>
                            <li>RT @<a href="#">maguay</a>: Making a new @
                                <a href="#">TryGhost</a> theme? @
                                <a href="#">Envato</a> and @
                                <a href="#">ThemeForest</a>
                                have doubled their bounty for great new themes:
                                <a href="#" rel="nofollow">http://t.co/MqpDozDevG</a>
                                <small class="block text-italic">1&nbsp;day&nbsp;ago</small>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_text">
                        <h3 class="sidebar-header">About us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, voluptatem, delectus, dolor cupiditate consequatur hic at sapiente minima alias consectetur maxime repudiandae recusandae ratione enim nesciunt! Nemo, quisquam veniam perspiciatis.</p>
                    </div>
                </aside>
            </div>
        </div>
            @endif
    </section>
@endsection   
@extends('includes.header')