@extends('layouts.user')
@section('title','Home Page')
@section('content')
<!-- AÑADIDO 2 -->
<h1 class="card-title">Auriculares</h1>
<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'Auriculares') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic1" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'Auriculares') == 0)
                        <div class="item {{ $loop->index == 20 ? ' active' : '' }} item-home" style="background-color:grey;"  >
                            <img src="{{ URL::asset($p->image) }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a data-id="{{$p->id}}" class="btn btn-primary btn" id="btn-home-buy">Buy</a>
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
<h1 class="card-title">Cascos</h1>
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'Cascos') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic2" data-slide-to="{{ $loop->index  }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'Cascos') == 0)
                        <div class="item {{ $loop->index == 10 ? ' active' : '' }} item-home" style="background-color:grey;"  >
                            <img src="{{ URL::asset($p->image) }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home" >
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a data-id="{{$p->id}}" class="btn btn-primary btn" id="btn-home-buy">Buy</a>
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
<h1 class="card-title">Altavoces</h1>
<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'Altavoz') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic3" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'Altavoz') == 0)
                        <div class="item {{ $loop->index == 0 ? ' active' : '' }} item-home" style="background-color:grey;"  >
                            <img src="{{ URL::asset($p->image) }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a data-id="{{$p->id}}" class="btn btn-primary btn" id="btn-home-buy">Buy</a>
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
<h1 class="card-title">Microfonos</h1>
<div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $products as $p )
                      @if (strcmp($p->type, 'Microfono') == 0)
                        <li style="background-color:red;" data-target="#carousel-example-generic4" data-slide-to="{{ $loop->index }}" class="active"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center" role="listbox">
                    @foreach( $products as $p )
                    @if (strcmp($p->type, 'Microfono') == 0)
                        <div class="item {{ $loop->index == 30 ? ' active' : '' }} item-home" style="background-color:grey;"  >
                            <img src="{{ URL::asset($p->image) }}" alt="{{ $p->name }}" class="rounded mx-auto d-block img-carousel-home">
                            <div class="card-body" >
                                  <h4 class="card-title">{{ $p->name }}</h4>
                                  <p class="card-text">{{ $p->description }}</p>
                                  <a data-id="{{$p->id}}" class="btn btn-primary btn" id="btn-home-buy">Buy</a>
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
