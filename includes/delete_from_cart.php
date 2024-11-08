<?php
include 'db_connection.php';

if (isset($_POST['delete_id'])) {
    $productId = $_POST['delete_id'];

    // using our stored procedure
    $sql = "CALL procDeleteCartItem($productId)";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: cart.php#classTable");
        exit;
    } else {
        echo "" . $conn->error;
    }
} else {
    echo "";
}
