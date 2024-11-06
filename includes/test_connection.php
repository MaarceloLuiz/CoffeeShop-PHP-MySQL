<?php
include '../includes/db_connection.php';

// Test query
$sql = "SELECT * FROM CartItems LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"] . " - ProductName: " . $row["ProductName"] . "<br>";
    }
} else {
    echo "0 results for CartItems";
}

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"] . " - Name: " . $row["Name"] . " - Email: " . $row["Email"] . "<br>";
    }
} else {
    echo "0 results for ContactMessage"; 
}

$conn->close();
?>
