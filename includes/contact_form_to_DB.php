<?php
include('includes/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // checking if any field is empty to prevent the website to break
    if (empty($name) || empty($email) || empty($phoneNumber) || empty($message)) {
        $_SESSION['feedback'] = 'All fields are required. Please fill out every field to contact us.';

        header("Location: contact.php#contact-box");
        exit;
    }

    $sql = "INSERT INTO contactmessage (Name, Email, PhoneNumber, Message) VALUES (?, ?, ?, ?)";
    $statement = $conn->prepare($sql);

    if ($statement) {
        $statement->bind_param("ssss", $name, $email, $phoneNumber, $message);

        if ($statement->execute()) {
            $_SESSION['feedback'] = 'Thanks for getting in touch!';
        } else {
            $_SESSION['feedback'] = 'Error: Could not process your request at this time.';
        }

        $statement->close();
    } else {
        $_SESSION['feedback'] = 'Error preparing statement: ' . $conn->error;
    }

    $conn->close();

    header("Location: contact.php#contact-box");
    exit;
}
?>