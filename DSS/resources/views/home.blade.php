@extends('layouts.user')


@section('title','Home Page')
@section('content')
@if(false)
<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel"> <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="caroussel-item active">
            <div class="row">
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="{{ URL::asset('images/deaf.jpeg') }}" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6">
                                    <h5>
                                        Sample Product</h5>
                                    <h5 class="price-text-color">
                                        $199.99</h5>
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
            </div>
        </div>
    </div>


</div>
@endif

<!-- AÑADIDO 2 -->
<h4 class="card-title">Auriculares</h4>
<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'auriculares') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic1" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'auriculares') == 0)
                        <div class="item {{ $loop->index == 20 ? ' active' : '' }}" style="background-color:grey;"  >
                            <img src="{{ URL::asset('images/deaf.jpeg') }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a class="btn btn-primary btn" id="btn-home-buy">Buy</a>
                                  <br>
                                  <br>
                                  <br>
                                  
                                </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- AÑADIDO 2 -->

<!-- AÑADIDO 3 -->
<h4 class="card-title">Cascos</h4>
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'cascos') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic2" data-slide-to="{{ $loop->index  }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'cascos') == 0)
                        <div class="item {{ $loop->index == 10 ? ' active' : '' }}" style="background-color:grey;"  >
                            <img src="{{ URL::asset('images/deaf.jpeg') }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home" >
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a class="btn btn-primary btn" id="btn-home-buy">Buy</a>
                                  <br>
                                  <br>
                                  <br>
                                  
                                </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- AÑADIDO 3 -->

<!-- AÑADIDO 4 -->
<h4 class="card-title">Altavoz</h4>
<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'altavoz') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic3" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'altavoz') == 0)
                        <div class="item {{ $loop->index == 0 ? ' active' : '' }}" style="background-color:grey;"  >
                            <img src="{{ URL::asset('images/deaf.jpeg') }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a class="btn btn-primary btn" id="btn-home-buy">Buy</a>
                                  <br>
                                  <br>
                                  <br>
                                  
                                </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- AÑADIDO 4 -->


<!-- AÑADIDO 4 -->
<h4 class="card-title">Microfonos</h4>
<div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'microfono') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic4" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'microfono') == 0)
                        <div class="item {{ $loop->index == 30 ? ' active' : '' }}" style="background-color:grey;"  >
                            <img src="{{ URL::asset('images/deaf.jpeg') }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a class="btn btn-primary btn" id="btn-home-buy">Buy</a>
                                  <br>
                                  <br>
                                  <br>
                                  
                                </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic4" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic4" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- AÑADIDO 4 -->


@endsection
@section('scripts')
@endsection
