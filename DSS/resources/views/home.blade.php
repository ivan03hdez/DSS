@extends('layouts.user')

@section('content')
<div class="carousel-item">
    @foreach($products as $product)
        <img src="..." alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>{{hola}}</h5>
        <p>{{hola}}</p>
        </div>
    @endforeach
</div>

<div class="carousel-item">
    @foreach($products as $product)
        <img src="..." alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>{{hola}}</h5>
        <p>{{hola}}</p>
        </div>
    @endforeach
</div>

<div class="carousel-item">
    @foreach($products as $product)
        <img src="..." alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>{{hola}}</h5>
        <p>{{hola}}</p>
        </div>
    @endforeach
</div>
@endsection
