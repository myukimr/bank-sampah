<html lang="en">
<head>
  <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">
    
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/style.css';?>">
</head>   
<body>
        <?php $this->load->view('User/Template/navbar')?>
 <!-- ##### Breadcrumb Area Start ##### -->
 <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url().'assets/User/img/bg-img/24.jpg';?>);">
            <h2>Studi Banding</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'User/dashboard';?>"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'User/program';?>">Program</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Studi Banding</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">Studi Banding</h4>
                                <p>Kegiatan studi banding bank sampah malang merupakan kegiatan yang bertujuan untuk menambah wawasan dan pengetahuan bagi masyarakat umum yang ingin mempelajari seluruh aktivitas yang ada di bank sampah malang. </p>                      
                                <div class="post-thumbnail mb-30">
                                    <img src="<?php echo base_url().'assets/User/img/bg-img/studi_b1.png';?>" alt="">
                                </div>
                                <p>Kegiatan studi banding bank sampah malang merupakan kegiatan yang bertujuan untuk menambah wawasan dan pengetahuan bagi masyarakat umum yang ingin mempelajari seluruh aktivitas yang ada di bank sampah malang. </p>
                                <div class="post-thumbnail mb-30">
                                    <img src="<?php echo base_url().'assets/User/img/bg-img/studi_b2.png';?>" alt="">
                                </div>
                                <p>Peserta yang sudah melakuakan studi banding di bank sampah malang berasal dari hampir seluruh wilayah indonesia yang mewakili provinsi, kab./kota, ataupun kelurahan/desa.</p>
                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <ol class="popular-tags d-flex align-items-center flex-wrap">
                                <li><span>Tag:</span></li>
                                <li><a href="<?php echo base_url().'User/pendampingan';?>">Pendampingan</a></li>
                                <li><a href="<?php echo base_url().'User/workshop';?>">Workshop</a></li>
                                <li><a href="<?php echo base_url().'User/daur_ulang';?>">Daur Ulang</a></li>
                                <li><a href="<?php echo base_url().'User/pelatihan';?>">Pelatihan</a></li>
                            </ol>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
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