@extends('layouts.admin')
@section('title','Información del pedido')
@section('content')
<h1>Informacion del pedido {{$order->id}}</h1>
<table class="table table-borderless">
  <thead width=80%>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Total Price</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Nº lineas de pedido</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->totalPrice}}</td>
      <td>{{$order->paymentMethod}}</td>
      <td>{{$order->numberOfLines($order->id)}}</td>
         
    </tr>
  </tbody>
</table>
@endsection