@extends('layouts.registered');
@section('content')
<div class="container">
   <table class="table">
     <thead class="thead-default">
       <tr>
         <th>#</th>
         <th>User Type</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Created At</th>
         <th>Updated At</th>
       </tr>
     </thead>
     <tbody>
     @if( $users)
       @foreach($users as $user)
             <tr>
         <th scope="row">{{$user->id}}</th>
         <td>{{$user->role->name}}</td>
         <td>{{$user->firstName}}</td>
         <td>{{$user->lastName}}</td>
         <td>{{$user->userName}}</td>
         <td>{{$user->email}}</td>
         <td>{{$user->created_at->diffForHumans()}}</td>
         <td>{{$user->updated_at->diffForHumans()}}</td>
       </tr>
       @endforeach
     @endif
     </tbody>
       </table>
</div>
@endsection
