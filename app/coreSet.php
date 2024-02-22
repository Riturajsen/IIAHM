<?php
session_start();
include "../config/connect.php";
include "globalGet.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
    if($rights == 3){
?>
   <form class="form-horizontal form-material mx-2" method="POST" action="assets/plugins/addadmin.php">
    <input type="hidden" value= '<?=$get_user["fname"]?>' readonly="true" required="true">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Site Name</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$sitename?>" class="form-control ps-0 form-control-line" name="siteName" required="true"> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Company Name</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="companyName" value="<?=$companyName?>" required="true"> 
                                        </div>
                                    </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Footer Link </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                              value="<?=$Footerlink?>"  class="form-control ps-0 form-control-line" name="footerlink" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Made By </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$madeBy?>" class="form-control ps-0 form-control-line" name="madeby" readonly="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Webmail Link</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="companyName" value="<?=$companyName?>" required="true"> 
                                        </div>
                                    </div>
                                    
                                        <button type="submit" class="btn btn-success mx-auto mx-md-0 mt-5 text-white">Update Setting</button>
                      
</form>

<?php }else{echo "Not Enough Rights";}} ?>