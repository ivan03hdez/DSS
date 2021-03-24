@extends('layouts.admin')
@section('title','Información del usuario')
@section('content')
<h1>Información del usuario {{user->name}}</h1>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->phone}}</td>
    </tr>
  </tbody>
</table>
@endsection