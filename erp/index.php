<?php
session_start();
$secure_id = $_POST['secure_id'];

include "../core/main.php";

$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

    $_SESSION['uid'] = $returnAuth['secure_id'];
    header('location: home.php');
// echo "Welcome to erP ".$returnAuth['fname'];

}else{
    echo "<h1>Wrong Gateway or secure Id miss-match</h1>";
}
?>
