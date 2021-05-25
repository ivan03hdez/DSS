@extends('layouts.user')
@section('title','Información de la cesta')
@section('content')
    <h1>Searcher</h1>

    <div class="flex-container">
        <div style="margin-left: 0px;">
            <p>name</p>
            <input id="search" placeholder="Search name">
        </div>

        <div >
            <p>Poduct type</p>
            <select id="type">
                <option value="cascos">cascos</option>
                <option value="auriculares">auriculares</option>
                <option value="altavoz">Altavoces</option>
                <option value="microfono">microfonos</option>
            </select>
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
                        <div1 data-price="{{$product->price}}" data-name="{{$product->name}}" class="col-sm-3">
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