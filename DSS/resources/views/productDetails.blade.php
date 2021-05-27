@extends('layouts.user')
@section('title','Home Page')
@section('content')

<!--

            string('name');
            float('price');
            float('promotionPrice');
            string('description');
            integer('stock');
            string('color');
            string('model');
            $table->string('image');
            $table->string('type')->nullable();

-->
<!--Section: Block Content-->
<section class="mb-5">

  <div class="row">
    <div class="col-md-6 mb-4 mb-md-0">

      <div id="mdb-lightbox-ui"></div>

      <div class="mdb-lightbox">

        <div class="row product-gallery mx-1">

          <div class="col-12 mb-0">
            <figure class="view overlay rounded z-depth-1 main-img">
              <a data-size="710x823">
                <img src="{{ URL::asset($product->image) }}"
                  class="img-fluid z-depth-1"> <!--AQUI IRIA LA IMAGEN DEL PRODUCTO-->
              </a>
            </figure>
            
          </div>
          
        </div>

      </div>

    </div>
    <div class="col-md-6">

      <h5>{{$product->name}}</h5>
      <p class="mb-2 text-muted text-uppercase small">{{$product->type}}</p>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
      <h3><span class="mr-1"><strong>{{$product->price}}$</strong></span></h3>
      <p class="pt-1">{{$product->description}}</p>
      <div class="table-responsive">
        <table class="table table-sm table-borderless mb-0">
          <tbody>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
              <td>{{$product->model}}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
              <td>{{$product->color}}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Stock</strong></th>
              <td>{{$product->stock}}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>In promotion</strong></th>
              <td>
                @if($product->promotion != null) {{$product->promotion->discount}}%
                @else ESTE PRODUCTO NO TIENE DESCUENTOS ACTUALMENTE
                @endif
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
      <div class="table-responsive mb-2">
        <table class="table table-sm table-borderless">
          <tbody>
            <tr>
              <td class="pl-0 pb-0 w-25">Quantity</td>
            </tr>
            <tr>
              <td class="pl-0">
                <div class="def-number-input number-input safari_only mb-0">
                  <input class="quantity" min="0" name="quantity" value="0" type="number">
                  
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
      <button data-id="{{$product->id}}"type="button" class="btn btn-light btn-md mr-1 mb-2"><i
          class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
    </div>
  </div>

</section>
<!--Section: Block Content-->


@endsection
@section('scripts')
<script>
$(document).ready(function () {
    $('button.btn-light').click(function() {
        let id = $(this).data('id');
        if(confirm("¿Are you sure you want to add to the cart?"))
        window.location.replace("http://localhost:8000/addToCart/" +id + "/quantity/" + $("input[value]").val());
    })
});
</script>
@endsection