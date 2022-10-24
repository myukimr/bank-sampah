 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success"><i class="nav-icon fas fa-users"></i> Data User</h3>
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
                        Detail Data User
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
               <?php $no=1; foreach ($user as $pmj): ?>
                <div class="card-body">
                 
                    <table class="table">
                      <tr>
                        <th>Nama</th>
                        <td><?= $pmj->nama?></td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td><?= $pmj->alamat ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?= $pmj->jenis_kelamin ?></td>
                      </tr>
                      <tr>
                        <th>No Telp</th>
                        <td><?= $pmj->no_hp ?></td>
                      </tr>
                    
                      <tr>
                        <th>Username</th>
                        <td><?= $pmj->username ?></td>
                      </tr>

                      <tr>
                        <th>password</th>
                        <td><?= $pmj->password ?></td>
                      </tr>

                      <tr>
                        <th>Level</th>
                        <td><?= $pmj->level ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?= $pmj->status ?></td>
                      </tr>
                    
                    </table>
                    <br>
                    <a href="<?= base_url("Admin/user")?>" class="btn btn-success">Back</a>
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