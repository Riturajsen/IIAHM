<?php

session_start();

// Redirect if user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
    exit();
}

// Suppress error reporting
error_reporting(false);

// Include main PHP file
include "../../core/main.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ERP - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="helper/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="home.php">IIAHM ERP</a>
        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <?php if ($returnAuth['rights'] == 2 || $returnAuth['rights'] == 3) { ?><a href="../app/dashboard.php" class="btn btn-warning">Go To Admin Panel</a><?php } ?>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a href="profile.php" class="dropdown-item"> <?=$returnAuth['fname'];?></a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <?php if ($returnAuth['rights'] == 2 || $returnAuth['rights'] == 3) { ?>
                        <div class="sb-sidenav-menu-heading">Bulk Action</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Upload
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                       
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="uploadStudent.php">Students</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="allot.php" data-bs-toggle="" data-bs-target="" aria-expanded="" aria-controls="">
                            <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                            Assign Calls
                        </a>
                        <a class="nav-link" href="telecallerRep.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Telecaller Report
                        </a>
                        <a class="nav-link" href="dataLogs.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                            Data Sheet
                        </a>

                        
                        <?php } elseif ($returnAuth['rights'] == 4) { ?>
                        <div class="sb-sidenav-menu-heading">Telecaller</div>
                        <a class="nav-link" href="telecallerPanel.php?page=teleTotalData">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                            Close View
                        </a>
                        <a class="nav-link" href="telecallerPanel.php?page=callStart">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-phone"></i></div>
                            Start calling ?
                        </a>
                        <a class="nav-link" href="telecallerPanel.php?page=allCalls">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                            All Data
                        </a>
                        <a class="nav-link" href="telecaller/addNewLead.php?id=<?=$returnAuth['id']?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                            Add Lead
                        </a>
                        <a class="nav-link" href="telecallerPanel.php?page=whatsappSet">
                            <div class="sb-nav-link-icon"><i class="fab fa-whatsapp"></i></div>
                            WhatsApp Setting
                        </a>

                        <!-- Front office -->
                        <?php } if ($returnAuth['rights'] == 5) {?>
                        <a class="nav-link" href="frontdeskPanel.php?page=teleTotalData">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Today's Walk-in
                        </a>
                        <a class="nav-link" href="frontdeskPanel.php?page=callStart">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Create A new Walk-In
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <span class="text-white"> <?=$returnAuth['fname'];?></span>
                </div>
            </nav>
        </div>
   
  
