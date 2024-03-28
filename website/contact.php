<?php
include ('../core/main.php');
session_start();
include "db/connect.php";
$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);
//$resWeb['']
$captcha = rand(10000,99999);
$_SESSION['captcha'] = $captcha;
?>
<!DOCTYPE html>
<html lang="en">

<!-- contact.html  30 Nov 2019 03:31:43 GMT -->


    <!-- header-section start -->
   
<?php include "assets/Content/header.php"; error_reporting(false) ; ?>
    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">contact with us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="assets/images/aeroplane.png" alt="image"></a>

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- contact-section start -->
    <section class="contact-section pt-120 pb-120">
        <div class="container">
            <div class="account-wrapper">
                <div class="login-area account-area change-form">
                    <div class="row m-0">
                        <div class="col-lg-5 p-0">
                            <div class="change-catagory-area">
                                <h3 class="title">send us a Messages</h3>
                                <h5 class="text-danger mb-3"><?=$_GET['rmsg'];?></h5>
                                <form class="contact-form" action="getMessage.php" Method="POST" id="">
                                    <div class="form-group">
                                        <input type="text" id="name" required="true" name="fname" placeholder="Full-name">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" id="email" required="true" pattern="[6-9]{1}[0-9]{9}" name="Pnumber" placeholder="Enter Your Mobile Number" >
                                    </div>
                      
                                                                              
                                    <!-- <div class="form-group mb-3" id="">
                                        <select class="form-select" id="">
                                            <option  value="Aviation & Hospatility Management">Aviation & Hospatility Management</option>
                                            <option value="Ground Staff & Hospatility Management">Ground Staff & Hospatility Management</option>
                                            <option value="Personality Development">Personality Development</option>
                                        </select>
                                        </div> 
                                         -->


                              
                                       
                                        <!-- <select class="form-select" aria-label="Default select example">
                                        <option class="text-dark" value="Aviation">Aviation & Hospatility Management</option>
                                        <option value="ground">Ground Staff & Hospatility Management</option>
                                        <option value="personality">Personality Development</option>
                                        </select> -->
                                  
                                    <div class="form-group">
                                        <textarea placeholder="Message" id="message" name="msg" cols="30" rows="2"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                    <!-- <label for="captcha text-white">Captcha : </label> -->
                                     <h3 class="bg-dark text-warning m-3 p-1"> <?=$captcha?></h3>
                                     <input type="text" name="captcha" pattern="[0-9]{5}" id="captcha" class="form-control" placeholder=" Enter the Captcha" required  maxlength="5">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="cmn-btn active" value="submit now">

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0">
                            <div class="common-form-style bg-one create-account">
                                <h3 class="title">contact info</h3>
                                <p>Feel free to contact us on</p>
                                <ul class="account-item">
                                    <li>162, Modi heights, near Indian bank, MP Nagar Zone-II, India-462011</li>
                                    <li>iiahm.bho@gmail.com</li>
                                    <li>+91 8109520248 ,+91 6265715454</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- footer-section start -->
    <?php include "assets/Content/footer.php";?> 
    <!-- footer-section end -->
    




<!-- jquery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- migarate-jquery -->
<script src="assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- magnific-popup js -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- isotope -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- nice-select js-->
<script src="assets/js/jquery.nice-select.js"></script>
<!-- swipper js -->
<script src="assets/js/swiper.min.js"></script>
<!-- waypoints js link -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- counterup js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- paroller js -->
<script src="assets/js/jquery.paroller.min.js"></script>
<!-- contact-js -->
<script src="assets/js/contact.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>


</body>

<!-- contact.html  30 Nov 2019 03:31:45 GMT -->
</html>
