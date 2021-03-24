@extends('layouts.admin')
@section('title','Lista con todos las lineas de todos los pedidos')
@section('content')
<h1>Products</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderLines as $orderLine)
    <tr>
      <th scope="row"><a href="{{action('OrderLineController@get',$orderLine->id)}}">{{$orderLine->id}}</a></th>
      <td>{{$orderLine->quantity}}</td>
      <td>{{$orderLine->price}}</td>
      <td>{{$orderLine->description}}</td>
      <td><a href="{{action('OrderController@get',$orderLine->order->id)}}">{{$orderLine->order}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection