<?php
session_start(); // start the session

// check if the user is logged in
if(isset($_SESSION['email'])) {

    // unset all session variables
    $_SESSION = array();

    // destroy the session
    session_destroy();

    // redirect the user to the login page
    header("Location: ../index.php");
    exit();
}

?>