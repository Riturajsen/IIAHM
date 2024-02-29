<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
    exit();
}
    
?>
