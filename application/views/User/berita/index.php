<html lang="en">
<head>
<title>Berita</title>
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
                <h2>Berita</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard';?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Breadcrumb Area End ##### -->
    
        <!-- ##### Blog Area Start ##### -->
        <section class="alazea-blog-area mb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <?php $no=1; foreach ($berita as $brt):  ?>
                                <!-- Single Blog Post Area -->
                                <div class="col-12 col-lg-6">
                                    <div class="single-blog-post mb-50">
                                        <div class="post-thumbnail mb-30">
                                            <a href="<?= base_url().'User/berita_form/index/'.$brt->id_berita ?>"><img src="<?= base_url('assets/Upload/berita_image/') . $brt->foto ?>"style= "width:800px; height:250px;"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="<?= base_url().'User/berita_form/index/'.$brt->id_berita ?>">
                                                <h5><?= $brt->judul ?></h5>
                                            </a>
                                            <div class="post-meta">
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $brt->tgl_kegiatan ?></a>
                                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Admin</a>
                                            </div>
                                            <p class="post-excerpt">
                                                <?= $brt->deskripsi?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Blog Area End ##### -->
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