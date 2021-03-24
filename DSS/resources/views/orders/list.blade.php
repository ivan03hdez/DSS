@extends('layouts.admin')
@section('title','Lista con todos los pedidos')
@section('content')
<h1>Pedidos</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">totalPrice</th>
      <th scope="col">paymentMethod</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row"><a href="{{action('OrderController@get',$order->id)}}">{{$order->id}}</a></th>
      <td>{{$order->totalPrice}}</td>
      <td>{{$order->paymentMethod}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection