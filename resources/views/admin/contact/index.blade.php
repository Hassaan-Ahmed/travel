@extends('includes.footer')
@section('content')
<div id="content" role="main">
    <section class="section swatch-white-red section-nopadding">
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d803.3213648851171!2d74.34221804314234!3d31.513076358709725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045be1c3bd51%3A0x93ea43ae9cf775a6!2zQXNoaWFuYSBTaG9waW5nIENlbnRlciDYoti024zYp9mG24Eg2LTYp9m-2YbaryDYs9uM2YbZudix!5e0!3m2!1sen!2sus!4v1508997245651" width="1600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>

                </div>
            </div>
        </div>
    </section>
    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg"><path d="M0 100 L50 0 L100 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            @if($contacts)
            <header class="section-header underline">
                <h1 class="headline hyper hairline">Want to talk?</h1>
                @foreach($contacts as $contact)
                <h1 class="headline hyper hairline">{{$contact->number}}</h1>
                <p class="big">{{$contact->address}}</p>
                    @endforeach
            </header>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contactForm" class="contact-form">
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required=""><i class="fa fa-user"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required=""><i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required=""></textarea><i class="fa fa-pencil"></i>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-icon btn-icon-right" type="submit">Send email
                                <div class="hex-alt"><i class="fa fa-envelope"></i></div>
                            </button>
                        </div>
                    </form>
                    <div id="messages"></div>
                </div>
            </div>
                @endif
        </div>
    </section>
@endsection
@extends('includes.header')