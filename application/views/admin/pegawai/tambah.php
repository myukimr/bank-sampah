<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pegawai</h1>
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
                        Form Tambah Data Pegawai
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
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                        </div>

                        <div class="form-group">
                            <label for="nim">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ttl" name="ttl"required>
                        </div>

                        <div class="form-group" >
                    <label for="nim">Gender</label>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="L"required>  Laki-Laki
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="P" required>  Perempuan
                    </div>
                  </div>
                        

                       <div class="form-group">
                            <label for="nim">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="nim">No Telp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("Admin/pegawai");?>" class="btn btn-info">Cancel</a>
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