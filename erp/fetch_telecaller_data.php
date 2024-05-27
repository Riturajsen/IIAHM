<?php
// fetch_telecaller_data.php

// Include your database connection file
include "../core/main.php";

// Check if teleCallerId is set in POST request
if(isset($_POST['teleCallerId'])) {
    $teleCallerId = $_POST['teleCallerId'];
    $date = date('Y-m-d');

    // Fetch telecaller data based on the selected ID
    $query = "SELECT * FROM studentdetails WHERE allotedDate = $date and  allotedTo = $teleCallerId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if($row > 0) {
        // Display telecaller data
        echo "Telecaller ID: " . $row. "<br>";
        // Add more fields as needed
    } else {
        echo "No data found for the selected telecaller.";
    }
} else {
    echo "Error: Telecaller ID not provided.";
}
?>
