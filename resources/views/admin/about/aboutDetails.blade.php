@extends('layouts.registered');
@section('content')
    @if(Session::has('deleted_about'))
     <p class="bg bg-danger">{{session('deleted_about')}}</p>
     @endif
    @if(Session::has('edited_about'))
        <p class="bg bg-success">{{session('edited_about')}}</p>
    @endif
    @if(Session::has('created_about'))
        <p class="bg bg-info">{{session('created_about')}}</p>
    @endif

<div class="container">
   <table class="table">
     <thead class="thead-default">
       <tr>
           <th>#</th>
           <th>Picture</th>
           <th>Name</th>
           <th>Title</th>
           <th>Contact Number</th>
           <th>Description</th>

       </tr>
     </thead>
     <tbody>
     @if($abouts)
       @foreach($abouts as $about)
            <tr>
                 <td scope="row">{{$about->id}}</td>
                 <td><img height="50" src="{{$about->photo ? asset($about->photo->file) : asset('images/404.png')}}" alt="" class="img-responsive img-circle"></td>
                 <td><a href="{{route('about.edit',$about->id)}}">{{$about->name}}</a></td>
                 <td>{{$about->title}}</td>
                 <td>{{$about->contact}}</td>
                 <td>{{$about->description}}</td>
            </tr>
       @endforeach
     @endif
     </tbody>
       </table>
</div>
@endsection
