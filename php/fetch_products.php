<?php
include 'db_init.php';

$query = "SELECT * FROM tbl_products ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th scope='row'><img src='php/product_images/{$row['image_url']}' alt=''></th>";
        echo "<td><a href='#' class='text-primary fw-bold'>{$row['product_name']}</a></td>";
        echo "<td>no data</td>";
        echo "<td class='fw-bold'>{$row['product_description']}</td>";
        echo "<td>₱ {$row['price']}</td>";
        echo "<td>";
        echo "<button class='btn btn-primary edit-product-btn' data-id='{$row['id']}'><i class='fas fa-edit'></i></button>";
        echo "&nbsp;"; // Adding space
        echo "<button class='btn btn-danger delete-product-btn' data-id='{$row['id']}'><i class='fas fa-trash-alt'></i></button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No products found</td></tr>";
}

mysqli_close($conn);
