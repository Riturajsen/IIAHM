<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3 || $rights == 1){

    $id =  $_GET['Tid'];
    $res = mysqli_query($conn , "SELECT * from trainer where id=$id");
    if(mysqli_num_rows($res) > 0){
        $ret = mysqli_fetch_assoc($res);
  ?>

  <style>
    input{
        margin: 10px;

    }
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 <div id="alert"><?php echo $_SESSION['msg'] ?></div>

 <a href="dashboard.php?page-name=trainers" class="btn btn-success m-2">Add Trainers</a>
<form  method="POST" id="" enctype="multipart/form-data" action="trainers/ajaxE.php">
    <input type="hidden" name="id" value="<?=$ret['id']?>">
<label>Trainer Image</label>
<img src="assets/images/trainer/<?=$ret['trainimg']?>" alt="No imge" height="100px" width="100px">
            <input type="file" name="trainimg"  class="form-control" placeholder="" >
            <label>Trainer name</label>
            <input type="text" name="fname" id="fname" class="form-control" value="<?=$ret['fname']?>" placeholder="Enter Your Name" required>
            <label>Trainer Field</label>
            <input type="text" name="tfield" id="field" class="form-control" value="<?=$ret['tfield']?>" placeholder="Enter Your Name" required>
            <label>Bio</label><br>
            			<textarea name="bio" id="bio" class="form-control" value="" maxlength="250"><?=$ret['bio']?></textarea>
                        <small id="count" class="text-danger"></small>
            <br><br>
            <label>Show On home Page ?</label>
			<input type="radio" name="showH" id="" value="Yes" <?php if($ret['showH'] == "Yes"){ echo 'checked="checked"'; } ?> >Yes
			<input type="radio" name="showH" id="" value="No" <?php if($ret['showH'] == "No"){ echo 'checked="checked"'; } ?>> No
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 text-white form-control btn-success"  name="Submit">
        </form>

   	
<?php $_SESSION['msg'] =" "; } else echo "<h3>No Trainer Found </h3>";} else{ echo "<h1>you do not have required rights</h1>";} }?>
<script>
    document.getElementById('bio').onkeyup = function () {
  document.getElementById('count').innerHTML = "Characters left: " + (250 - this.value.length);
};
</script>