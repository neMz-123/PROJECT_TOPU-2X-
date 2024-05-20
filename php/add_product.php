<?php
include('db_init.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_description = isset($_POST['product_description']) ? $_POST['product_description'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $uploaded_at = date("Y-m-d H:i:s"); // Assuming you want to insert the current date/time
    $image = "";

    if (isset($_FILES["image"])) { // Check if image is set
        if ($_FILES["image"]["error"] == 0) { // Check if there is no upload error
            // File upload logic
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = pathinfo($fileName, PATHINFO_EXTENSION); // Get file extension
            $imageExtension = strtolower($imageExtension);

            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid Image Extension');</script>";
            } else if ($fileSize > 1000000) {
                echo "<script>alert('Image Size Is Too Large');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                $imageDir = 'product_images/'; // Make sure this directory exists
                $imagePath = $imageDir . $newImageName;
                if (move_uploaded_file($tmpName, $imagePath)) {
                    $image = $newImageName;
                } else {
                    echo "<script>alert('Error uploading image');</script>";
                }
            }
        }
    }


    // Check for duplicates
    $check_sql = "SELECT COUNT(*) AS count FROM tbl_products WHERE product_name = ? AND price = ?";
    $check_stmt = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($check_stmt, "ss", $product_name, $price);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_bind_result($check_stmt, $count);
    mysqli_stmt_fetch($check_stmt);
    mysqli_stmt_close($check_stmt);

    if ($count > 0) {
        // Duplicate found, return error message
        $response = array('success' => false, 'message' => "product '$name' already exists");
    } else {
        // Database Insertion 
        $insert_sql = "INSERT INTO tbl_products (product_name , product_description, price , image_url ,  created_at ) 
    VALUES (?, ?, ?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_sql);
        mysqli_stmt_bind_param($insert_stmt, "ssiss", $product_name, $product_description, $price, $image, $uploaded_at);

        if (mysqli_stmt_execute($insert_stmt)) {
            $response = array('success' => true, 'message' => "Product '$product_name' added");
        } else {
            $response = array('success' => false, 'message' => mysqli_error($conn));
        }

        // Close the statement
        mysqli_stmt_close($insert_stmt);
    }

    // Send response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
