@extends('layouts.admin')
@section('title','Información de la linea del pedido')
@section('content')
<h1>Lineas del pedido {{$orderLine->order->id}}</h1>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Belongs To Order</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$orderLine->id}}</th>
      <td>{{$orderLine->quantity}}</td>
      <td>{{$orderLine->price}}</td>
      <td>{{$orderLine->description}}</td>
      <td><a href="{{action('OrderController@get',$orderLine->order->id)}}">{{$orderLine->order->id}}</a></td>
    </tr>
  </tbody>
</table>
@endsection