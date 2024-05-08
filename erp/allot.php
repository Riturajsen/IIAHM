
<?php

session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";


class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "iiahm";
    public $conn;
    function __construct() {
        $this->conn = $this->connectDB();
    }
    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
         return $conn;
        }
    function runQuery($query) {
        $result = $this->conn->query($query);
        $resultset = [];
        while($row=$result->fetch_assoc()) {
            $resultset[] = $row;
        }
        return $resultset;
    }
}
$db_handle = new DBController();
$filters = [];

$filters['filesource'] = array_column($db_handle->runQuery("SELECT DISTINCT filesource FROM studentdetails  ORDER BY filesource ASC"), 'filesource');
$filters['locationn']  = array_column($db_handle->runQuery("SELECT DISTINCT locationn FROM studentdetails  ORDER BY locationn ASC"), 'locationn');
$filters['category']   = array_column($db_handle->runQuery("SELECT DISTINCT category FROM studentdetails  ORDER BY category ASC"), 'category');
$filters['institute']  = array_column($db_handle->runQuery("SELECT DISTINCT institute FROM studentdetails  ORDER BY institute ASC"), 'institute');
$filters['classname']  = array_column($db_handle->runQuery("SELECT DISTINCT classname FROM studentdetails  ORDER BY classname ASC"), 'classname');

if(!empty($_SESSION['qstring'])){ 
    switch($_SESSION['qstring']){ 
        case 'succ': 
            $statusType = 'alert-success'; 
            $statusMsg = 'Student data has been alloted successfully.'; 
            break; 
        case 'err': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Something went wrong, please try again.'; 
            break; 
        case 'invalid_file': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Some Undefined Server error Caught'; 
            break; 
        default: 
            $statusType = ''; 
            $statusMsg = ''; 
    } 
    $_SESSION['qstring'] = " ";
} 


$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

    $total_unsign_data = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo IS NULL OR allotedTo = ' '");
    $number_of_contact = mysqli_num_rows($total_unsign_data);
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
   
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
            <?php if(!empty($statusMsg)){ ?>
<div class="col-lg-12 p-3">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
            <!-- Display status message -->

<div class="col-md-12">
<div class="row p-3">
    <!-- Import link -->
    <form id="myForm" class="" action="" method="post">
    <select name="teleCaller" class="form-control bg-dark text-white " id="teleCaller" required="true">
     
    <?php
  $ret = mysqli_query($conn , "SELECT * FROM  users where rights=4");
  if(mysqli_num_rows($ret) > 0) {
    ?>   <option>Select A Caller</option>
    <?php
       $i =1;
    while ($row=mysqli_fetch_array($ret)){
    ?>
<option value="<?=$row['id']?>"><?=$row['username']?></option>


<?php } } else{ echo " <option value=''>No Caller Added</option>";} ?>
    </select></form>
    <!-- Excel file upload form -->
    <div class="row p-1">
    <!-- Import link -->
    
    <!-- <div class="col-6 col-md-3"><input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search for any Location or College"></div> -->
    <!-- Excel file upload form -->
 <!-- <div id="myTable"></div> -->
    <!-- Data list table --> 
     

</div>
</div>
<hr>
<div class="p-3">Filters : 
<form method="POST" name="filesource">
	
    <div class="row">

        <!-- <div id="col"> -->
            <div class="search-box col mt-5">
                
                <select class="form-select form-control" id="filesource" name="filesource[]" multiple="multiple">
                        <?php
                        if (!empty($filters['filesource'])) {
                            foreach ($filters['filesource'] as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                        }
                        ?>
                </select>
                <br>
                <br>
            </div>
            <div class="search-box col">
                Select Location<br>     <input type="text" name="" id="SLocation">
                <select class="form-select form-control" id="locationn" name="locationn[]" multiple="multiple">
                        <?php
                        if (!empty($filters['locationn'])) {
                            foreach ($filters['locationn'] as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                        }
                        ?>
                </select>
                <br>
                <br>
            </div>
            <div class="search-box col">
                Select Category<br>
                <input type="text" name="" id="">
                <select class="form-select form-control" id="category" name="category[]" multiple="multiple">
                        <?php
                        if (!empty($filters['category'])) {
                            foreach ($filters['category'] as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                        }
                        ?>
                </select>
                <br>
                <br>
            </div>
            <div class="search-box col">
            Select Institute<br>
            <input type="text" name="" id="">
                <select class="form-select form-control" id="institute" name="institute[]" multiple="multiple">
                 
              
                        <?php
                        if (!empty($filters['institute'])) {
                            foreach ($filters['institute'] as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                        }
                        ?>
                </select>
                <br>
                <br>
            </div>
            <div class="search-box col">
                Select Class<br>     <input type="text" name="" id="">
                <select class="form-select form-control" id="classname" name="classname[]" multiple="multiple">
                        <?php
                        if (!empty($filters['classname'])) {
                            foreach ($filters['classname'] as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                        }
                        ?>
                </select>
                <br>
                <br>
            </div>
     
        
            <button id="Filter" type="submit">Search</button>
        <!-- </div> -->
    </div>
    </form>
</div>

<div class="m-3" id="output">

</div>
<hr>

<form action="helper/fetchDataTable.php" method="post">
<input type="hidden" name="TeleId" id="TeleId">
<hr>
<a href="javascript:void(0)" class="btn btn-warning ml-3"  id="btn-sel">Select first 50</a>
<hr>
<table class="table table-hover">
        <thead>              
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Allot</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // Get member rows 
        if (!empty($_POST) && count($_POST)) {
            //filter the array $_POST with the keys representing your filters & fields in your DB that you trust
            $request_filters = array_intersect_key($_POST, array_flip(['filesource','institute','locationn','category','classname']));
            if(count($request_filters)) {
        ?>
                <?php
                //then build up your prepare query statement
                $params = [];
                $query = "SELECT * from studentdetails WHERE ";
                $extra_query = [];
                foreach ($request_filters as $field => $values) {
                    $extra_query[] = "{$field} IN (?" . str_repeat(', ?', count($values) - 1) . ")";
                    $params = array_merge($params, $values);
                }
                $query .= implode(' AND ',$extra_query);
                $stmt = $db_handle->conn->prepare($query);
                $stmt->bind_param(str_repeat('s',count($params)), ...$params);
                if($stmt->execute()){
                    $stmt_result = $stmt->get_result();
                    if($stmt_result && $stmt_result->num_rows){
                        ?>
                        <tbody>
                        <?php $i = 1;
                        while($row = $stmt_result->fetch_assoc()){
                            ?>
                            <tr>
                                <td>
                                    <div class="col"><?php echo $i ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['fname']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['filesource']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['locationn']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['category']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['institute']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['classname']; ?></div>
                                </td>
                              
            
                <td><input type="checkbox" name="allotedid[]" value="<?=$row['id']?>" ></td>
                            </tr>
                            <?php
							$i++;
                        }
                        ?>
                        </tbody>
                        <?php
                    } else {
                        ?>
                        <tbody>
                            <tr>
                                <td colspan="7" class="text-center"><h3>No results!</h3></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
            }
        }
                ?>
            

</div>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <!-- footer End -->
     <script type="text/javascript">

       var getId = document.getElementById('teleCaller');
       getId.addEventListener("click",(event) => {
       document.getElementById('TeleId').value = getId.value; });

        var getSrc = document.getElementById('source');
        getSrc.addEventListener("click",(event) => {
        document.getElementById('output').innerHTML = getSrc.value; });

        var getIns = document.getElementById('institute');
        getIns.addEventListener("click",(event) => {
        document.getElementById('output').innerHTML = getIns.appendChild; });
        
        var getCou = document.getElementById('')
     </script>
         <script type="text/javascript">
$("#course").change(function(){
    var course = $(this).val();
    $.post('helper/getLocation.php', {course: course}, function(response){
        // your drop down box is in response
        $("#myTable").html(response);
    });
});

        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                // alert(input);
                if(input != ""){
                    $.ajax({
                        url:"helper/getLocation.php",
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
    <script>
$(document).ready(function() {
   var $cbs = $('input:checkbox[name="allotedid[]"]'),
       $links = $("#btn-sel"); // you probably don't want _all_ links,
                        // so add a class or something.
   $links.click(function() {
      var start = $links.index(this) * 50,
          end = start + 50;
      $cbs.slice(start,end).prop("checked",true);
   });
});
    </script>
   
            </body>
</html>



<?php 
}else {
    header('location: ../');
}
?>                