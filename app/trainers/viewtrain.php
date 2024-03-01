<?php
session_start();

include "../config/connect.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
    $secure_id = $_SESSION['secure_id'];
    $query_get_user = "SELECT * from `users` where `secure_id`='$secure_id'";
    $User_response = mysqli_query($conn,$query_get_user);
  
    $get_user = mysqli_fetch_array($User_response);
    $rights = $get_user['rights'];
  
    if($rights == 3 | $rights == 2 | $rights == 1){
?>
<head>
    <title>Trainer Record Database | IIAHM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<div class="container mt-5">
    <h4 class="bg-danger text-white"><?=$_SESSION['msg']?></h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">View On Home</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $ret = mysqli_query($conn , "SELECT * FROM trainer ORDER BY id DESC");
  if(mysqli_num_rows($ret) > 0) {
       $i =1;
    while ($row=mysqli_fetch_array($ret)){
    ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$row['fname']?></td>
      <td><img src="<?='../assets/images/trainer/'.$row['trainimg']?>" alt="Trainers Image" width="90px" height="90px"></td>
      <td><?=$row['showH']?></td>
      <td> <a href="../dashboard.php?page-name=trainersEdit&Tid=<?=$row['id']?>" class="btn btn-warning">Edit</a>  </td>

      <td> <a href="deleteTrain.php?id=<?=$row['id']?>&unlink=<?=$row['trainimg']?>" class="btn btn-danger">Delete</a>  </td>
    </tr>

    <?php $i++; } }?>

  </tbody>
  <tfoot>
    <a href="../dashboard.php?page-name=trainers" class="btn btn-success">Go back</a>
  </tfoot>
</table>
</div>



<?php $_SESSION['msg'] = ""; }

else{
    echo "You Have No rights to be on this page";
}
}  ?>