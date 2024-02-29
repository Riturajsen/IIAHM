<?php
session_start();

include "../config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3){
  

  $query = "SELECT * From websitesetting where id=1";
  $ret = mysqli_query($conn , $query);
  $res = mysqli_fetch_assoc($ret);
  ?>
 <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
  

<form class="form-horizontal form-material mx-2" method="POST" action="">
    <input type="hidden" value= '<?=$get_user["fname"]?>' required="true">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Scroller Text</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$res['scrollert'];?>" class="form-control ps-0 form-control-line" name="scrollert" required="true"> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Company Address</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="adress" value="<?=$res['address'];?>" required="true"> 
                                        </div>
                                    </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Company Email </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                              value="<?=$res['email'];?>"  class="form-control ps-0 form-control-line" name="email" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Contact number </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$res['ContactNo'];?>" class="form-control ps-0 form-control-line" name="ContactNo"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">logo</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                class="form-control ps-0 form-control-line" name="logo"  > 
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0"> Hero image</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                class="form-control ps-0 form-control-line" name="bgimghero"  > 
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Hero Text </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                              value="<?=$res['h1text'];?>"  class="form-control ps-0 form-control-line" name="h1text" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Hero Sub-heading </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$res['subhead'];?>" class="form-control ps-0 form-control-line" name="subhead"> 
                                        </div>
                                        </div>
                                      
                                        <h2><u>Our Methodology</u></h2>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">ParaGraph </label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                              value="<?=$res['paraM'];?>"  class="form-control ps-0 form-control-line" name="paraM" required="true"> 
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">List</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                            value="<?=$res['listM'];?>" class="form-control ps-0 form-control-line" name="listM"> 
                                        </div>
                                        </div>
                                        <h4><u>
why people choose IIAHM Aviation academy  </u></h4>
<div class="form-group mt-3">
                                        <label class="col-md-12 mb-0"> Why us image</label>
                                        <div class="col-md-12">
                                            <input type="file" 
                                                class="form-control ps-0 form-control-line" name="Whyimg" value=""  > 
                                        </div>
                                    </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">why iiahm text</label>
                                        <div class="col-md-12">
                                          <textarea name="whyiiahmtext" id="whyiiahmtext" cols="30" rows="10" value=""><?=$res['whyiiahmtext']?></textarea>
                                        </div>
                                        </div>
                                        <h4><u>
                                        AFFILIATION  </u></h4>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0"> Affiliation image Link</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" name="affimg" value="<?=$res['affimg']?>"  > 
                                        </div>
                                    </div>
                                        <div class="form-group mt-3">
                                        <label class="col-md-12 mb-0">Affiliation Text</label>
                                        <div class="col-md-12">
                                          <textarea name="textaff" id="textaff" cols="30" rows="10" value=""><?=$res['textaff']?></textarea>
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mx-auto mx-md-0 mt-5 text-white">Update Setting</button>
                      
</form>
<script>
												CKEDITOR.replace( 'textaff' );
												CKEDITOR.replace( 'whyiiahmtext' );
												CKEDITOR.replace( 'textaff' );
										</script>


<?php } else{ echo "<h1>you do not have required rights</h1>";} }?>