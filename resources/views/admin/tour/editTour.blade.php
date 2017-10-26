@extends('layouts.registered');
@section('content')
    <h1 style="text-align: center" >Edit Tours</h1>
    <div class="row">
        <div class="col-sm-3"style="padding: 70px">
            <img src="{{$tour->photo ? asset($tour->photo->file) : 'images/404.png'}}" alt="" class="img-responsive img-circle">
        </div>
        <div class="col-sm-9">
        {!! Form::model($tour,['method'=>'PATCH','action'=>['AdminUserController@update',$tour->id],'files'=>true])!!}
                    {{csrf_field()}}
            <div class="form-area" style="padding: 100px";>
                {!! Form::label('name','Tour Name :') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
                {!! Form::label('location', 'Location :') !!}
                {!! Form::text('location', null, ['class'=>'form-control']) !!}
                {!! Form::label('continent_id','Continent Name :') !!}
                {!! Form::select('continent_id',$continents, null , ['class'=>'form-control']) !!}
                <div>
                {!! Form::label('photo_id', 'Pictures :') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                {!! Form::label('service','Services :') !!}
                {!! Form::text('service', null , ['class'=>'form-control']) !!}
                {!! Form::label('contact', 'Contact Number:') !!}
                {!! Form::text('contact', null, ['class'=>'form-control']) !!}
                {!! Form::label('description', 'Detail :') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                {!! Form::submit('Edit Tour', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
                {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$tour->id]])!!}
                {!! Form::submit('Delete Tour', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
             </div>
        {!! Form::close() !!}
         </div>
    </div>
    <div class="row">
    @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>

                @endforeach
            </ul>
        </div>

     @endif

    </div>

   {{-- <div class="container">
        <div class="col-md-5">
            <div class="form-area">
                <form role="form">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tour Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Location" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Services" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Detail" maxlength="1000" rows="7"></textarea>
                        <span class="help-block"></span>
                    </div>

                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                </form>
            </div>
        </div>
    </div>--}}
@endsection
