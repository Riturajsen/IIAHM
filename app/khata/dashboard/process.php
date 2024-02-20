<?php
include "../core/dbconnect.php";

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO khata (fname, email, msg) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Set parameters and execute statement
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$stmt->execute();

echo "Record added successfully";

// Close connection
$stmt->close();
$conn->close();
?>
