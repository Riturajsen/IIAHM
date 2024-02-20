<?php
session_start();

include "Emp_Upload/dbconfig.php";



$conn = mysqli_connect($host, $username, $password, $database);

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
    if( $rights == 3){
        
?>
<h4><?=$_SESSION['msg']?></h4>
   <form class="form-horizontal form-material mx-2" method="POST" action="assets/plugins/addadmin.php">
                                        
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="fname" required="true"> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">User Name</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="username" required="true"> 
                                        </div>
                                    </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Password </label>
                                        <div class="col-md-12">
                                            <input type="password" 
                                                class="form-control ps-0 form-control-line" name="pasword" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Email </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="email" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-md-12 mb-0">User Right?</label>
                                        <div class="col-md-12">
                                            <select name="rights" class="form-control ps-0 form-control-line"" id="">
                                                <option value="0">User</option>
                                                <option value="1">Editor</option>
                                                <option value="2">Admin</option>
                                            </select>
                                                
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-success mx-auto mx-md-0 mt-5 text-white">Create 
                                                User</button>
                      
</form>

<?php }else{echo "Not Enough Rights";}} ?>