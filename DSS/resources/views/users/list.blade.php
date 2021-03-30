@extends('layouts.admin')
@section('title','Lista con todos los usuarios')
@section('content')
<h1>Usuarios</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('name')</th>
      <th scope="col">@sortablelink('email')</th>
      <th scope="col">@sortablelink('address')</th>
      <th scope="col">@sortablelink('phone')</th>
      <th scope="col">Nº listas de favoritos</th>
      <th scope="col">Nº pedidos</th>

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
      <td><a href="{{action('FavoriteListController@filter',$user->id)}}">{{$user->numberofLists($user->id)}}</a></td>
      <td><a href="{{action('OrderController@filter',$user->id)}}">{{$user->numberofOrders($user->id)}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $users->appends(\Request::except('page'))->render() !!}
@endsection