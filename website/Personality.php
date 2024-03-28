<?php
include "db/connect.php";
$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);
//$resWeb['']
?>
<!DOCTYPE html>
<html lang="en">


    <!-- header-section start -->
   
<?php include "assets/Content/header.php"; ?>
    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">Personality Development</h2>
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
                <li class="breadcrumb-item active" aria-current="page">Grooming & Personality Development</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- overview-section start -->
    <section class="overview-section--style pt-120 pb-120">
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-lg-6 mb-30">
                    <div class="overview-content--style">
                        <h2 class="title">Certification in Grooming, Personality Development</h2>
                        <p> <span class="text-danger">3 months course :</span>  Personality development is the relatively enduring pattern of the thoughts, feelings, and behaviours that distinguish individuals from one another. The dominant view in the field of personality psychology today holds that personality emerges early and continues to change in meaningful ways throughout the lifespan.</p>
                  
                        <!-- <a href="myaccount.html" class="cmn-btn">Become a pilot</a> -->
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="overview-thumb--style4"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-section start -->


    <!-- overview-section start -->
    
    <!-- overview-section start -->


    <!-- faq-section start -->
    
    <!-- faq-section end -->
    


    <!-- footer-section start -->
    <?php include "assets/Content/footer.php"; ?>
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
<!-- main -->
<script src="assets/js/main.js"></script>


</body>

</html>
