 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">   <i class="nav-icon fas fa-newspaper"></i> Data Berita </h3>
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
                        Detail Data Berita
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($berita as $pmj) : ?>
                <div class="card-body">
                <center><img src="<?= base_url('assets/Upload/berita_image/') . $pmj->foto ?>" style= "width:300px; height:300px;"></center>
                  
                    <p>                
                    <table class="table">
                      <tr>
                        <th>Judul</th>
                        <td><?= $pmj->judul ?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Kegiatan</th>
                        <td><?= date('d F Y', strtotime($pmj->tgl_kegiatan)); ?></td>
                      </tr>
                      <tr>
                        <th>Deskripsi</th>
                        <td><?= $pmj->deskripsi ?></td>
                      </tr>
                    </table>
                    <br>
                    <a href="<?= base_url("Admin/berita/")?>" class="btn btn-success">Back</a>
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