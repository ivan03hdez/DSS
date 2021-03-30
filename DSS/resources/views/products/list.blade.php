@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Products</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('name')</th>
      <th scope="col">@sortablelink('model')</th>
      <th scope="col">@sortablelink('description')</th>
      <th scope="col">Discount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row"><a href="{{action('ProductController@get',$product->id)}}">{{$product->id}}</a></th>
      <td>{{$product->name}}</td>
      <td>{{$product->model}}</td>
      <td>{{$product->description}}</td>
      <td><a href="{{action('PromotionController@get',$product->promotion->id)}}">{{$product->promotion->discount}}%</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$products->appends(request()->except(['page','_token']))->links()}}
@endsection