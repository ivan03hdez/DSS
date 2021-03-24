@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Usuarios</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">listas de favoritos</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
    <th scope="row"><a href="{{action('UserController@get',$user->id)}}">{{$user->id}}</a></th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->phone}}</td>
      @foreach($user->favLists as $favList)
        <td scope="row">{{$favList->id}}</td>
        <td scope="row">{{$favList->name}}</td>
      @endforeach
    </tr>
    @endforeach
  </tbody>
</table>
@endsection