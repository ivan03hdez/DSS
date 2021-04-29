@extends('layouts.admin')
@section('title','Update Products')
@section('content')
<h1>You are editing product {{$id}}  </h1>
  <form method="post" action="{{action('ProductController@updateData',$id)}}">
  @csrf 
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" name="exampleInputName1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPrice1">Price</label>
    <input type="text" class="form-control" name="exampleInputPrice1" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPromotionPrice1">Promotion Price</label>
    <input type="text" class="form-control" name="exampleInputPromotionPrice1" placeholder="PromotionPrice">
  </div>
  <div class="form-group">
    <label for="exampleInputDescription1">Description</label>
    <input type="text" class="form-control" name="exampleInputDescription1" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputStock1">Stock</label>
    <input type="text" class="form-control" name="exampleInputStock1" placeholder="Stock">
  </div>
  <div class="form-group">
    <label for="exampleInputColor1">Color</label>
    <input type="text" class="form-control" name="exampleInputColor1" placeholder="Color">
  </div> 
  <div class="form-group">
    <label for="exampleInputModel1">Model</label>
    <input type="text" class="form-control" name="exampleInputModel1" placeholder="Model">
  </div>
  <div class="form-group">
    <label for="exampleInputImage1">Image</label>
    <input type="text" class="form-control" name="exampleInputImage1" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="exampleInputType1">Type</label>
    <input type="text" class="form-control" name="exampleInputType1" placeholder="Type">
  </div>
  <div class="form-group">
    <label for="exampleInputPromId1">Promotion Id</label>
    <input type="text" class="form-control" name="exampleInputPromId1" placeholder="PromId">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection