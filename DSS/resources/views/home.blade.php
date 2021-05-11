@extends('layouts.user')
@section('title','Home Page')
@section('content')
<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel"> <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
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
@endsection
@section('scripts')
@endsection
