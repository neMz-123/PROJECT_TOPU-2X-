<?php
include 'db_init.php';

if (isset($_POST['id'])) {
    $productId = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "SELECT * FROM tbl_products WHERE id = $productId";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        echo json_encode($product);
    } else {
        echo json_encode(['error' => 'Product not found']);
    }
} else {
    echo json_encode(['error' => 'Product ID not provided']);
}

mysqli_close($conn);
