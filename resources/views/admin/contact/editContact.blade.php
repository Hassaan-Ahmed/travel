@extends('layouts.registered');
@section('content')
    <h1 align="centre">Edit Contact</h1>
    <div class="row">
        <div class="col-sm-9">
        {!! Form::model($contacts,['method'=>'PATCH','action'=>['AdminContactController@update',$contacts->id],'files'=>true])!!}
                    {{csrf_field()}}
            <div class="form-area" style="padding: 100px";>
                {!! Form::label('number','Contact :') !!}
                {!! Form::text('number', null , ['class'=>'form-control']) !!}
                {!! Form::label('address', 'Address :') !!}
                {!! Form::textarea('address', null, ['class'=>'form-control','rows'=> 3]) !!}
              <div class="row">
                {!! Form::submit('Edit Contact', ['style'=>'margin: 50px','class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
                <div style="padding-top: 50px; padding-left: 50px">
                {!! Form::open(['method'=>'DELETE','action'=>['AdminContactController@destroy',$contacts->id]])!!}
                {!! Form::submit('Delete Contact', ['class'=>'btn btn-danger']) !!}
                </div>
              </div>
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

@endsection
