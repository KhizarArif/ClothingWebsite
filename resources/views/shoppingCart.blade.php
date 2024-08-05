<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
</head>

<body>
    <div>
        <header>
            <h1>Shopping Cart</h1>
            <nav>
                <a href="#">Home</a> &gt;
                <a href="#">Your Shopping Cart</a>
            </nav>
        </header>
        <table class="container">
            <thead>
                <tr>
                    <th colspan="2">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="product_body">
                    <td colspan="2">
                        <img src="mens-printed-sweatshirt.jpg" alt="">
                        <div class="product-info">
                            <p>Mens Printed Sweatshirt MPRIN118 - Black</p>
                            <p>Size: Small</p>
                            <a href="#" class="remove">Remove</a>
                        </div>
                    </td>
                    <td>Rs.1,599.00</td>
                    <td>
                        {{-- <button class="quantity-btn">-</button>
                        <input type="number" value="2" min="1">
                        <button class="quantity-btn">+</button> --}}
                        <div class="quantity_body">
                            <button class="btn btn-outline-dark border border-none" type="button"
                                id="decrement-btn">-</button>
                            <input type="text" class="quantity_input" id="quantity-input" value="1">
                            <button class="btn btn-outline-dark border border-none" type="button"
                                id="increment-btn">+</button>
                        </div>
                    </td>
                    <td>Rs.3,198.00</td>
                </tr>
            </tbody>
        </table>
        <div class="cart-summary">
            <div class="note-shipping">
                <a href="#" class="note">Note</a>
                <a href="#" class="shipping">Shipping</a>
            </div>
            <div class="subtotal">
                <p>Subtotal</p>
                <p>Rs.3,198.00</p>
            </div>
            <p class="tax-shipping">Taxes and shipping calculated at checkout</p>
            <button class="checkout-btn">Check Out</button>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to handle quantity increment and decrement
        document.getElementById('increment-btn').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity-input');
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });

        document.getElementById('decrement-btn').addEventListener('click', function() {
            let quantityInput = document.getElementById('quantity-input');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });
    </script>
</body>

</html>
