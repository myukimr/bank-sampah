 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">     <i class="nav-icon fas fa-camera"></i> Data Galeri </h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card">
                    <div class="card-header">
                        Detail Data Galeri
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($galeri as $pmj) : ?>
                <div class="card-body">
                <center><h2><?= $pmj->judul ?></h2></center>
                <center><img src="<?= base_url('assets/Upload/galeri_image/') . $pmj->foto ?>" style= "width:1000px; height:500px;"></center>
                    <br>
                    <a href="<?= base_url("Admin/galeri")?>" class="btn btn-success">Back</a>
                  </div>
                <?php endforeach ?>
           
                <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>