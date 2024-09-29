<?php
session_start();

// Hardcode an admin login (in a real app, use proper authentication)
$is_admin = true;

if ($is_admin) {
    echo "<h1>Admin Panel</h1>";
    echo "<a href='add_product.php'>Add Product</a><br>";
    echo "<a href='view_orders.php'>View Orders</a>";
} else {
    echo "Access denied.";
}
?>
