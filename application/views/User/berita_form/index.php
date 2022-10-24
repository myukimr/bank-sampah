<html lang="en">
<head>
  <title>Berita Form</title>
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
                    <h2>Berita Form</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard';?>"><i class="fa fa-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url().'User/berita';?>">Berita</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Berita Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
        </div>
        <!-- ##### Breadcrumb Area End ##### -->
        <!-- ##### Blog Content Area Start ##### -->
            <section class="blog-content-area section-padding-0-100">
                <?php foreach($berita as $brt):?>
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Blog Posts Area -->
                        <div class="col-12 col-md-8">
                            <div class="blog-posts-area">
                                <!-- Post Details Area -->
                                <div class="single-post-details-area">
                                    <div class="post-content">
                                        <h4 class="post-title"><?= $brt->judul ?></h4>
                                        <div class="post-thumbnail mb-30">
                                            <img src="<?= base_url('assets/Upload/berita_image/') . $brt->foto ?>">
                                        </div>
                                        <p><?= $brt->deskripsi ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
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