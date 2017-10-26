@extends('layouts.registered');
@section('content')
    @if(Session::has('deleted_contact'))
        <p class="bg bg-danger">{{session('deleted_contact')}}</p>
    @endif
    @if(Session::has('edited_contact'))
        <p class="bg bg-success">{{session('edited_contact')}}</p>
    @endif
    @if(Session::has('created_contact'))
        <p class="bg bg-info">{{session('created_contact')}}</p>
    @endif
<div class="container">
   <table class="table">
       <thead class="thead-default">
         <tr>
           <th>#</th>
           <th>Address</th>
           <th>Contact Number</th>
         </tr>
       </thead>
       <tbody>
     @if($contacts)
       @foreach($contacts as $contact)
          <tr>
            <td scope="row">{{$contact->id}}</td>
            <td><a href="{{route('contact.edit',$contact->id)}}">{{$contact->address}}</a></td>
            <td>{{$contact->number}}</td>
          </tr>
       @endforeach
     @endif
       </tbody>
   </table>
</div>
@endsection
