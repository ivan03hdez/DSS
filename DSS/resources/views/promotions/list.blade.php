@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Promociones</h1>
<table class="table table-hover table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">discount</th>
      <th scope="col">beginDate</th>
      <th scope="col">endDate</th>
    </tr>
  </thead>
  <tbody>
    @foreach($promotions as $promotion)
    <tr>
      <th scope="row"><a href="{{action('PromotionController@get',$promotion->id)}}">{{$promotion->id}}</a></th>
      <td>{{$promotion->discount}}</td>
      <td>{{$promotion->beginDate}}</td>
      <td>{{$promotion->endDate}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection