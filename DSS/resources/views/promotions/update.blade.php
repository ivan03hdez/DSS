@extends('layouts.admin')
@section('title','Update Promotion')
@section('content')
<h1>You are editing Promotion {{$id}}  </h1>
  <form method="post" action="{{action('PromotionController@updateData',$id)}}">
  @csrf 
  <div class="form-group">
    <input type="hidden" class="form-control" name="idUpdate" placeholder="Discount" value="{{$id}}">
  </div>
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection