<?php
include 'db_init.php';

$response = array();

try {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM tbl_products WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Product deleted successfully.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error deleting product: ' . $stmt->error;
        }

        $stmt->close();
    } else {
        $response['success'] = false;
        $response['message'] = 'Product ID is missing.';
    }
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = 'Error: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
