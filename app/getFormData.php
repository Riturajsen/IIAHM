<?php
session_start();

include "config/connect.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
    $secure_id = $_SESSION['secure_id'];
    $query_get_user = "SELECT * from `users` where `secure_id`='$secure_id'";
    $User_response = mysqli_query($conn,$query_get_user);
  
    $get_user = mysqli_fetch_array($User_response);
    $rights = $get_user['rights'];
  
    if($rights == 3 || $rights == 2 || $rights == 1){
?>
<h4 class="bg-danger text-white"><?=$_SESSION['msg']?></h4>
<table class="table" id="list-tbl">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">Contact</th>
      <th scope="col">FOR</th>
      <th scope="col">Course</th>
      <th scope="col">Source</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php
  $ret = mysqli_query($conn , "SELECT * FROM form");
  if(mysqli_num_rows($ret) > 0) {
       $i = 1;
    while ($row=mysqli_fetch_array($ret)){
     
  ?>
    <tr>
      <th scope="row"><?=$i;?></th>
      <td><?=$row['fname'];?></td>
      <td><?=$row['Pnumber'];?></td>
      <td><?=$row['utm_target'];?></td>
      <td><?=$row['course'];?></td>
      <td><?=$row['utm_source'];?></td>
      <td><a href="deleteFormData.php?id=<?=$row['id'];?>"><i class="fa fa-trash "></i></a></td>
    </tr>
<?php $i++;
        
    }
      
  }
else{ echo "<h2> No Records Found!</h2>";}?>

  </tbody>
</table>


<?php }  $_SESSION['msg'] = " "; }?>
