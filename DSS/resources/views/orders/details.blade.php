@inject('providerOrder', 'App\Http\Controllers\OrderController')
@extends('layouts.admin')
@section('title','Información del pedido')
@section('content')
<h1>Order {{$order->id}} information </h1>
<div class="table-responsive">
  <table class="table table-hover text">
    <thead class="thead-dark">
      <tr>
      <th scope="col">id</th>
        <th scope="col">Total Price</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Nº lineas de pedido</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr data-id="{{$order->id}}">
        <th  scope="row">{{$order->id}}</th>
        <td >{{$order->totalPrice}}</td>
        <td>{{$order->paymentMethod}}</td>
        <td>{{ $providerOrder::numberOfLines($order->id) }}</td>
        <td class="icon-trash">
          <svg id="trash"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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