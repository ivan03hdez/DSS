@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Promociones</h1>
<div class="table-responsive">
<table class="table table-hover text">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('discount')</th>
      <th scope="col">@sortablelink('beginDate')</th>
      <th scope="col">@sortablelink('endDate')</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <form class="d-flex col my-auto" type="get" action="{{ url('/searchD') }}">
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
          <!-- <form class="d-flex col my-auto" type="get" action="{{ url('/search') }}"> </form> -->
            <input class="form-control form-control-lg me-2" name="searchD-id" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchD-discount" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchD-begin" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchD-end" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
          <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
      </div>
    </td>
  </form>
    @foreach($promotions as $promotion)
    <tr>
      <th scope="row"><a href="{{action('PromotionController@get',$promotion->id)}}">{{$promotion->id}}</a></th>
      <td>{{$promotion->discount}}</td>
      <td>{{$promotion->beginDate}}</td>
      <td>{{$promotion->endDate}}</td>
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
{{$promotions->appends(request()->except(['page','_token']))->links()}}
@endsection