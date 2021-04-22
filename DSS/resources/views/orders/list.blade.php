@inject('providerOrder', 'App\Http\Controllers\OrderController')
@extends('layouts.admin')
@section('title','Lista con todos los pedidos')
@section('content')
<h1>Orders</h1>
@if($orders->count()==0) NO se ha realizado ningun pedido.
@else
<div class="table-responsive">
  <table class="table table-hover text">
    <thead class="thead-dark">
      <tr>
        <th scope="col">@sortablelink('id')</th>
        <th scope="col">@sortablelink('totalPrice')</th>
        <th scope="col">@sortablelink('paymentMethod')</th>
        <th scope="col">Number of OrderLines</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <form class="d-flex col my-auto" type="get" action="{{ url('/searchO') }}">
        <td scope="col">
          <div class="col-2-sm admin-outer-container" > 
                <input class="form-control form-control-lg me-2" name="searchO-id" type="text">
          </div>
        </td>
        <td scope="col">
          <div class="col-2-sm admin-outer-container" > 
                <input class="form-control form-control-lg me-2" name="searchO-totalPrice" type="text">
          </div>
        </td>
        <td scope="col">
          <div class="col-2-sm admin-outer-container" > 
                <input class="form-control form-control-lg me-2" name="searchO-paymentMethod" type="text">
          </div>
        <td scope="col">
          <div class="col-2-sm admin-outer-container" > 
              <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
          </div>
        </td>
      </form>
      @foreach($orders as $order)
      <tr>
        <th scope="row"><a href="{{action('OrderController@get',$order->id)}}">{{$order->id}}</a></th>
        <td>{{$order->totalPrice}}</td>
        <td>{{$order->paymentMethod}}</td>
        <td>{{ $providerOrder::numberOfLines($order->id) }}</td>
        <td class="icon-trash">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="25px" height="35px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
            <g class="icon-trash">
              <rect x="67.224" width="350.535" height="71.81"/>
              <path d="M417.776,92.829H67.237V485h350.537V92.829H417.776z M165.402,431.447h-28.362V146.383h28.362V431.447z M256.689,431.447
                h-28.363V146.383h28.363V431.447z M347.97,431.447h-28.361V146.383h28.361V431.447z"/>
            </g>
          </svg>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$orders->appends(request()->except(['page','_token']))->links()}}
@endif
@endsection