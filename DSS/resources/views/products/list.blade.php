@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Products</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row"><a href="{{action('ProductController@get',$product->id)}}">{{$product->id}}</a></th>
      <td>{{$product->name}}</td>
      <td>{{$product->model}}</td>
      <td>{{$product->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection