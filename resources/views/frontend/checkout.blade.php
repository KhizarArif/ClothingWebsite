@extends('frontend.layouts.app')

@section('content')


<section class="container my-5">
    <div class="row">
        <!-- Contact and Delivery Information -->
        <div class="col-md-7">
            <h4>Contact</h4>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email or mobile phone number">
                </div>


                <h4>Delivery</h4>
                <div class="mb-3">
                    <label for="country" class="form-label">Country/Region</label>
                    <select class="form-control" id="country" placeholder>
                        <option>Pakistan</option>
                        <!-- Add more countries as needed -->
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Apartment, suite, etc. (optional)">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Postal code (optional)">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>


                <h4>Shipping method</h4>
                <div class=" shippingContainer">
                    <div>Standard Shipping </div>
                    <div class="shippingPrice"> Rs. 300.00 </div>
                </div>

                <h4>Payment</h4>
                <div class=""> All transactions are secure and encrypted. </div>
                <div class=" shippingContainer">
                    <div> Cash On Delivery (COD) </div> 
                </div>

                <button type="button" class="btn order_button">Complete order</button>

            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-5">
            <div class="border p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div class="product-info">
                        <img src="path/to/product-image.jpg" alt="Product Thumbnail">
                        <div>
                            <p>Mens Printed Sweatshirt MPRIN118 - Black</p>
                            <small>Small</small>
                        </div>
                    </div>
                    <p>Rs. 1,599.00</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>Rs. 1,599.00</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping</p>
                    <p>Rs. 300.00</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Total</p>
                    <p>Rs. 1,899.00</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection