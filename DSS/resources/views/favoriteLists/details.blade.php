@extends('layouts.admin')
@section('title','Información de la lista de favoritos')
@section('content')
<div class="table-responsive">
<table class="table table-hover text">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Description</th>
      <th scope="col">User</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr data-id="{{$favoriteList->id}}" class="icon-trash">
      <th scope="row">{{$favoriteList->id}}</th>
      <td>{{$favoriteList->name}}</td>
      <td>{{$favoriteList->description}}</span></td>
      <td><a href="{{action('UserController@get',$favoriteList->user->id)}}">{{$favoriteList->user->name}}</a></td>
      <td class="icon-trash">
        <svg id="trash" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="25px" height="35px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
          <g class="icon-trash">
            <rect x="67.224" width="350.535" height="71.81"/>
            <path d="M417.776,92.829H67.237V485h350.537V92.829H417.776z M165.402,431.447h-28.362V146.383h28.362V431.447z M256.689,431.447
              h-28.363V146.383h28.363V431.447z M347.97,431.447h-28.361V146.383h28.361V431.447z"/>
          </g>
        </svg>
      </td>
    </tr>
  </tbody>
</table>
</div>
@endsection