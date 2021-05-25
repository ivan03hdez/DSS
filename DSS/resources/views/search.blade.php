@extends('layouts.user')
@section('title','Información de la cesta')
@section('content')
<div class="flex-container">
        <div style="margin-left: 0px;">
            <h3>Name</h3>
            <input id="search" placeholder="Search name">
        </div>

        <div >
            <h3>Product type</h3>
            <select id="type">
                <option value="Todos">Todos</option>
                <option value="Cascos">cascos</option>
                <option value="Auriculares">auriculares</option>
                <option value="Altavoz">Altavoces</option>
                <option value="Microfono">microfonos</option>
            </select>
        </div>

        <div >
            <h3>Price</h3>
            <select id="price">
                <option value="210">Sin limite</option>
                <option value="60">0-60</option>
                <option value="30">0-30</option>
            </select>
        </div>
    </div>
    <div class="flex">
        @foreach($products as $product)
        <div data-type="{{$product->type}}" data-price="{{$product->price}}" data-name="{{$product->name}}" class="center">
            <div class="property-card">
                <a href="#">
                    <div class="property-image">
                        <img src="{{ URL::asset($product->image) }}">
                        <div class="property-image-title">
                <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                        </div>
                    </div>
                </a>
                <div class="property-description">
                    <h1> {{$product->name}}</h5>
                    <h2>{{$product->price}}$</h3>
                    <h3>{{$product->description}}</h3>
                </div>
                <!-- <a href="action('ProductController@addToCart','$product->id')">-->
                <a href="#">
                    <div class="property-social-icons">
                        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection