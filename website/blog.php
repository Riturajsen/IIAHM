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
   
<?php
include "db/connect.php";
$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);
include "assets/Content/header.php"; ?>
    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">blog post </h2>
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
                <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- blog-section start -->
    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                
<?php
include ('db/connect.php');
$ret = mysqli_query($conn , "SELECT * FROM blog ORDER BY id DESC");
if(mysqli_num_rows($ret) > 0) {

  while ($row=mysqli_fetch_array($ret)){
?>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                    <div class="blog-thumb--style">
                        <img src="https://app.iiahmaviationacademy.com/blog/blogimg/<?=$row['img']?>" alt="image">
                    </div>
                    <div class="blog-content--style">
                        <h3 class="title"><a href="blog-details.html"><?=$row['title']?></a></h3>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <!-- <span class="meta-user">post by Admin</span>
                            <span class="meta-user">25 Dec 2019</span> -->
                        </div>
                    </div>
                </div>
               <?php } }else { echo "No Blog Posted";}?>
             
         
             
             
          
            </div>
            <div class="row justify-content-center mt-60">                
                <ul class="pagination">
                    <li><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                </ul>
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

<!-- blog-1.html  30 Nov 2019 03:30:24 GMT -->
</html>
