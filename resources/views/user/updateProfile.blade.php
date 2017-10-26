@extends('includes.footer')
@section('content')
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


<div class="container" >
    <div class="row">
        <div class="col-md-10" style="margin-top: 50px">
            <div class="col-md-3">
            <img src="{{$user->photo ? asset($user->photo->file) : asset('images/default.png')}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
            </div>
            <div class="col-md-9 ">
            {!! Form::model($user, ['method'=>'PUT' ,'action'=>['UsersController@update',$user->id],'files'=>true])!!}
                <div class=form-group style="margin: 50px">
                    <h2>{{$user->userName}}'s profile</h2>
                    {!! Form::label('firstName','First Name :') !!}
                    {!! Form::text('firstName', null , ['class'=>'form-control']) !!}
                    {!! Form::label('lastName', 'Last Name :') !!}
                    {!! Form::text('lastName', null, ['class'=>'form-control']) !!}
                    {!! Form::label('userName', 'User Name :') !!}
                    {!! Form::text('userName', null, ['class'=>'form-control']) !!}
                    {!! Form::label('email', 'Email :') !!}
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    {!! Form::label('photo_id', 'Profile Picture :') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control','style'=>'padding:40px']) !!}
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', null, ['class'=>'form-control','style'=>'padding:40px']) !!}

                 </div>
            </div>
            <div class="row" style="padding-top: 20px; padding-left: 50%; margin-bottom: 40px">
                    {!! Form::submit('Update User Info', ['class'=>'btn btn-info']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
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
@extends('includes.header')