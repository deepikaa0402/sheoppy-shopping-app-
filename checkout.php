<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the checkout process (shipping and payment)
    $shipping_address = $_POST['shipping_address'];
    $payment_method = $_POST['payment_method'];

    // Process order (e.g., save to database)
    // ...

    echo "Thank you for your order!";
    session_destroy(); // Clear the cart
} else {
    echo "
    <h1>Checkout</h1>
    <form method='post'>
        Shipping Address: <input type='text' name='shipping_address' required><br>
        Payment Method: 
        <select name='payment_method'>
            <option value='Credit Card'>Credit Card</option>
            <option value='PayPal'>PayPal</option>
        </select><br>
        <button type='submit'>Place Order</button>
    </form>";
}
?>
