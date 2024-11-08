<?php
    $conn = new mysqli('localhost', 'root', '', 'coffeeshopdb');
    // echo $conn->connect_error ? 'Connection failed: ' . $conn->connect_error : 'Connected Successfully';
    echo $conn->connect_error ? 'Connection failed: ' . $conn->connect_error : ''; //deleting the connected message so it won't show up on your page
?>