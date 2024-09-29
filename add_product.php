<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Save the product (e.g., into a database)
    // ...

    echo "Product added!";
} else {
    echo "
    <h1>Add New Product</h1>
    <form method='post'>
        Product Name: <input type='text' name='product_name' required><br>
        Product Price: <input type='text' name='product_price' required><br>
        <button type='submit'>Add Product</button>
    </form>";
}
?>
