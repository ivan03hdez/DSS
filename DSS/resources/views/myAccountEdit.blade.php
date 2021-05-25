@extends('layouts.user')
@section('title','Home Page')
@section('content')

<h1>Good morning {{ $user->name }}. Here you can update your information.  </h1>
  <form method="post" action="{{action('UserController@updateDataMyaccount')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputName1">Current name: {{ $user->name }}</label>
    <input type="text" class="form-control" name="exampleInputName1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Current email address: {{ $user->email }}</label>
    <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Current password: {{ $user->password }}</label>
    <input type="password" class="form-control" name="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
      @if(strcmp($user->phone, '') == 0)
         <label for="exampleInputPhone1">Current phone number: None </label>  
      @else
         <label for="exampleInputPhone1">Current phone number: {{ $user->phone }}</label>  
      @endif
    <input type="text" class="form-control" name="exampleInputPhone1" placeholder="Phone">
  </div>
  <div class="form-group">
      @if(strcmp($user->phone, '') == 0)
         <label for="exampleInputAddress1">Current postal address: None</label>
      @else
         <label for="exampleInputAddress1">Current postal address: {{ $user->address }}</label>
      @endif
    <input type="text" class="form-control" name="exampleInputAddress1" placeholder="Address">
  </div>
  <div class="form-group">
      @if(strcmp($user->phone, '') == 0)
         <label for="exampleInputImage1">Current user image: None</label>
      @else
         <label for="exampleInputImage1">Current user image: {{ $user->image }}</label>
      @endif
    <input type="text" class="form-control" name="exampleInputImage1" placeholder="Image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
@section('scripts')
@endsection
