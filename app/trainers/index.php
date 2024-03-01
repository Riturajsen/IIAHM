<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3 || $rights == 1){
  ?>

  <style>
    input{
        margin: 10px;

    }
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 <div id="alert"><?php echo $_SESSION['msg'] ?></div>

 <a href="trainers/viewtrain.php" class="btn btn-success m-2">View Trainers</a>
<form  method="POST" id="" enctype="multipart/form-data" action="trainers/ajax.php">
<label>Trainer Image</label>
            <input type="file" name="trainimg"  class="form-control" placeholder="" >
            <label>Trainer name</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your Name" required>
            <label>Trainer Field</label>
            <input type="text" name="tfield" id="field" class="form-control" placeholder="Enter Your Name" required>
            <label>Bio</label><br>
            			<textarea name="bio" id="bio" class="form-control" maxlength="250"></textarea>
                        <small id="count" class="text-danger"></small>
            <br><br>
            <label>Show On home Page ?</label>
			<input type="radio" name="showH" id="" value="Yes">Yes
			<input type="radio" name="showH" id="" value="No"> No
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 text-white form-control btn-success"  name="Submit">
        </form>

   	
<?php $_SESSION['msg'] =" "; } else{ echo "<h1>you do not have required rights</h1>";} }?>



<script>
    document.getElementById('bio').onkeyup = function () {
  document.getElementById('count').innerHTML = "Characters left: " + (250 - this.value.length);
};
</script>