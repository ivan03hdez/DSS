@extends('layouts.admin')
@section('title','pagina con todas las listas de favoritos')
@section('content')
<div class="row add">
  <h1>Listas de Favoritos</h1>
        <svg height="45px" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
          <path d="m256 512c-141.164062 0-256-114.835938-256-256s114.835938-256 256-256 256 114.835938 256 256-114.835938 256-256 256zm0-480c-123.519531 0-224 100.480469-224 224s100.480469 224 224 224 224-100.480469 224-224-100.480469-224-224-224zm0 0"/><path d="m368 272h-224c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h224c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m256 384c-8.832031 0-16-7.167969-16-16v-224c0-8.832031 7.167969-16 16-16s16 7.167969 16 16v224c0 8.832031-7.167969 16-16 16zm0 0"/>
        </svg>
</div>
  @if($favoriteLists->count()==0) Este usuario no ha creado ninguna lista de favoritos.
  @else
  <div class="table-responsive">
    <table class="table table-hover text">
      <thead style="widht:100%" class="thead-dark">
        <tr>
          <th scope="col">@sortablelink('id')</th>
          <th scope="col">@sortablelink('name')</th>
          <th scope="col">@sortablelink('description')</th>
          <th scope="col">@sortablelink('user_id','User')</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($favoriteLists as $favoriteList)
        <tr>
          <th scope="row"><a href="{{action('FavoriteListController@get',$favoriteList->id)}}">{{$favoriteList->id}}</a></th>
          <td>{{$favoriteList->name}}</td>
          <td>{{$favoriteList->description}}</td>
          <td><a href="{{action('UserController@get',$favoriteList->user->id)}}">{{$favoriteList->user->name}}</a></td>
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
<div class="span9">{{$favoriteLists->appends(request()->except(['page','_token']))->links()}}</div>
@endif
@endsection
@section('search')
   @parent  
   <div class="col-2-sm admin-outer-container" > 
   <form class="d-flex col my-auto" type="get" action="{{ url('/searchFL') }}">
                      <input class="form-control form-control-lg me-2" name="search-query" type="search">
                      <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
                  </form>
                  </div>
@endsection