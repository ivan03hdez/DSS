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
  @if(strcmp($user->address, '') == 0 || strcmp($user->phone, '') == 0 || strcmp($user->image, '') == 0)
  <hr class="my-4">
  
    <div class="row g-5">
      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Datos aún no proporcionados</h4>
        
        <form class="needs-validation" action ="{{ action('UserController@addData') }}" novalidate="">
        @csrf
          <div class="row g-3">
          @if(strcmp($user->address, '') == 0)
            <div class="col-sm-6">
              <label for="address-myaccount" class="form-label">Dirección Postal</label>
              <input type="text" class="form-control" name="address-myaccount" >
              
            </div>
          @endif
          @if(strcmp($user->phone, '') == 0)
            <div class="col-sm-6">
              <label for="phone-myaccount" class="form-label">Número de teléfono</label>
              <input type="text" class="form-control" name="phone-myaccount" >
              
            </div>
          @endif
          @if(strcmp($user->image, '') == 0)
            <div class="col-12">
              <label for="image-myaccount" class="form-label">Imagen</label>
              <input type="text" class="form-control" name="image-myaccount" >
              
              </div>
            </div>
          @endif

            
          </div>

        
          <div class="col-12 text-center">
          
          </div>
          <div class="col-12 text-center">
          <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Subir datos</button>
          </div>
        </form>
      </div>
    </div>
  @endif
  <div class="row g-5 justify-content-center">
    <div class="col-8 text-center ">
      <hr class="my-4">
      
      <form class="needs-validation" action="{{action('UserController@editData')}}" novalidate="">
        <button class="w-100 btn btn-primary btn-lg"  type="submit">Editar información</button>
      </form>
    </div>
    </div>

</div >    
@endsection
@section('scripts')
@endsection
