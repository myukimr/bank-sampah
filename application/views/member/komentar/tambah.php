<title>Halaman Komentar Member</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">  <i class="fas fa-envelope"></i> Komentar</h3>
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
         
          <div class="alert alert-success" role="alert">
  <p>Anda dapat menambahkan saran, kritik, atau masukkan kepada Lembaga Bank Sampah kami melalui form komentar ini</p>
  <hr>
</div>
              <div class ="card">
                    <div class="card-header">
                        Form Tambah Komentar
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">

                        
                       <div class="form-group">
                            <label for="nim">Komentar</label>
                            <textarea name="komentar" id="komentar" cols="80" rows="5" class="form-control"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
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