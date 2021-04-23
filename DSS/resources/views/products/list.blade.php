@extends('layouts.admin')
@section('title','Lista con todos los productos')
@section('content')
<div class="row add">
  <h1>Productos</h1>
    <a href="products/create">
      <svg height="45px" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
          <path d="m256 512c-141.164062 0-256-114.835938-256-256s114.835938-256 256-256 256 114.835938 256 256-114.835938 256-256 256zm0-480c-123.519531 0-224 100.480469-224 224s100.480469 224 224 224 224-100.480469 224-224-100.480469-224-224-224zm0 0"/><path d="m368 272h-224c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h224c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m256 384c-8.832031 0-16-7.167969-16-16v-224c0-8.832031 7.167969-16 16-16s16 7.167969 16 16v224c0 8.832031-7.167969 16-16 16zm0 0"/>
      </svg>
    </a>
</div>
<div class="table-responsive">
<table class="table table-hover text">
  <thead class="thead-dark">
    <tr>
      <th scope="col">@sortablelink('id')</th>
      <th scope="col">@sortablelink('name')</th>
      <th scope="col">@sortablelink('model')</th>
      <th scope="col">@sortablelink('description')</th>
      <th scope="col">Discount</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <form class="d-flex col my-auto" type="get" action="{{ url('/products/search') }}">
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
    <tr data-id="{{$product->id}}">
      <th scope="row"><a href="{{action('ProductController@get',$product->id)}}">{{$product->id}}</a></th>
      <td>{{$product->name}}</td>
      <td>{{$product->model}}</td>
      <td>{{$product->description}}</td>
      <td><a href="{{action('PromotionController@get',$product->promotion->id)}}">@if($product->promotion!=NULL){{$product->promotion->discount}} @else 0 @endif%</a></td>
      <td class="icon-trash" >
        <svg id="trash"  version="1.1" data-toggle="modal" data-target="#exampleModal" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="25px" height="35px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
          <g class="icon-trash">
            <rect x="67.224" width="350.535" height="71.81"/>
            <path d="M417.776,92.829H67.237V485h350.537V92.829H417.776z M165.402,431.447h-28.362V146.383h28.362V431.447z M256.689,431.447
              h-28.363V146.383h28.363V431.447z M347.97,431.447h-28.361V146.383h28.361V431.447z"/>
          </g>
        </svg>
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  ¿are you sure you want to delete this object?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form class="d-flex col my-auto" type="get" action="{{action('ProductController@delete', $product->id)}}">
                  <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
              </div>
            </div>
          </div>
        </div>-->
      </td>
      <td>
          <a href="{{action('ProductController@update',$product->id)}}">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="30px" height="40x" viewBox="0 0 100 100">
            <path d="M77.926,94.924H8.217C6.441,94.924,5,93.484,5,91.706V21.997c0-1.777,1.441-3.217,3.217-3.217h34.854 c1.777,0,3.217,1.441,3.217,3.217s-1.441,3.217-3.217,3.217H11.435v63.275h63.274V56.851c0-1.777,1.441-3.217,3.217-3.217 c1.777,0,3.217,1.441,3.217,3.217v34.855C81.144,93.484,79.703,94.924,77.926,94.924z"/>
            <path d="M94.059,16.034L84.032,6.017c-1.255-1.255-3.292-1.255-4.547,0l-9.062,9.073L35.396,50.116 c-0.29,0.29-0.525,0.633-0.686,1.008l-7.496,17.513c-0.526,1.212-0.247,2.617,0.676,3.539c0.622,0.622,1.437,0.944,2.274,0.944 c0.429,0,0.858-0.086,1.276-0.257l17.513-7.496c0.375-0.161,0.719-0.397,1.008-0.686l35.026-35.026l9.073-9.062 C95.314,19.326,95.314,17.289,94.059,16.034z M36.286,63.79l2.928-6.821l3.893,3.893L36.286,63.79z M46.925,58.621l-5.469-5.469 L73.007,21.6l5.47,5.469L46.925,58.621z M81.511,24.034l-5.469-5.469l5.716-5.716l5.469,5.459L81.511,24.034z"/>
           </svg>
          </a>
      </td>  
    </tr>
    @endforeach
  </tbody>
</table>
</div>
{{$products->appends(request()->except(['page','_token']))->links()}}
@endsection