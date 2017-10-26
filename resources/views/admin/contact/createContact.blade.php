@extends('layouts.registered');
@section('content')
    <h1>Create Contact</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::open(['method'=>'POST' ,'action'=>'AdminContactController@store','files'=>true])!!}
                        {{csrf_field()}}
            <div class="form-area" style="padding: 100px";>
                {!! Form::label('number','Contact :') !!}
                {!! Form::text('number', null , ['class'=>'form-control']) !!}
                {!! Form::label('address', 'Address :') !!}
                {!! Form::textarea('address', null, ['class'=>'form-control','rows'=> 3]) !!}
                {!! Form::submit('Create Contact', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
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
