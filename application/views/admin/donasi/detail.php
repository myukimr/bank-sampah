 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success"><i class="fas fa-shopping-basket nav-icon"></i> Data Pengambilan Donasi </h3>
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
                        Detail Data Pengambilan Donasi
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($donasi as $pmj) : ?>
                <div class="card-body">
                    <p>                
                    <table class="table">
                      <tr>
                        <th>Nama Member</th>
                        <td><?= $pmj->nama ?></td>
                      </tr>
                      <tr>
                        <th>Pegawai yang mengambil</th>
                        <td><?= $pmj->tgl_pengambilan == '0000-00-00' ? 'belum ada': $pmj->nama_pegawai ?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Donasi</th>
                        <td><?= date('d F Y', strtotime($pmj->tgl_donasi)); ?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Pengambilan</th>
                        <td><?= $pmj->tgl_pengambilan == '0000-00-00' ? 'belum ada': $pmj->nama_pegawai ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?= $pmj->status == 'BELUM' ? 'BELUM TERAMBIL' : $pmj->status ?></td>
                      </tr>
                    </table>
                    <br>
                    <a href="<?= base_url("Admin/donasi/");?>" class="btn btn-success">Back</a>
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