<?php
session_start();
$email = $_SESSION['email'];
if($_SESSION != ""){
 include "../core/dbconnect.php";
 include "core.php";

$query = "SELECT * from user where email='$email'";

$ret = mysqli_query($conn , $query);
$res=mysqli_fetch_assoc($ret);



?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="sidebar">
    <h4><?php echo $res['fullname']; ?> • Profile</h4>
    <ul>
      <li><a href="<?php echo $sidebar[0] ?>">Home</a></li>
      <li><a href="<?php echo $sidebar[1] ?>">Profile</a></li>
      <li><a href="<?php echo $sidebar[2] ?>">Settings</a></li>
      <li><a href="<?php echo $sidebar[3] ?>">Logout</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>Welcome to the Dashboard <?php echo $res['fullname']; ?>!</h1>
    <p>Add Your </p>
  </div>
  <script src="script.js"></script>
</body>
</html>
<?php
}
else{
  header("Location: ../index.php");
}
?>