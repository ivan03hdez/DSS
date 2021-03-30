@extends('layouts.admin')
@section('title','Información del usuario')
@section('content')
<h1>Información de {{$user->name}}</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">image</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->image}}</td>
      <td>{{$user->role}}</td>
    </tr>
  </tbody>
</table>
<h4>Información de los pedidos de {{$user->name}}</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      @foreach($user->orders as $order)
      <th scope="col">order</th>
      <th scope="col">totalPrice</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
  <tr>
    @foreach($user->orders as $order)
      <td scope="row"><a href="{{action('OrderController@get',$order->id)}}">{{$order->id}}</a></td>
      <td scope="row">{{$order->totalPrice}}</td>
    @endforeach
      </tr>
  </tbody>
</table>


<h4>Información de las listas de favoritos de {{$user->name}}</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
    @foreach($user->favLists as $favList)
      <th scope="col">Nombre</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach($user->favLists as $favList)
      <td scope="row"><a href="{{action('FavoriteListController@get',$favList->id)}}">{{$favList->name}}</a></td>
    @endforeach
      </tr>
  </tbody>
</table>
@endsection