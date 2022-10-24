 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success"><i class="fas fa-shopping-basket nav-icon"></i> Data Transaksi Donasi </h3>
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
                        Detail Data Transaksi Donasi
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($detail_donasi as $pmj) : ?>
                <div class="card-body">
                <center><img src="<?= base_url('assets/Upload/donasi_image/') . $pmj->foto ?>" style= "width:300px; height:300px;"></center>
                    <p>                
                    <table class="table">
                      <tr>
                        <th>Nama Member</th>
                        <td><?= $pmj->nama ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Donasi</th>
                        <td><?= $pmj->jenis_donasi ?></td>
                      </tr>
                      <tr>
                        <th>Berat</th>
                        <td><?= $pmj->berat ?> kg</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td><?= $pmj->alamat ?></td>
                      </tr>
                      <tr>
                        <th>No Telp</th>
                        <td><?= $pmj->no_hp ?></td>
                      </tr>

                      <tr>
                        <th>Tanggal Donasi</th>
                        <td><?= date('d F Y', strtotime($pmj->tgl_donasi)); ?></td>
                      </tr>

                      <tr>
                        <th>Tanggal Pengambilan</th>
                        <td><?= $pmj->tgl_pengambilan == '0000-00-00' ? 'belum di ambil': date('d F Y', strtotime($pmj->tgl_pengambilan)) ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?= $pmj->status == 'BELUM' ? 'BELUM TERAMBIL' : $pmj->status ?></td>
                      </tr>

                    </table>
                    <br>
                    <a href="<?= base_url("Admin/detail_donasi/");?>" class="btn btn-success">Back</a>
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