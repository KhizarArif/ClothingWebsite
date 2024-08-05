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

@yield('customJs')

</body>

</html>