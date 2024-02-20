<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "admin";
$dbname = "alphakhata";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


?>
