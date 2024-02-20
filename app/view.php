<?php
include "Emp_Upload/dbconfig.php";
$limit = 10;  // Number of entries to show in a page.
// Look for a GET variable page if not found default is 1.     
if (isset($_GET["page"])) { 
  $pn  = $_GET["page"]; 
} 
else { 
  $pn=1; 
};  

$start_from = ($pn-1) * $limit;  

$sql2 = "SELECT COUNT(*) FROM empdetails";  
$rs_result2 = mysqli_query($conn,$sql2);  
$row2 = mysqli_fetch_row($rs_result2);  
$total_records2 = $row2[0]; 


$ret2 = mysqli_query($conn , "SELECT * FROM empdetails LIMIT $start_from, $limit");
$num_row2 = mysqli_num_rows($ret2)
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpha Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
      ul.pagination li {
      padding: 1px;

}
    .disabled{
      visibility:collapse;
    }
    </style>
  </head>
  <body>
    <div class="container mt-5">
        <h4>Search For Employee</h4>
         <div class="col-12 col-md-12 mb-3"><input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Enter Name or Addhar Number...."></div>
         
         <div class="card-text" id="searchresult"></div>
         
         <hr>
         <div class="row">
          <div class="col-sm-6"><small>Showing results <?=$start_from+1 ." to ".$start_from+$num_row2." out of : ".$total_records2?></small></div>
         
     
          <div class="col-sm-6 text-end"><small>Total number of records on this page <?=$num_row2?></small></div>
         </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">Site Name</th>
      <th scope="col">Aadhar Number</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php
  $ret = mysqli_query($conn , "SELECT * FROM empdetails LIMIT $start_from, $limit");
  if(mysqli_num_rows($ret) > 0) {
       $i =$start_from+1;
    while ($row=mysqli_fetch_array($ret)){
     
  ?>
    <tr>
      <th scope="row"><?=$i;?></th>
      <td><?=$row['fullname'];?></td>
      <td><?=$row['sitename'];?></td>
      <td><?=$row['aadhar'];?></td>
      <td><a href="viewEmp.php?id=<?=$row['id'];?>"><i class="fa fa-eye"></i></a></td>
    </tr>
<?php $i++;
        
    }
    $sql1 = "SELECT COUNT(*) FROM empdetails";  
    $rs_result1 = mysqli_query($conn,$sql1);  
    $row1 = mysqli_fetch_row($rs_result1);  
    $total_records1 = $row1[0];  
      
    // Number of pages required.
    $total_pages = ceil($total_records1 / $limit);  
      
  }
else{ echo "<h2> No Records Found!</h2>";}?>

  </tbody>
</table>
    
      <ul class="pagination justify-content-md-center" >
        <li><a href="dashboard.php?page-name=View_Emp&page=1"><button class="btn btn-primary"><<</button></a></li>
        <li class="<?php if($pn <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pn <= 1){ echo '#'; } else { echo "dashboard.php?page-name=View_Emp&page=".($pn - 1); } ?>"><button class="btn btn-primary"><?=$pn-1?></button></a>
        </li>
        <li><a href="#">
          <button class="btn btn-info">
          <?=$pn?>
          </button></a>
        </li>
        <li class="<?php if($pn >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pn >= $total_pages){ echo '#'; } else { echo "dashboard.php?page-name=View_Emp&page=".($pn + 1); } ?>"><button class="btn btn-primary"><?=$pn+1?></button></a>
        </li>
        <li><a href="dashboard.php?page-name=View_Emp&page=<?php echo $total_pages; ?>"><button class="btn btn-primary">>></button></a></li>
    </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                // alert(input);
                if(input != ""){
                    $.ajax({
                        url:"Emp_Upload/livesearch.php",
                        method: "POST",
                        data:{input:input},
                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");


                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });

          
        });
    </script>
  </body>
</html>