<?php
include "db/connect.php";
$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);
//$resWeb['']
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Take your maiden flight with IIAHM Aviation Academy! The vision of IIAHM is to mould the youth who are keen to go in the aviation and hospitality industry.">
  <meta name="keywords" content="Aviation, iiahm, JavaScript ,management,iiahm academy, hospitality,diploma,custome servicer,ground staff">
  <link rel="canonical" href="http://www.iiahmaviationacademy.com/">
</head>
<!-- index.html  30 Nov 2019 03:15:44 GMT -->


    <!-- header-section start -->
<?php include "assets/Content/header.php"; ?>
    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="banner-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="banner-content">
                        <h2 class="title"><?=$resWeb['h1text']?></h2>
                        <p><?=$resWeb['subhead']?></p>
                        <div class="btn-area">
                            <a href="contact.php" class="cmn-btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="assets/images/aeroplane.png" alt="image"></a>


    <!-- about-section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/map.png">
        <div class="about-element-one">
            <img src="assets/images/shape.png" alt="image">
        </div>
        <div class="about-element-two my-paroller" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/shape-2.png" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <h2 class="title">Our Methodology</h2>
                        <p><?=$resWeb['paraM'];?></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="about-item">
                                <?=$resWeb['listM'];?>
                                </ul>
                            </div>
                            <!-- <div class="col-lg-6">
                                <ul class="about-item">
                                    <li>Praesent lacus integer.</li>
                                    <li>Fermentum sed duis</li>
                                </ul>
                            </div> -->
                        </div>
                        <a href="<?=$registerLink?>" class="cmn-btn ">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- service-section start -->
    <section class="service-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Our Popular  courses </h2>
                        <span class="title-border"></span>
                        <!-- <p>Dictumst quis dolor fermentum felis id, libero sit suspendisse urna orci bibendum. donec non commodo sagittis sed feugiat aliquet feugiat lobortis</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/images/airindia.jpg" alt="image">
                        </div>
                        <div class="service-content">
                            <h3 class="title">Diploma In Aviation & Hospatility Management</h3>
                            <p>12 months course</p><br><br>
                        </div>
                        <div class="service-overlay">
                            <div class="service-overlay-thumb">
                                <img src="assets/images/airindia.jpg" alt="image">
                                <h3 class="title"><a href="aviation&manage.php">Diploma In Aviation & Hospatility Management</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/images/groundStaff.png" alt="image">
                        </div>
                        <div class="service-content">
                            <h3 class="title">Certification in Ground Staff & Hospatility Management</h3>
                            <p>6 months course</p><br><br>
                        </div>
                        <div class="service-overlay">
                            <div class="service-overlay-thumb">
                                <img src="assets/images/groundStaff.png" alt="image">
                                <h3 class="title"><a href="groundStaff.php">Certification in Ground <br> Staff & Hospatility Management</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/images/greet.jpg" alt="image">
                        </div>
                        <div class="service-content">
                            <h3 class="title">Certification In Grooming,Personality Developmant & Customer Service</h3>
                            <p>3 months course</p>
                        </div>
                        <div class="service-overlay">
                            <div class="service-overlay-thumb">
                                <img src="assets/images/greet.jpg" alt="image">
                                <h3 class="title"><a href="Personality.php">Certification In Grooming,Personality Developmant & Customer Service</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- choose-us-section start -->
    <section class="choose-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 pl-lg-0">
                    <div class="choose-us-thumb"></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="choose-content pt-120 pb-120">
                        <h2 class="title">why people choose IIAHM Aviation academy </h2>
                        <div class="row mb-30-none">
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="choose-item">
                                    <h3 class="title">expert trainer</h3>
                                    <p>Expert trainers</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="choose-item">
                                    <h3 class="title">great history</h3>
                                    <p>We have almost 100% Placement Record</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <div class="choose-item">
                                    <h3 class="title">In-house facilities </h3>
                                    <p>We Provide most of facilities in-house to the students</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 mb-30">
                                <div class="choose-item">
                                    <h3 class="title"></h3>
                                    <p></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30 pt-120 pb-120">
                    <div class="choose-content choose-content--style">
                        <h2 class="title">AFFILIATION</h2>
                        <ul class="choose-item--style">
                  <?=$resWeb['textaff']?>
                        </ul>
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
    <section class="team-section pt-120 pb-120">
        <div class="container">
            <?php include "plugin/getTeam.php";?>
        </div>
    </section>
    <!-- team-section end -->


    <!-- overview-section start -->
    <!-- <section class="overview-section">
       <?php //include "plugin/overview.php"; ?>
    </section> -->
    <!-- overview-section start -->


    <!-- portfolio-section start -->
    <!-- <section class="portfolio-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">our photo gallery</h2>
                        <span class="title-border"></span>
                        <p>Dictumst quis dolor fermentum felis id, libero sit suspendisse urna orci bibendum. donec non commodo sagittis sed feugiat aliquet feugiat lobortis </p>
                    </div>
                </div>
            </div>
            <div class="portfolio-filter-wrapper wow fadeIn" data-wow-duration="2s">
                <div class="button-group filter-btn-group">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".desigen">crew training</button>
                    <button data-filter=".marketing">maintenace</button>
                    <button data-filter=".analysis">private pilot</button>
                    <button data-filter=".research">flying</button>
                </div>
                <div class="grid grid--style">
                    <div class="grid-item grid-item--style marketing analysis">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-1.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item grid-item--style research analysis">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-3.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item grid-item--style marketing analysis">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-5.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item grid-item--style desigen research">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-4.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item grid-item--style marketing analysis">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-6.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item grid-item--style desigen research">
                        <div class="posrt-thumb grid-thumb--style">
                            <img src="assets/images/portfolio-2.png" alt="portfolio image">
                            <div class="project-overlay-text text-center">
                                <h3 class="title"><a href="gallery.html">photo title in here</a></h3>
                                <span>airline courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- portfolio-section end -->


    <!-- call-action-section start -->
    <!-- <section class="call-action-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="call-action-content">
                        <h3 class="title">subscribe our newslaters</h3>
                        <span class="sub-title">get your best printing  services</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="call-action-form">
                        <div class="form-group">
                            <input type="text" name="text" placeholder="Get Services">
                        </div>
                        <button type="submit" class="subscribe-btn"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!-- call-action-section end -->


    <!-- faq-section start -->
    <section class="faq-section pt-120">
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-lg-6 mb-30">
                    <div class="faq-left-content">
                    <?php include "plugin/faq.php" ?>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="faq-thumb">
                        <img src="assets/images/faq.png" alt="image">
                        <div class="video-icon">
                            <a class="popup-youtube mfp-iframe" href="https://www.youtube.com/channel/UCTXuigzlGz3iEKtn0cSSfDQ">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- blog-section start -->
    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">latest blog post</h2>
                        <span class="title-border"></span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="blog-wrapper">
                        <div class="swiper-wrapper">
                          <?php include "plugin/getBlog.php";?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<!-- index.html  30 Nov 2019 03:18:45 GMT -->
</html>
