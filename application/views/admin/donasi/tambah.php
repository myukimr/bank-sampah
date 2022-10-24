<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Donasi</h1>
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
                        Form Tambah Data Donasi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                     
                     <div class="form-group">
                         <label for="">Nama Member</label>
                         <select class="form-control"  id="id_user" name="nama">
                          <?php foreach ($user as $j):?>
                            <option value="<?=$j->id_user?>"><?=$j->nama?></option>
                          <?php endforeach ?>
                         </select>
                       </div>


                       
                       <div class="form-group">
                         <label for="">Pegawai yang mengambil</label>
                         <select class="form-control"  id="id_pegawai" name="nama_pegawai">
                          <?php foreach ($pegawai as $j):?>
                            <option value="<?=$j->id_pegawai?>"><?=$j->nama_pegawai?></option>
                          <?php endforeach ?>
                         </select>
                       </div>

                    

                        <div class="form-group">
                            <label for="nim">Tanggal Donasi</label>
                            <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi">
                        </div>

                        <div class="form-group">
                            <label for="nim">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tgl_pengambilan" name="tgl_pengambilan">
                        </div>

                        <div class="form-group">
                    <label for="nim">Status</label>
                    <div class="form-check">
                        <input type="radio" name="status" value="TERAMBIL">  TERAMBIL
                    </div>
                    <div class="form-check">
                        <input type="radio" name="status" value="BELUM">  BELUM
                    </div>
                  </div>
                        
                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="http://localhost/bankSampah/donasi" class="btn btn-info">Cancel</a>
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