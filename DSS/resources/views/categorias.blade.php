@extends('layouts.user')
@section('title','Productos por categoria')
@section('content')
<h1 style="text-align:center;">Listado de {{$products->first()->type}}</h1>
    <div class="flex-container">
        <div style="margin-left: 0px;">
            <h3>Name</h3>
            <input id="searchCategory" placeholder="Search name">
        </div>

        <div >
            <h3>Price</h3>
            <select id="priceCategory">
                <option value="200">Sin limite</option>
                <option value="60">0-60</option>
                <option value="30">0-30</option>
               
                
            </select>
        </div>
        <div >
            <h3>Sort Descendent By</h3>
            <label><input id="sortByPrice" type="checkbox" value="price">Price</label><br>
            <label><input id="sortByName" type="checkbox" value="name">Name</label>
        </div>
    </div>
    <div  id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel"> <!-- Wrapper for slides -->
        <div  class="carousel-inner">
            <div class="caroussel-item active">
                <div class="row">
                @foreach($products as $product)
                        <div data-price="{{$product->price}}" data-name="{{$product->name}}" class="col-sm-3">
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
    $("#searchCategory").on("keyup", function() {///input con el que filtramos
      filtroMultiple();
    });
    var filtroMultiple = function () {
      var value = $("#searchCategory").val().toLowerCase();
      console.log($(selector)); 
      $(selector()).each(function() {
        return $(this).toggle(condiciones(value,this));
      })
    }
    var condiciones = function(name,element){
      var nameFilter = () => name === undefined || name === "" || $(element).data('name').toLowerCase().indexOf(name) > -1;
      var priceFilter = () => $(element).data('price') <= select()['price'];
      console.log(element);
      console.log("name:" +name + nameFilter() + " price:" + select()['price'] + priceFilter());
      return nameFilter() && priceFilter(); 
    };
    var select = function() {
      return  {
        price: $("#priceCategory").val()
      };
    }
    var selector= function(){
      var sel;
      select()['price'] == null ?  (select['price']= 10000.0) : false;
      sel = "[data-price]";
      return sel;
    }
  });
  //SortBy with Jquery
  /*$(document).ready(function(){
    $("input#sortByPrice[type='checkbox']").change(function(){
        var select = {
            price : $("input[type='checkbox']").val(),
            name : $("input[type='checkbox']").val()
        };
        var divsSorted;
        var divs = $("[data-price]");
        if(select['price'] === 'price'){
            divsSorted = $("[data-price]").sort(function(a,b){
                if($(a).data('price') < $(b).data('price')){
                    return 1
                }
                else {
                    return -1;
                }
            });
        }
        else{
            divsSorted = $("[data-price]").sort(function(a,b){
                if($(a).data('price') > $(b).data('price')){
                    return 1
                }
                else {
                    return -1;
                }
            });
        }
        console.log(divsSorted);
        divs.each(function(elem){
            elem.remove;
        });
        $(".row").appendTo(divsSorted);

    });
  });*/
</script>
@endsection