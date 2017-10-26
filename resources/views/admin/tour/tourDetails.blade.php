@extends('layouts.registered');
@section('content')
    @if(Session::has('deleted_tour'))
        <p class="bg bg-danger">{{session('deleted_tour')}}</p>
    @endif
    @if(Session::has('edited_tour'))
        <p class="bg bg-success">{{session('edited_edited')}}</p>
    @endif
    @if(Session::has('created_tour'))
        <p class="bg bg-info">{{session('created_tour')}}</p>
    @endif
<div class="container">
   <table class="table">
     <thead class="thead-default">
       <tr>
           <th>#</th>
           <th>Picture</th>
           <th>Tour Name</th>
           <th>Continent Name</th>
           <th>Location</th>
           <th>Services</th>
           <th>Contact Number</th>
           <th>Description</th>
       </tr>
     </thead>
     <tbody>
     @if($tours)
       @foreach($tours as $tour)
            <tr>
                 <td scope="row">{{$tour->id}}</td>
                 <td><img height="50" src="{{$tour->photo ? asset($tour->photo->file): asset('images/404.png')}}" alt="" class="img-responsive img-circle"/></td>
                 <td><a href="{{route('tour.edit',$tour->id)}}">{{$tour->name}}</a></td>
                <td>{{$tour->continent->name}}</td>
                 <td>{{$tour->location}}</td>
                 <td>{{$tour->service}}</td>
                 <td>{{$tour->contact}}</td>
                 <td>{{$tour->description}}</td>
            </tr>
       @endforeach
     @endif
     </tbody>
       </table>
</div>
@endsection
