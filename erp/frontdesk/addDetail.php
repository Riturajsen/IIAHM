<?php
session_start();
$secure_id = $_SESSION['secure_id'];
include "../../core/main.php";
$today_date = date('Y-m-d');
$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
$returnAuth = mysqli_fetch_assoc($fetchAuth);
if($returnAuth['rights'] == 5 ){

    $StudentId = $_GET['id'];

    $fetchStudent = mysqli_query($conn, "SELECT * FROM frontdesk where `id`='$StudentId'");
    $returnStudent = mysqli_fetch_assoc($fetchStudent);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$returnStudent['fname'];?> | Student | Walkin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container mt-5 content-align-center">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header bg-warning tex">
                    Data of <?=$returnStudent['fname']?>
                </div>
                <div class="card-body p-3">
            <form action="updateD.php" method="post">
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mobile No </label>
    <div class="col-sm-10">
      <input type="text" name="Pnumber" readonly class="form-control-plaintext" id="staticEmail" value="<?=$returnStudent['Pnumber'];?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text"  name="fname" class="form-control"  value="<?=$returnStudent['fname'];?>" id="">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
      <input type="number"  name="age" class="form-control" id="">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Weight</label>
    <div class="col-sm-10">
      <input type="number"  name="weight" class="form-control" id="">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Height</label>
    <div class="col-sm-10">
      <input type="number" name="height" class="form-control" id="">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Parents Occupation</label>
    <div class="col-sm-10">
      <input type="text"  name="parentsOcc" class="form-control"  value="" id="">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label">Counsellor</label>
    <div class="col-sm-10">
      <select name="counselor" id="" class="form-control">
          <?php
  $ret = mysqli_query($conn , "SELECT * FROM  users where rights=6");
  if(mysqli_num_rows($ret) > 0) {
    ?>   <option value="">Select A Caller</option>
    <?php
       $i =1;
    while ($row=mysqli_fetch_array($ret)){
    ?>
<option value="<?=$row['username']?>"><?=$row['username']?></option>


<?php } } else{ echo " <option value=''>No Caller Added</option>";} ?>
</select>
    </div>
  </div>
  </div>
  <div class="card-footer">
    <input type="submit" value="SUBMIT" class="form-control btn btn-warning">
  
    </form>
    <a href="../home.php" class="btn btn-danger form-control text-white mt-3">GO BACK</a>
  </div>
  
            </div>
            
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php } else { echo "Not Enogh Rights"; } ?>