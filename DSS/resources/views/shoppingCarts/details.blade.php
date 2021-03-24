@extends('layouts.admin')
@section('title','Información de la cesta')
@section('content')
<h1>Información de la cesta del usuario {{$shoppingCart->user->name}}</h1>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">total acumulado</th>
      <th scope="col">productos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$shoppingCart->id}}</th>
      <td>{{$shoppingCart->total}}</td>
      <td>{{$shoppingCart->products}}</td>
    </tr>
  </tbody>
</table>
@endsection