<?php
session_start();
include "../../core/main.php";

// Check if the user is authenticated
if(isset($_SESSION['secure_id'])) {
    $secure_id = $_SESSION['secure_id'];

    // Check if form data is submitted
    if(isset($_POST['fname'], $_POST['email'])) {
        // Sanitize input
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);      
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        // Check if password is provided
        if(isset($_POST['password'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $query = "UPDATE users SET fname = '$fname', email = '$email', password = '$password' WHERE secure_id = '$secure_id'";
        } else {
            $query = "UPDATE users SET fname = '$fname', email = '$email' WHERE secure_id = '$secure_id'";
        }

        // Execute query
        $ins = mysqli_query($conn, $query);

        if(!$ins){
            $_SESSION['qstring'] = 'err'; 
        } else {
            $_SESSION['qstring'] = 'succ'; 
        }
    } else {
        $_SESSION['qstring'] = 'missing_data';
    }

    // Redirect to home page
    header("Location: ../home.php"); 
} else {
    // User not authenticated
    echo "User not authenticated!";
}
?>
