@extends('layouts.admin')
@section('title','pagina con todas las listas de favoritos')
@section('content')
<h1>Products</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Usuario (Pertenece a)</th>
    </tr>
  </thead>
  <tbody>
    @foreach($favoriteLists as $favoriteList)
    <tr>
      <th scope="row"><a href="{{action('FavoriteListController@get',$favoriteList->id)}}">{{$favoriteList->id}}</a></th>
      <td>{{$favoriteList->name}}</td>
      <td>{{$favoriteList->description}}</td>
      <td><a href="{{action('UserController@get',$favoriteList->user->id)}}">{{$favoriteList->user->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection