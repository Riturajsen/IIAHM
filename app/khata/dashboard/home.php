<?php
session_start();
if($_SESSION['email'] != ""){
$email = $_SESSION['email'];
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</head>
<body>
  <div class="sidebar">
    <h5><?php echo $res['fullname']; ?> • Dashboard</h5>
    <ul>
      <li><a href="<?php echo $sidebar[0] ?>">Home</a></li>
      <li><a href="<?php echo $sidebar[1] ?>">Profile</a></li>
      <li><a href="<?php echo $sidebar[2] ?>">Settings</a></li>
      <li><a href="<?php echo $sidebar[3] ?>">Logout</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>Welcome to the Dashboard <?php echo $res['fullname']; ?>!</h1>
   <hr>
    <form id="myForm" action="" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <br>
  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea>
  <br>
  <button type="submit">Submit</button>
</form>

  </div>
  <script src="script.js"></script>
  <script>
    $(document).ready(function() {
  $('#myForm').submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'process.php',
      data: formData,
      success: function(response) {
        alert(response);
        let 
      }
    });
  });
});

  </script>
</body>
</html>

<?php }

else{
  header("Location: ../index.php");
}?>