
@extends('frontend.layouts.app')

@section('content')


    <section class="mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mens</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mens Printed APL Hoodie GRMPR28 - White</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Product Image Section -->
            <div class="col-md-6 text-center">
                <div class="product-images mb-4">

                    <div class="d-inline-flex flex-column justify-content-start mt-0">
                        <img src="https://via.placeholder.com/60" alt="Thumbnail 1" class="thumbnail">
                        <img src="https://via.placeholder.com/60" alt="Thumbnail 2" class="thumbnail">
                        <img src="https://via.placeholder.com/60" alt="Thumbnail 3" class="thumbnail">
                        <img src="https://via.placeholder.com/60" alt="Thumbnail 4" class="thumbnail">
                    </div>
                    <img src="https://via.placeholder.com/400" alt="Main Product Image" class="img-fluid mb-4">
                </div>
            </div>
            <!-- Product Details Section -->
            <div class="col-md-6">
                <div class="product-details">
                    <h3>Mens Printed APL Hoodie GRMPR28 - White</h3>
                    <p class="price">
                        Rs. 1,799.00
                        <span class="old-price">Rs. 2,699.00</span>
                        <span class="discount">SAVE 33%</span>
                    </p>
                    <p>This hoodie is made of fleece.</p>
                    <a href="#" class="text-dark text-decoration-none">View details</a>

                    <div class="mt-4">
                        <p>Size:</p>
                        <div class="btn-group btn-group-toggle size-options" data-toggle="buttons">
                            <label class="btn btn-outline-dark active">
                                <input type="radio" name="size" autocomplete="off" checked> Small
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" autocomplete="off"> Medium
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" autocomplete="off"> Large
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" autocomplete="off"> X-Large
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 d-flex align-items-end justify-content-between">
                        <div class="col-md-3 p-0">
                            <p>Quantity</p>
                            <div class="input-group quantity">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-dark" type="button" id="decrement-btn">-</button>
                                </div>
                                <input type="text" class="form-control" id="quantity-input" value="1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark" type="button" id="increment-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark col-md-8">Add to cart</button>
                    </div>

                    <div class="action-buttons mt-4">
                        <button class="btn btn-dark">Buy it now</button>
                    </div>

                    <div class="additional-actions mt-4">
                        <a href="#"><i class="fas fa-exchange-alt"></i> Compare</a>
                        <a href="#"><i class="far fa-question-circle"></i> Ask a question</a>
                        <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
