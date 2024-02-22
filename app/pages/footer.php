<?php
include "getGlobal.php";
?>

<style>
ul li {
  display: inline;
  padding: 10px;
}
</style>
<div class="row">
                    <div class="col-md-7 mt-3 d-none d-lg-block">
                © <?=date('Y')?> <?=$companyName?> Admin Panel By <a href="<?=$Footerlink?>"><?=$madeBy?> </a>
                </div>
                <div class="col-md-5 inline mt-3 d-none d-lg-block">
                    <ul>
                    <li>Privacy Policy</li>
                    <li>Work Ethics</li>
                    <li>Terms & Condition</li>
                    </ul>
                </div> 
                <div class="d-block d-sm-none "><?=$companyName?> © <?=date('Y')?>  Admin Panel</div>
                
            </div>

        