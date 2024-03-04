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
 <div id="alert"><?php echo $_SESSION['msg']; ?></div>
<table class="table">
    <tr>
    <th>#</th>
    <th>Testimonial</th>
    <th>By</th>
    <!-- <th>Edit</th> -->
    <th>Delete</th>
    </tr>
    <?php
  $ret = mysqli_query($conn , "SELECT * FROM  testimonial ORDER BY id DESC");
  if(mysqli_num_rows($ret) > 0) {
       $i =1;
    while ($row=mysqli_fetch_array($ret)){
    ?>
<tr>
    <td><?=$i?></td>
    <td><?=$row['texttest'];?></td>
    <td><?=$row['testauthor'];?></td>

    <!-- <td><form action="websiteSetting/testimonialAction.php" method="post"><input type="hidden" name="id" value="<?=$row['id']?>"><input type="submit" value="EDIT" name="edit" class="btn btn-warning"></form></td> -->

    <td><form action="websiteSetting/testimonialAction.php" method="post"><input type="hidden" name="id" value="<?=$row['id']?>"><input type="submit" value="DELETE" name="delete" class="btn text-white btn-danger"></form></td>

</tr>

<?php $i++;}}else echo"No row Found"; ?>
</table>

<?php } } $_SESSION['msg'] = " "; ?>