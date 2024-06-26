<?php
session_start();
$secure_id = $_SESSION['secure_id'];

if (!isset($_SESSION["secure_id"])) {
    header("Location: ../index.php");
    exit();}else{
include "../core/main.php";
$query = mysqli_query($con , "SELECT * from users where secure_id = '$secure_id'");
$ret = mysqli_fetch_assoc($query);
?>

<?php

// Set the session timeout period (in seconds)
$inactive_timeout = 300; // 30 minutes

// Check if the session is active
if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactive_timeout)) {
    // If session is inactive for longer than the timeout period, destroy the session
  //  session_unset();     // unset $_SESSION variable for the run-time 
    //session_destroy();   // destroy session data in storage
}
$_SESSION['last_activity'] = time();
// echo  $_SESSION['last_activity'] > $inactive_timeout;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
   <style>

    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}
.close button{
    align-items: right;
    background-color: red;
    border: red;
    color: #fff;
    cursor: pointer;
    padding: 10px;
    border-radius: 4px;
}
.inactive{
    text-align: center;
}
form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"],
.form-group input[type="tel"] {
    height: 40px;
}

.form-group button {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-group button:hover {
    background-color: #0056b3;
}
.text-danger{
    color: red;
}
   </style>
</head>
<body class="body">
<div id="timer"></div>
    <div class="container">
    <div class="close"><a href="home.php"><button>X</button></a>  </div>
        <h2>Edit Profile</h2>
       
        <form action="helper/save_profile.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?=$ret['username']?>" readonly>
            </div>
            <div class="form-group">
                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">New Password: <small class="text-danger">leave Empty if unchanged</small></label>
                <input type="password" id="password" name="pasword">
                <a href="void:" id="togglePassword">Show Password</a>
                
            </div>
         
            <div class="form-group">
                <button type="submit">Save Changes</button>
            </div>
        </form>
    </div>
    <div class="container">
    <div class="inactive">The page will expire in 3 Mins Of InActive</div>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);

    this.textContent = type === 'password' ? 'Show Password' : 'Hide Password';
});
    </script>

</body>
</html>

<?php } ?>