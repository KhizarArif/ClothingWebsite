@extends('frontend.layouts.app')

@section('content')


<section class="container">
    <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mens</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mens Printed APL Hoodie GRMPR28 - White</li>
            </ol>
        </nav> -->
    @if ($products != null)
    @foreach ($products as $product)
    <form class="row" id="addToCartForm">
        @csrf
            <!-- Product Image Section -->
            @if ($product->productImages->count() > 0)
            <div class="col-md-6 ">
                <div class="product-images mb-4 ">
                    <div class="thumbnail  mt-0">
                        @foreach ($product->productImages as $productImage )
                        <img src="{{ asset('frontend_assets/image/products/'.$productImage->image) }}" alt="Thumbnail " title="{{$productImage->image}}" class="thumbnail_image" onclick="swapImage('{{ asset('frontend_assets/image/products/'.$productImage->image) }}')">
                        @endforeach
                    </div>
                    <img src="{{ asset('frontend_assets/image/products/'.$productImage->image) }}" id="mainImage" alt="Main Product Image" name="product_image" class="img-fluid mb-4" title="{{$productImage->image}}">
                </div>
            </div>
            @endif

            <!-- Product Details Section -->
            <div class="col-md-6">
                <div class="product-details">
                    <h3 name="title" value="{{ $product->title}}"> {{ $product->title}} </h3>
                    <input type="hidden" name="$product->title" value="{{ $product->title}}" >
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="d-flex">
                        <h5 class="price" name="price"> Rs. {{ $product->price}} </h5>
                        <h6 class="original_price" name="original_price">Rs. {{ $product->original_price}} </h6>
                    </div>

                    <div class="mt-4">
                        <p>Size:</p>
                        <div class="btn-group btn-group-toggle size-options" data-toggle="buttons">
                            <label class="btn btn-outline-dark active">
                                <input type="radio" name="size" value="small" autocomplete="off" checked> Small
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" value="medium" autocomplete="off"> Medium
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" value="large" autocomplete="off"> Large
                            </label>
                            <label class="btn btn-outline-dark">
                                <input type="radio" name="size" value="x-large" autocomplete="off"> X-Large
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 d-flex align-items-end justify-content-between">
                        <div class="col-md-3 p-0">
                            <p>Quantity</p>
                            <div class="input-group quantity border border-dark rounded">

                                <button class="btn btn-outline-dark border border-none  btn-bold" type="button" id="decrement-btn">-</button>

                                <input type="text" class="form-control" id="quantity-input" name="quantity" value="1">

                                <button class="btn btn-outline-dark border border-none  btn-bold " type="button" id="increment-btn">+</button>

                            </div>
                        </div>
                        <button class="btn btn-outline-dark col-md-8">Add to cart</button>
                    </div>

                    <div class="action-buttons mt-4">
                        <button class="btn btn-dark w-100">Buy it now</button>
                    </div>

                    <div class="additional-actions d-flex justify-content-between mt-4">
                        <a href="#" class="text-decoration-none"><i class="fas fa-exchange-alt"></i> Compare</a>
                        <a href="#" class="text-decoration-none"><i class="far fa-question-circle"></i> Ask a question</a>
                        <a href="#" class="text-decoration-none"><i class="fas fa-share-alt"></i> Share</a>
                    </div>
                </div>
            </div>
    </form>
    @endforeach
    @endif


    <div class="description_container">
        <div class="tablinks" onclick="openCity(event, 'descriptionTab')"> Product Description </div>
        <div class="tablinks" onclick="openCity(event, 'shippingReturnTab')"> Shipping & Return </div>
    </div>

    <div id="descriptionTab" class="tabcontent" style="display: block;"> {{ $product->description}} </div>
    <div id="shippingReturnTab" class="tabcontent"> {{ $product->description}} </div>

</section>

@endsection


@section('customJs')
<script>


    // Add to Cart Form Submission
    $('#addToCartForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{ route('frontend.addToCart') }}",
            data: $(this).serialize(),
            success: function(response) {
                if (response.status == 'success') {
                    alert(response.message);
                    // window.location.reload();
                } else {
                    alert(response.message);
                }
            }
        })
    })


    // Swap Images 
    function swapImage(imagePath) {
        document.getElementById('mainImage').src = imagePath;
    }

    // Tabs
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".tablinks.active").click();
    });
</script>
@endsection