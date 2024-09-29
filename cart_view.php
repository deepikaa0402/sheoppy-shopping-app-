<?php
session_start();

echo "<h1>Your Cart</h1>";
if (empty($_SESSION['cart'])) {
    echo "Your cart is empty.";
} else {
    foreach ($_SESSION['cart'] as $product_id) {
        // Fetch and display product details using $product_id
        echo "Product ID: " . $product_id . "<br>";
    }
}

echo "<a href='checkout.php'>Proceed to Checkout</a>";
?>
