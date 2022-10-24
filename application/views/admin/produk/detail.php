 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">     <i class="nav-icon fab fa-product-hunt"></i></i> Data Produk </h3>
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
                        Detail Data Produk
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($produk as $pmj) : ?>
                <div class="card-body">
                <center><img src="<?= base_url('assets/Upload/produk_image/') . $pmj->foto ?>" style= "width:300px; height:300px;" ></td></center>
                    <p>                
                    <table class="table">
                      <tr>
                        <th>Nama</th>
                        <td><?= $pmj->nama ?></td>
                      </tr>
                      <tr>
                        <th>Deskripsi</th>
                        <td><?= $pmj->deskripsi ?></td>
                      </tr>
                    </table>
                    <br>
                    <a href="<?= base_url("Admin/produk/");?>" class="btn btn-success">Back</a>
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