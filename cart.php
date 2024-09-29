<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = $_POST['product_id'];

// Adding product to the cart
if (isset($product_id)) {
    $_SESSION['cart'][] = $product_id;
}

header('Location: cart_view.php'); // Redirect to view cart
?>
