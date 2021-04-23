@extends('layouts.admin')
@section('title','Crear Promocion')
@section('content')
<form method="get" action="{{action('PromotionController@create')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputDiscount1">Discount</label>
    <input type="text" class="form-control" name="exampleInputDiscount1" placeholder="Discount">
  </div>
  <div class="form-group">
    <label for="exampleInputBeginDate1">Begin Date</label>
    <input type="text" class="form-control" name="exampleInputBeginDate1" placeholder="BeginDate">
  </div>
  <div class="form-group">
    <label for="exampleInputEndDate1">End Date</label>
    <input type="text" class="form-control" name="exampleInputEndDate1" placeholder="EndDate">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection