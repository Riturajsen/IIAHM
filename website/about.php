<?php
include "db/connect.php";
$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);
//$resWeb['']
?>
<!DOCTYPE html>
<html lang="en">

<!-- about.html  30 Nov 2019 03:28:18 GMT -->


    <!-- header-section start -->
   
<?php include "assets/Content/header.php"; ?>
    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">About</h2>
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
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                        <h2 class="title">worldwide training partner of choice</h2>
                        <p>Ascertaining client needs and expectations Designing methodologies to match these needs and expectations Assigning the appropriate consulting and training experts for the assignment Creating customized training manuals.
                        </p><p>
                        We proudly introduce ourselves as one of the emerging Institute for Air Hostess training in Bhopal & Indore and Personality Development. In fact we are proud to say that we are the pioneers in organizing campus selections. IIAHM offers most alluring career with Aviation courses in Bhopal and Indore.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="about-item">
                                    <li>Over All Development.</li>
                                    <li>Guarantee Placement.</li>
                                </ul>
                            </div>
                        </div>
                        <a href="registerS.php" class="cmn-btn">Register</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="overview-thumb">
                        <img src="assets/images/faq.png" alt="image">
                        <div class="video-icon">
                            <a class="popup-youtube mfp-iframe" href="https://www.youtube.com/watch?v=0O2aH4XLbto">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="counter-area counter-area--style">
                <div class="row mb-30-none">
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">2596</span>
                            <h3 class="counter-content">happy client</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">8547</span>
                            <span class="counter-content">total straf</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">175</span>
                            <span class="counter-content">international award</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">4547</span>
                            <span class="counter-content">total aircraft couses</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- overview-section start -->
    


    <!-- choose-us-section start -->
    <section class="choose-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30 pt-120 pb-120">
                    <div class="choose-content choose-content--style">
                        <h2 class="title">we get good achived last  years</h2>
                        <p>We at IIAHM, aim at giving quality Aviation training in Bhopal to the youth who are passionate to enter this glamorous industry. Not only training, IIAHM strives at giving placement to the students domestically and also internationally, where the pay scale can reach up to 4 Lakhs per month. And for achieving this we are continuously having more and more tie-ups with the leaders in the segment.<br>

                            Apart from this if we talk about the training part, we follow the international standards without any compromises, where the focus is not only to attain the theoretical training but also on the practical aspect.<br>

                            Additionally, with our Air Hostess training in Bhopal and other courses, trainees are provided with various facilities, like an internship, airport visits, overall personality development including fitness training, nutrition assistance, a complete set of western formal attire, swimming classes, and stroller the list goes on.</p>
                        <!-- <ul class="choose-item--style"> -->
                            <!-- <li></li>
                            <li></li>
                            <li></li> -->
                        <!-- </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-lg-0">
                    <div class="choose-us-thumb--style"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->


    <!-- team-section start -->
    <section class="team-section team-section--style pt-120 pb-120">
        <div class="container">
           <?php include "plugin/getTrainers.php";?>
        </div>
    </section>
    <!-- team-section end -->

    

    <!-- client-section start -->
    <section class="client-section bg_img " data-background="assets/images/testimonial-bg.png">
  
    <h3 class="text-center white-icon  pt-80"> <u>What Our students think about us ?</u></h3>
        <div class="container white-icon pt-80 pb-120">
            <?php include "plugin/testimonial/index.php"; ?>
           
        </div>
    </section>
    <!-- client-section end -->


    <!-- blog-section start -->
    <!-- <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">latest blog post</h2>
                        <p</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                    <div class="blog-thumb--style">
                        <img src="assets/images/Founder.jpg" alt="image">
                    </div>
                    <div class="blog-content--style">
                        <h3 class="title">This is New Blog</h3>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <span class="meta-user">post by Admin</span>
                            <span class="meta-user">25 Dec 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- blog-section end -->


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

<!-- about.html  30 Nov 2019 03:28:18 GMT -->
</html>

