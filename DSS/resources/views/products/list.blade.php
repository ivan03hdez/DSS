@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<h1>Products</h1>
<div class="table-responsive">
<table class="table table-hover text">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('name')</th>
      <th scope="col">@sortablelink('model')</th>
      <th scope="col">@sortablelink('description')</th>
      <th scope="col">Discount</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <form class="d-flex col my-auto" type="get" action="{{ url('/searchP') }}">
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
          <!-- <form class="d-flex col my-auto" type="get" action="{{ url('/search') }}"> </form> -->
            <input class="form-control form-control-lg me-2" name="searchP-id" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchP-name" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchP-model" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchP-description" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
            <input class="form-control form-control-lg me-2" name="searchP-discount" type="text">
      </div>
    </td>
    <td scope="col">
      <div class="col-2-sm admin-outer-container" > 
          <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
      </div>
    </td>
  </form>
    @foreach($products as $product)
    <tr>
      <th scope="row"><a href="{{action('ProductController@get',$product->id)}}">{{$product->id}}</a></th>
      <td>{{$product->name}}</td>
      <td>{{$product->model}}</td>
      <td>{{$product->description}}</td>
      <td><a href="{{action('PromotionController@get',$product->promotion->id)}}">{{$product->promotion->discount}}%</a></td>
      
      <td class="icon-trash" >
        <svg version="1.1"  data-toggle="modal" data-target="#exampleModal" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="25px" height="35px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
          <g class="icon-trash">
            <rect x="67.224" width="350.535" height="71.81"/>
            <path d="M417.776,92.829H67.237V485h350.537V92.829H417.776z M165.402,431.447h-28.362V146.383h28.362V431.447z M256.689,431.447
              h-28.363V146.383h28.363V431.447z M347.97,431.447h-28.361V146.383h28.361V431.447z"/>
          </g>
        </svg>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  Desea eliminar este elemento
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form class="d-flex col my-auto" type="get" action="{{action('ProductController@delete', $product->id)}}">
                  <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </td>  
    </tr>
    
    @endforeach
    
  </tbody>
</table>
</div>
{{$products->appends(request()->except(['page','_token']))->links()}}
@endsection