@extends('layouts.admin')
@section('title','Información del producto')
@section('content')
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">model</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->model}}</td>
      <td>{{$product->description}}</td>
    </tr>
  </tbody>
</table>
@endsection