@extends('includes.footer')
@section('content')
    @if(Session::has('updated_user'))
        <p class="bg bg-info">{{session('updated_user')}}</p>
    @endif
<div class="container" style="margin: 150px; align-content: center; padding: 150px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-3">
            <img src="{{$users->photo ? asset($users->photo->file) :asset('images/default.png')}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
            </div>
           <div class="col-md-9 col-offset-1">
              <h2><a href="{{route('user.edit', $users->id)}}">{{$users->userName}}'s profile</a></h2>
                <div class="row" style="align-content: right">
                    <h4 class="container">First Name: {{$users->firstName}} </h4>
                    <h4 class="container">Last Name: {{$users->lastName}} </h4>
                    <h4 class="container">User Name: {{$users->userName}} </h4>
                    <h4 class="container">Email: {{$users->email}} </h4>

                </div>
           </div>
        </div>
    </div>
</div>

@endsection
@extends('includes.header')