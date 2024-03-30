<?php  
session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";
$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0) {
    $returnAuth = mysqli_fetch_assoc($fetchAuth);
    $page = $_GET['page'];
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
    $allotedId = $returnAuth['id'];
    $globalTeledata = mysqli_query($conn , "SELECT * from studentdetails where allotedTo=$allotedId");

   

$globalTeledatalimit = mysqli_query($conn , "SELECT * from studentdetails where allotedTo='$allotedId' LIMIT 10");
$globalTeledatalimitUnTouched = mysqli_query($conn , "SELECT * from studentdetails where allotedTo='$allotedId' AND called=0");

?>

            <!-- Display status message -->
<div class="">
<div class="row p-3">
<div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-header">
                                    Total Assigned
                                    </div>
                                    <div class="card-body">
                                            <?php     while ($row=mysqli_fetch_array($globalTeledatalimit)){ 
                                                
                                                ?>   
                                                <ul>
                                                    <li><?php if( strlen($row['fname']) ==0 ){ echo "No Name"; }else{ echo $row['fname']; }?></li>
                                                    
                                                </ul>
                                                
                                                <?php } ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="?page=callStart"><?=mysqli_num_rows($globalTeledata)?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                               
                            </div>   
              
  </div>
        




</div>
      
   

<?php }  ?>
              