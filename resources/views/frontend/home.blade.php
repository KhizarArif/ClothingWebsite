@extends('frontend.layouts.app')

@section('content')

<section id="product-cards">

    <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 g-4" id="product-list">
            @if ($products != null)

            @foreach ($products as $product )

            <div class="col-md-3 col-sm-6 col-xs-12 filter-item all new">
                <div class="card">
                    <div class="img-container position-relative">
                        @if ($product->productImages != null)
                        <a href="{{ route('frontend.productDetails',[$product->subCategories->slug , $product->slug]) }}">
                            <img src="{{asset('frontend_assets/image/products/'.$product->productImages->first()->image)}}" class="card-img-top shop-item-image" alt="{{$product->title}}">
                        </a>
                        @endif
                        <a href="{{ route('frontend.productDetails',[$product->subCategories->slug , $product->slug]) }}">
                            <div class="overlay">
                                <button class="btn btn-info select-options">Select Options</button>

                                <div class="icons">
                                    <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"></i>
                                    <i class="fa fa-exchange-alt" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                    <i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Quick View"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title shop-item-title">{{$product->title}}</h5>
                        <p class="card-text shop-item-price w-100 d-flex justify-content-between">
                            <span class="original-price">Rs. {{$product->original_price}} PKR</span>
                            <span class="discounted-price">Rs. {{$product->price}} PKR</span>
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
        </div>
    </div>


</section>


@endsection