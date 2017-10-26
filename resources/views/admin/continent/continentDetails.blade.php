@extends('layouts.registered');
@section('content')
    @if(Session::has('deleted_continent'))
     <p class="bg bg-danger">{{session('deleted_continent')}}</p>
     @endif
    @if(Session::has('edited_continent'))
        <p class="bg bg-success">{{session('edited_continent')}}</p>
    @endif
    @if(Session::has('created_continent'))
        <p class="bg bg-info">{{session('created_continent')}}</p>
    @endif

<div class="container">
   <table class="table">
     <thead class="thead-default">
       <tr>
           <th>#</th>
           <th>Picture</th>
           <th>Name</th>

       </tr>
     </thead>
     <tbody>
     @if($continents)
       @foreach($continents as $continent)
            <tr>
                 <td scope="row">{{$continent->id}}</td>
                 <td><img height="50" src="{{$continent->photo ? asset($continent->photo->file) : asset('images/404.png')}}" alt="" class="img-responsive img-circle"></td>
                 <td><a href="{{route('continent.edit',$continent->id)}}">{{$continent->name}}</a></td>
            </tr>
       @endforeach
     @endif
     </tbody>
       </table>
</div>
@endsection
