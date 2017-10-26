@extends('layouts.registered');
@section('content')
    <h1>Create About</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::open(['method'=>'POST' ,'action'=>'AdminAboutController@store','files'=>true])!!}
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
                    {!! Form::submit('Create About', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
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
@endsection
