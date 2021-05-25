@extends('layouts.user')
@section('title','Productos por categoria')
@section('content')
<h1>{{$products->first()->type}}</h1>
    <div class="flex-container">
        <div style="margin-left: 0px;">
            <p>name</p>
            <input id="search" placeholder="Search name">
        </div>

        <div >
            <p>price</p>
            <select id="price">
                <option value="30">0-30</option>
                <option value="100">30-100</option>
                <option value="200">+100</option>
            </select>
        </div>
    </div>
    <div  id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel"> <!-- Wrapper for slides -->
        <div  class="carousel-inner">
            <div class="caroussel-item active">
                <div class="row">
                @foreach($products as $product)
                        <div data-type ="{{$product->type}}" data-price="{{$product->price}}" data-name="{{$product->name}}" class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{ URL::asset($product->image) }}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5> {{$product->name}} </h5>
                                            <h5 class="price-text-color"> ${{$product->price}} </h5>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
$(document).ready(function(){
    $("select").change(function(){filtroMultiple();});
    $("#search").on("keyup", function() {///input con el que filtramos
      filtroMultiple();
    });
    var filtroMultiple = function () {
      var value = $("#search").val().toLowerCase(); 
      $(selector()).each(function() {
        return $(this).toggle(condiciones(value,this));
      })
    }
    var condiciones = function(name,element){
      var nameFilter = () => name === undefined || name === "" || $(element).data('name').toLowerCase().indexOf(name) > -1;
      var priceFilter = () => $(element).data('price') <= select()['price'];
      return nameFilter() && typeFilter() && priceFilter(); 
    };
    var select = function() {
      return  {
        price: $("#price").val()
      };
    }
    var selector= function(){
      var sel;
      select()['price'] == null ?  (select['price']= 10000.0) : false;
      sel = "div.col-sm-3";
      return sel;
    }
  });
</script>
@endsection