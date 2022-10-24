 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">  <i class="fas fa-money-bill-wave-alt nav-icon"></i> Data Poin </h3>
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
                        Detail Data Poin
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
               <?php $no=1; foreach ($poin as $pmj): ?>
                <div class="card-body">
                 
                    <table class="table">
                      <tr>
                        <th>Nama</th>
                        <td><?= $pmj->nama?></td>
                      </tr>
                      <tr>
                        <th>Total Poin</th>
                        <td><?= $pmj->total_poin ?></td>
                      </tr>
                    </table>
                    <br>
                    <a href="<?= base_url("Admin/poin/");?>" class="btn btn-success">Back</a>
                  </div>
                <?php endforeach ?>
                </div>
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