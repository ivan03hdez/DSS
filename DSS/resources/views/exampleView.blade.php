@extends('layouts.admin')


@section('sidebar')
   @parent  
@endsection

@section('search')
   @parent  
   <div class="col-2-sm admin-outer-container" > 
   <form class="d-flex col my-auto" type="get" action="{{ url('/search') }}">
                      <input class="form-control form-control-lg me-2" name="search-query" type="search">
                      <button class="btn btn-outline-success button-search btn-lg" type="submit">Search</button>
                  </form>
                  </div>
@endsection


