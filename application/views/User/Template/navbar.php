<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/style.css';?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/animate.css';?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/classy-nav.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/elegant-icon.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/font-awesome.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/magnific-popup.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/owl.carousel.min.css';?>">

</head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="<?php echo base_url().'assets/User/img/core-img/leaf.png ';?>" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#"title=" banksampahmalang123@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email:  banksampahmalang123@gmail.com</span></a>
                                <a href="#"data-placement="bottom" title="(+62) 85204444886 "><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: (+62) 85204444886</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Login -->
                                <div class="login">
                                    <a href="<?php echo base_url().'Admin/login';?>"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="<?php echo base_url().'dashboard';?>" class="nav-logo mb-20"><img src="<?php echo base_url().'assets/User/img/bg-img/logo_kami.png';?>" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo base_url().'User/dashboard';?>">Home</a></li>
                                    <li><a href="<?php echo base_url().'User/profile';?>">Profile</a></li>
                                    <li><a href="#">Program</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url().'User/pendampingan';?>">Pendampingan</a></li>
                                            <li><a href="<?php echo base_url().'User/studi';?>">Studi Banding</a></li>
                                            <li><a href="<?php echo base_url().'User/workshop';?>">Workshop</a></li>
                                            <li><a href="<?php echo base_url().'User/daur_ulang';?>">Daur Ulang</a></li>
                                            <li><a href="<?php echo base_url().'User/pelatihan';?>">Pelatihan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url().'User/berita';?>">Berita</a></li>
                                    <li><a href="<?php echo base_url().'User/galeri';?>">Galery</a></li>
                                </ul>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
   
</body>

 
</html>