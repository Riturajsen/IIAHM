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
 <a href="dashboard.php?page-name=Viewtestimonial" class="btn btn-success m-2">View Testiominials</a>
<form  method="POST" id=""  action="websiteSetting/testimonialAction.php">

            <label>Student name</label>
            <input type="text" name="testauthor" id="testauthor" class="form-control" placeholder="Enter Your Name" required>
            <label>testimonial </label><br>
            			<textarea name="texttest" id="texttest" class="form-control" maxlength="350"></textarea>
                        <small id="count" class="text-danger"></small>
            <br>
          
            <input type="submit" value="Insert" id="submit" class="btn mt-3 text-white form-control btn-success"  name="Insert">
        </form>

   	
<?php $_SESSION['msg'] =" "; } else{ echo "<h1>you do not have required rights</h1>";} }?>



<script>
    document.getElementById('texttest').onkeyup = function () {
  document.getElementById('count').innerHTML = "Characters left: " + (350 - this.value.length);
};
</script>