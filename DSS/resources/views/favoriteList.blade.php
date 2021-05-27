@extends('layouts.user')
@section('title','Home Page')
@section('content')

<!-- 
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();  
-->
   
<div class="container">
<hr class="my-4">
   <div class="panel-group">
      <div class="panel panel-default">
      @if($favlist->count() > 0)
         
         <h2> Current favorite lists of the user {{$user->name}} </h2>
         
      @endif
      @foreach ($favlist as $fl)
         
         <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse{{$loop->index}}">{{$fl->name}}: {{$fl->description}}</a>
            <form from="" action="{{ action('UserController@deleteFL') }}">
            <button type="submit" id="" class="btn btn-outline-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                        </svg>
                  
               </button>
               <input id="id" type="id" class="form-control d-none" name="id-fl" value="{{$fl->id}}">
            </form>



            
               <!--<span class="glyphicon glyphicon-pencil"></span> -->
            



            </h4>
         </div>
         <div id="collapse{{$loop->index}}" class="panel-collapse collapse">
            <ul class="list-group ">
               @foreach($fl->products as $p)
            <form from="" action="{{ action('UserController@deleteP2FL') }}">
            
            <li class="list-group-item d-inline borderless">{{$p->name}}
            
               <li class="d-inline">
                  <button type="submit" id="" class="btn btn-outline-danger d-inline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                              </svg>
                        
                     </button></li>
                     <input id="id" type="id" class="form-control d-none" name="id-fl" value="{{$fl->id}}">
                     <input id="idP" type="idP" class="form-control d-none" name="idP-fl" value="{{$p->id}}">
               
            
            </li>
            
            </form>
               @endforeach

            <form action="{{ action('UserController@addP2FL') }}">
            <a data-toggle="collapse" href="#col{{$loop->index}}" class="list-group-item list-group-item-info">Add product to favorite list</a>
            <div id="col{{$loop->index}}" class="panel-collapse collapse">
               <ul class="list-group">
                  <div class="col-12" >
                     <label for="prod-fl" class="form-label">Name of the product that you want to add to {{$fl->name}}</label>
                     <input type="text" class="form-control list-group-item" name="prod-fl" value="">
                     <input id="id" type="id" class="form-control d-none" name="id-fl" value="{{$fl->id}}">
                     <button class=" btn btn-primary btn-lg"  type="submit">Submit</button>
                  </div>
                  

               </ul>
               
            </div>
            </form>
         </div>
         @endforeach      
      </div>
   </div>

   <hr class="my-4">
   
   <form action ="{{ action('UserController@createFL') }}">
   <div class="panel-group">
      <div class="panel panel-default">

         
          

         
         <div class="panel-heading">
            <h4 class="panel-title">
            <a><h2 data-toggle="collapse" href="#collapseA">Create favorite list </h2></a>
            </h4>
         </div>
         <div id="collapseA" class="panel-collapse collapse">
            <ul class="list-group">
               
               <div class="col-12">
                  <label for="name-fl" class="form-label">Favorite list name</label>
                  <input type="text" class="form-control list-group-item" name="name-fl" value="" >
               </div>

               <div class="col-12">
                  <label for="description-fl" class="form-label">Favorite list description</label>
                  <input type="text" class="form-control list-group-item" name="description-fl" value="">
               </div>
               <div class="col-12">
                  <button class=" btn btn-primary btn-lg"  type="submit">Submit</button>
               </div>
            </ul>
            
         </div>
         
      </div>
   </div>
   </form>

   <hr class="my-4">
      <form action ="{{ action('UserController@updateFLUser') }}">
      <div class="panel-group">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h4 class="panel-title">
               <a><h2 data-toggle="collapse" href="#collapseB">Edit favorite list </h2></a>
               </h4>
            </div>
            <div id="collapseB" class="panel-collapse collapse">
               <ul class="list-group">
               <li class="list-group-item d-inline borderless">
               <div class="col-12">
                  <select name="selectFL" class="form-select" aria-label="Default select example">
                     <option selected>Select menu</option>
                     @foreach ($favlist as $fl)
                        <option value="{{$fl->id}}">{{$fl->name}}</option>
                     @endforeach
                  </select>
               </div>
               </li>
                  <div class="col-12">
                     <label for="name-fl" class="form-label">New favorite list name</label>
                     <input type="text" class="form-control list-group-item" name="name-fl" value="" >
                  </div>

                  <div class="col-12">
                     <label for="description-fl" class="form-label">New favorite list description</label>
                     <input type="text" class="form-control list-group-item" name="description-fl" value="">
                  </div>
                  <div class="col-12">
                     <button class=" btn btn-primary btn-lg"  type="submit">Submit</button>
                  </div>
               </ul>
               
            </div>
            
         </div>
      </div>
      </form>
   <hr class="my-4">

</div >    
@endsection
@section('scripts')
@endsection
