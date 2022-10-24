<!DOCTYPE html>
<html lang="en">

<head>
<title>Galery</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <!-- Favicon -->
   <link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/User/style.css';?>">
   <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/classy-nav.css.map';?>">
   <link rel="stylesheet" href="<?php echo base_url().'assets/User/css/bootstrap.min.css';?>">
</head>

<body>

    <?php $this->load->view('User/Template/navbar')?>
        <!-- ##### Breadcrumb Area Start ##### -->
        <div class="breadcrumb-area">
                <!-- Top Breadcrumb Area -->
                <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url().'assets/User/img/bg-img/24.jpg';?>);">
                    <h2>Galery</h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Galery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
        </div>
        <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR Galeri</h2>
                        <p>Kita menyimpan semua foro kegiatan di Galery</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row alazea-portfolio">
                <?php $no=1; foreach ($galeri as $glr): ?>
                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(<?= base_url('assets/Upload/galeri_image/') . $glr->foto ?>);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="<?= base_url('assets/Upload/galeri_image/') . $glr->foto ?>" class="portfolio-img d-flex align-items-center justify-content-center" title=" <?= $glr->judul ?>">
                            <div class="port-hover-text">
                                <h3> <?= $glr->judul ?></h3>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->
    <?php $this->load->view('User/Template/footer')?>
</body> 
  <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url().'assets/User/js/jquery/jquery-2.2.4.min.js ';?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/popper.min.js';?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/bootstrap.min.js';?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url().'assets/User/js/plugins/plugins.js';?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url().'assets/User/js/active.js';?>"></script>
</html>