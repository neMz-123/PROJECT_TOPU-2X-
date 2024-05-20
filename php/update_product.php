<?php
include 'db_init.php';

$response = array();

try {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $price = $_POST['price'];

        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $image = $_FILES['image']['name'];
            $target_dir = "product_images/";
            $target_file = $target_dir . basename($image);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $allowed_extensions = array("jpg", "jpeg", "png");
            if (!in_array($imageFileType, $allowed_extensions)) {
                $response['success'] = false;
                $response['message'] = 'Only JPG, JPEG, and PNG files are allowed.';
                echo json_encode($response);
                exit();
            }

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $response['success'] = false;
                $response['message'] = 'There was an error uploading the file.';
                echo json_encode($response);
                exit();
            }

            $stmt = $conn->prepare("UPDATE tbl_products SET product_name = ?, product_description = ?, price = ?, image_url = ? WHERE id = ?");
            $stmt->bind_param("ssdsi", $product_name, $product_description, $price, $image, $id);
        } else {
            $stmt = $conn->prepare("UPDATE tbl_products SET product_name = ?, product_description = ?, price = ? WHERE id = ?");
            $stmt->bind_param("ssdi", $product_name, $product_description, $price, $id);
        }

        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Product updated successfully.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error updating product: ' . $stmt->error;
        }

        $stmt->close();
    } else {
        $response['success'] = false;
        $response['message'] = 'Product ID is missing.';
    }
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = 'Error: dito' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
