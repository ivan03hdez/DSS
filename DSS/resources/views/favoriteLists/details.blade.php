@extends('layouts.admin')
@section('title','Información de la lista de favoritos')
@section('content')
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Description</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$favoriteList->id}}</th>
      <td>{{$favoriteList->name}}</td>
      <td>{{$favoriteList->description}}</td>
      <td><a href="{{action('UserController@get',$favoriteList->user->id)}}">{{$favoriteList->user->name}}</a></td>
    </tr>
  </tbody>
</table>
@endsection