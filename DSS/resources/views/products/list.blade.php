@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Products</h1>
<div class="table-responsive">
<table class="table table-hover table-responsive text">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('name')</th>
      <th scope="col">@sortablelink('model')</th>
      <th scope="col">@sortablelink('description')</th>
      <th scope="col">Discount</th>
      <th scope="col">Eliminar</th>
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
{{$products->appends(request()->except(['page','_token']))->links()}}
@endsection
@section('search')
   @parent  
   <div class="col-2-sm admin-outer-container" > 
   <form class="d-flex col my-auto" type="get" action="{{ url('/searchP') }}">
                      <input class="form-control form-control-lg me-2" name="search-query" type="search">
                      <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
                  </form>
                  </div>
@endsection