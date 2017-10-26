@extends('layouts.registered');
@section('content')
    <h1>Create Continent</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::open(['method'=>'POST' ,'action'=>'AdminContinentController@store','files'=>true])!!}
                        {{csrf_field()}}
            <div class="form-area" style="padding: 100px";>
                {!! Form::label('name', 'Name :') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
                <div>
                    {!! Form::label('photo_id', 'Pictures :') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                    {!! Form::submit('Create Continent', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
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
