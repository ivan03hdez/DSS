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
            <a data-toggle="collapse" href="#collapse{{$loop->index}}">{{$fl->name}}</a>
            </h4>
         </div>
         <div id="collapse{{$loop->index}}" class="panel-collapse collapse">
            <ul class="list-group">
               @foreach($fl->products as $p)
            <li class="list-group-item">{{$p->name}}</li>
               @endforeach

            <form action="{{ action('UserController@addP2FL') }}">
            <a data-toggle="collapse" href="#col{{$loop->index}}" class="list-group-item list-group-item-info">Add product to favorite list</a>
            <div id="col{{$loop->index}}" class="panel-collapse collapse">
               <ul class="list-group">
                  <div class="col-12" >
                     <label for="prod-fl" class="form-label">Name of the product that you want to add to {{$fl->name}}</label>
                     <input type="text" class="form-control list-group-item" name="prod-fl" value="">
                     <input id="role" type="role" class="form-control d-none" name="id-fl" value="{{$fl->id}}">
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
</div >    
@endsection
@section('scripts')
@endsection
