<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data User</h1>
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
                        Form Tambah Data User
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                    <label for="nim">Gender</label>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="L" required >  Laki-Laki
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="P" required >  Perempuan
                    </div>
                  </div>
                        
                        <div class="form-group">
                            <label for="nim">No Telp</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                    <label for="nim">Level</label>
                    <div class="form-check">
                        <input type="radio" name="level" value="admin" required>  Admin
                    </div>
                    <div class="form-check">
                        <input type="radio" name="level" value="member" required > Member
                    </div>
                  </div>

                           <div class="form-group">
                    <label for="nim">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" value="aktif" required>  Aktif
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" value="pasif" required> Pasif
                    </div>
                  </div>
                       <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?=base_url("Admin/user");?>" class="btn btn-info">Cancel</a>
                        </form>
                        </div>
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