@extends('layouts.admin')
@section('title','Lista con todas las cestas (una por usuario)')
@section('content')
<h1>Products</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">total acumulado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($shoppingCarts as $shoppingCart)
    <tr>
      <th scope="row"><a href="{{action('ShoppingCartController@get',$shoppingCart->id)}}">{{$shoppingCart->id}}</a></th>
      <td>{{$shoppingCart->total}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$shoppingCarts->appends(request()->except(['page','_token']))->links()}}
@endsection