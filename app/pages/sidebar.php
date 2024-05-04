<!-- // Rights
// 0 = User
// 1 = Editor
// 2 = Admin 
   3 = Super Admin  
   4 = telecaller
   5 = FrontDesk
   6 = Counselor
-->

<ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <form method="POST" action="../erp/index.php" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu"><input type="hidden" name="secure_id" value="<?=$_SESSION['secure_id']?>" id=""></span><input type="submit" class="btn" value="Go to ERP"></form>
                        </li>
              
                                               <?php if($rights == 1 || $rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=form" aria-expanded="false"><i class="mdi me-2 mdi-forum"></i><span
                                    class="hide-menu">Form Entries</span></a></li>';} ?>
                                <?php if($rights == 1 || $rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=job-post" aria-expanded="false"><i class="mdi me-2 mdi-briefcase-check"></i><span
                                    class="hide-menu">Job Posting</span></a></li>';} ?>
                                      <?php if($rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=testimonial" aria-expanded="false"><i class="mdi me-2 mdi-briefcase-check"></i><span
                                    class="hide-menu">testimonial</span></a></li>';} ?>
                        <?php if($rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=Add_Admin" aria-expanded="false"><i class="mdi me-2 mdi-account-key"></i><span
                                    class="hide-menu">Add Admin</span></a></li>';} ?>    

                         <?php if($rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=coreSet" aria-expanded="false"><i class="mdi me-2 mdi-wrench"></i><span
                                    class="hide-menu">Core Setting</span></a></li>';} ?>  
                                    
                        <?php if($rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=placementPics" aria-expanded="false"><i class="mdi me-2 mdi-image-multiple"></i><span
                                    class="hide-menu">Placement Gallery </span></a></li>';} ?>     

                                     <?php if($rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=Website_edit" aria-expanded="false"><i class="mdi me-2 mdi-sitemap"></i><span
                                    class="hide-menu">Edit Website</span></a></li>';} ?>  
                                    <?php if($rights == 1 | $rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=trainers" aria-expanded="false"><i class="mdi me-2 mdi-human-male"></i><span
                                    class="hide-menu">Edit trainers</span></a></li>';} ?>       
                                        <?php if($rights == 1 || $rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=blogs" aria-expanded="false"><i class="mdi me-2 mdi-blogger"></i><span
                                    class="hide-menu">Blogs</span></a></li>';} ?>          
                        
                        <!-- <?php if($rights == 1 || $rights == 2 || $rights == 3){ echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php?page-name=Add_page" aria-expanded="false"><i class="mdi me-2 mdi-book"></i><span
                                    class="hide-menu">Create Page</span></a></li>';} ?> -->
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="html/icon-material.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Icon</span></a></li>
                      
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="html/pages-blank.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-error-404.html" aria-expanded="false"><i class="mdi me-2 mdi-help-circle"></i><span
                                    class="hide-menu">Error 404</span></a>
                        </li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../logout.php" aria-expanded="false"><i class="mdi me-2 mdi-logout"></i><span
                                    class="hide-menu">Logout</span></a></li>
                      
                    </ul>