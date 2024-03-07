<?php
error_reporting(false);
include "../../db/connect.php";  

$queryWebSet = "SELECT * From websitesetting where id=1";
$retWeb = mysqli_query($conn , $queryWebSet);
$resWeb = mysqli_fetch_assoc($retWeb);

$registerLink = "https://form.iiahmaviationacademy.com/?utm_source=website_rgstr_btn&utm_target=student";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IIAHM - Aviation Academy <?=$_GET['page-name']?></title>
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/IIAHM.png" type="image/x-icon">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


    <!-- preloader -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-thumb">
            <img src="assets/images/propeller.png" alt="image">
        </div>
    </div> -->
    <div class="bg-danger text-center p-3">
    <a href="#"><h4 class="text-white"> <?=$resWeb['scrollert']?> </h4> </a>
                </div>
<header class="header-section">
        <div class="header-top d-none d-xl-block">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-10">
                        <div class="header-wrapper">
                            <div class="header-info">
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Corp. Office</h6>
                                        <span><?=$resWeb['adress']?></span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">email address</h6>
                                        <span><a href="mailto:<?=$resWeb['email']?>"><?=$resWeb['email']?></a></span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Phone</h6>
                                        <span><?=$resWeb['ContactNo']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <!-- <div class="language-select-list d-flex flex-wrap">
                            
                            <div class="language-select">
                                <select class="select-bar">
                                    <option data-display="English">English</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <a class="site-logo site-title" href="index.php"><img src="https://app.iiahmaviationacademy.com/assets/images/logo.jpg" alt="site-logo"></a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li class="menu_has_children"><a href="index.php">Home</a>
                                </li>
                                <li><a href="about.php">About</a></li>
                                <li class="menu_has_children"><a href="#0">Course<i class="fas fa-caret-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="aviation&manage.php">Diploma In Aviation & Hospatility Management</a></li>
                                        <li><a href="groundStaff.php">Certification In Ground Staff & Hospatility Management</a></li>
                                        <li><a href="Personality.php">Certification In Grooming,Personality Developmant & Customer Service</a></li>
                                    </ul>
                                </li>
                                <li class="menu_has_children"><a href="blog.php">Blog</a>
                                
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                            <div class="header-action d-flex flex-wrap align-items-center">
                                <a href="<?=$registerLink?>" class="cmn-btn">Register</a>
                            </div>                    
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>