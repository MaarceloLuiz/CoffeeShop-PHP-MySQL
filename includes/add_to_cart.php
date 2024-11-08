<?php
include 'includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    // using our stored procedure
    $sql = "CALL procInsertCartItem('$productName', $productPrice)";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: cart.php#classTable");
        exit;

    } else {
        echo "" . $conn->error;
    }
}
?>
