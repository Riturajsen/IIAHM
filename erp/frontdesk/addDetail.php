<?php
session_start();
$secure_id = $_SESSION['secure_id'];
include "../../core/main.php";
$today_date = date('Y-m-d');
$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
$returnAuth = mysqli_fetch_assoc($fetchAuth);
if($returnAuth['rights'] == 5 ){
?>





<?php } else { echo "Not Enogh Rights"; } ?>