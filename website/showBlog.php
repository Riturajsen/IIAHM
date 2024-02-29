<!DOCTYPE html>
<html lang="en">
<?php include "assets/Content/header.php";
$id = $_GET['id'];
include ('db/connect.php');
$ret = mysqli_query($conn , "SELECT * FROM blog where id=$id");
if(mysqli_num_rows($ret) > 0) {
    $row=mysqli_fetch_assoc($ret)

?>

    <!-- header-section end -->


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">blog single</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="../assets/images/aeroplane.png" alt="image"></a>

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="blog.php">Blog Post</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$row['title']?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- blog-section start -->
    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-8">
                    <div class="blog-item mb-60">
                        <div class="blog-thumb--style2">
                            <img src="https://app.iiahmaviationacademy.com/blog/blogimg/<?=$row['img']?>" alt="blog image">
                          
                        </div>
                        <div class="blog-content--style2 blog-content--style3">
                            <h3 class="title"><?=$row['title']?></h3>
                            <div class="meta-post d-flex flex-wrap">
                                <div class="meta-user">
                                    <a href="#"><span>by <?=$row['poated_by']?></span></a>
                                </div>
                            </div>
                        
                          <p><?=$row['blog']?></p>
                        </div>
                    </div>
         
             
                </div>
            
            </div>
        </div>
    </section>
    <!-- blog-section end -->


    <!-- footer-section start -->
    <?php } else { echo "No Blogs Found"; } include "assets/Content/footer.php"; ?>  
    <!-- footer-section end -->
    




<!-- jquery -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!-- migarate-jquery -->
<script src="../assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- magnific-popup js -->
<script src="../assets/js/jquery.magnific-popup.js"></script>
<!-- isotope -->
<script src="../assets/js/isotope.pkgd.min.js"></script>
<!-- nice-select js-->
<script src="../assets/js/jquery.nice-select.js"></script>
<!-- swipper js -->
<script src="../assets/js/swiper.min.js"></script>
<!-- waypoints js link -->
<script src="../assets/js/jquery.waypoints.min.js"></script>
<!-- counterup js -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<!-- paroller js -->
<script src="../assets/js/jquery.paroller.min.js"></script>
<!-- main -->
<script src="../assets/js/main.js"></script>


</body>

<!-- blog-details.html  30 Nov 2019 03:31:43 GMT -->
</html>
