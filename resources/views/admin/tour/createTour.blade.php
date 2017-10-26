@extends('layouts.registered');
@section('content')
    @if(Session::has('deleted_tour'))
        <p class="bg bg-danger">{{session('deleted_about')}}</p>
    @endif
    @if(Session::has('edited_tour'))
        <p class="bg bg-danger">{{session('edited_tour')}}</p>
    @endif
    @if(Session::has('created_tour'))
        <p class="bg bg-danger">{{session('created_tour')}}</p>
    @endif
    <h1>Create Tours</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::open(['method'=>'POST' ,'action'=>'AdminUserController@store','files'=>true])!!}
                        {{csrf_field()}}
                <div class="form-area" style="padding: 100px">
                    {!! Form::label('name','Tour Name :') !!}
                    {!! Form::text('name', null , ['class'=>'form-control']) !!}
                    {!! Form::label('continent_id','Continent Name :') !!}
                    {!! Form::select('continent_id',[''=> 'Chose Continents'] + $continent, null , ['class'=>'form-control']) !!}
                    {!! Form::label('location', 'Location :') !!}
                    {!! Form::text('location', null, ['class'=>'form-control']) !!}
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
                    {!! Form::submit('Create Tour', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
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
