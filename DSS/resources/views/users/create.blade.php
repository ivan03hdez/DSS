@extends('layouts.admin')
@section('title','Crear Usuario')
@section('content')
<form method="get" action="{{action('UserController@create')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" name="exampleInputName1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone1">Phone</label>
    <input type="text" class="form-control" name="exampleInputPhone1" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <input type="text" class="form-control" name="exampleInputAddress1" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputRole1">Role</label>
    <input type="text" class="form-control" name="exampleInputRole1" placeholder="Role">
  </div>
  <div class="form-group">
    <label for="exampleInputImage1">Image</label>
    <input type="text" class="form-control" name="exampleInputImage1" placeholder="Image">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection