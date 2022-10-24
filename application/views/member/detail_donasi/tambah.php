<title>Halaman Tambah Donasi Member</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">   <i class="fas fa-hand-holding-heart nav-icon"></i> Donasi</h3>
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
  <p>Anda dapat menambahkan donasi dengan memasukkan data donasi Anda di sini</p>
  <hr>
</div>
              <div class ="card">
              <div class="card-header">
                        Form Tambah Donasi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post" enctype="multipart/form-data">
                                 
                    
                       <div class="form-group">
                    <label for="nim">Jenis Donasi</label>
                    <div class="form-check">
                        <input type="radio" name="jenis_donasi" value="terpakai">  TERPAKAI
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_donasi" value="tidak terpakai"> TIDAK TERPAKAI
                    </div>
                  </div>
  

                        <div class="form-group">
                            <label for="nim">Berat</label>
                            <p>
                            <small>*Masukkan dengan satuan Kilogram</small>
                            <input type="number" class="form-control" id="berat" name="berat">
                        </div>

                        <div class="form-group">
                            <label for="nim">Alamat Pengambilan</label>
                            
                            <textarea name="alamat" id="alamat" cols="30" rows="" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="nim">No Telp yang dapat di hubungi</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp">
                        </div>

                        <!-- <div class="form-group">
                            <label for="nim">Tgl Donasi</label>
                            <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi">
                        </div> -->

                         <div class="form-group">
                            <label for="nim">Foto Bukti Donasi</label>
                            <p>
                            <small>*Masukkan Foto Donasi Anda</small>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>    

                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <!-- <a href="http://localhost/bankSampah/detail_donasi_member" class="btn btn-info">Cancel</a> -->
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