@extends('layouts.admin')
@section('title','Información de la promocion')
@section('content')
<h1>Información de la promocion y productos afectados</h1>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">discount</th>
      <th scope="col">beginDate</th>
      <th scope="col">endDate</th>
      <th scope="col">affected Products</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$promotion->id}}</th>
      <td>{{$promotion->discount}}</td>
      <td>{{$promotion->beginDate}}</td>
      <td>{{$promotion->endDate}}</td>
      <td>{{$promotion->products}}</td>
    </tr>
  </tbody>
</table>
@endsection