@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-red-white">
        @if($tours)
            @foreach($tours as $tour)
            <div class="container">
            <div class="row">
                <div class="col-md-3 text-default">
                    <div class="box-wrap alignnone">
                        <div class="box-round box-big flat-shadow">
                            <div class="box-dummy"></div>
                            <span class="box-inner">
                                <img class="" src="{{$tour->photo ? asset($tour->photo->file): asset('images/404.png')}}" alt="Some Image" data-animation="">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 text-default">
                    <h1 class="bordered-header"><a href="{{route('tour.show',$tour->id)}}">{{$tour->name}}</h1>
                    <p class="lead">{{$tour->service}}</p>
                    <a class="more-link" href="{{route('tour.show',$tour->id)}}">read more</a>
                </div>
            </div>
        </div>
            @endforeach
        @endif
    </section>
@endsection   
@extends('includes.header')