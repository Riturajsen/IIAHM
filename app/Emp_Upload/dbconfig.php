<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "iiahm";

    // hostinger
    // $host = "srv946.hstgr.io"; 
    // $username = "u726396859_Emp";
    // $password = "~5iy?YyQYDk4";
    // $database = "u726396859_Emp";


    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
?>