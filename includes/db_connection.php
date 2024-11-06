<?php
    $conn = new mysqli('localhost', 'root', '', 'coffeeshopdb');
    echo $conn->connect_error ? 'Connection failed: ' . $conn->connect_error : 'Connected Successfully';
?>