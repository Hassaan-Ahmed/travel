@extends('layouts.registered');
@section('content')
    <h1 style="text-align: center">Edit About</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$abouts->photo ? asset('$abouts->photo->file '): asset('images/404.png')}}" alt="" class="img-responsive img-circle">
        </div>
        <div class="col-sm-9">
        {!! Form::model($abouts,['method'=>'PATCH','action'=>['AdminAboutController@update',$abouts->id],'files'=>true])!!}
                    {{csrf_field()}}
            <div class="form-area" style="padding: 100px";>
                {!! Form::label('name', 'Name :') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
                {!! Form::label('title', 'Title :') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                <div>
                {!! Form::label('photo_id', 'Pictures :') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                {!! Form::label('contact', 'Contact Number:') !!}
                {!! Form::text('contact', null, ['class'=>'form-control']) !!}
                {!! Form::label('description', 'Detail :') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                <div class="row">
                {!! Form::submit('Edit About', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
                    {!! Form::close() !!}
                    <div style="padding-top: 50px; padding-left: 50px">
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminAboutController@destroy',$abouts->id]])!!}
                    {!! Form::submit('Delete About', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @if(count($errors) > 0)
            <div class="alert alert-danger" style="text-align: center">
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



@endsection
