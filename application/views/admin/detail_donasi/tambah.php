<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Transaksi Donasi</h1>
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
                        Form Tambah Data Transaksi Donasi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post" enctype="multipart/form-data">
                     
                     <div class="form-group">
                         <label for="">Nama Member</label>
                         <select class="form-control"  id="id_user" name="nama">
                          <?php foreach ($user as $j):?>
                            <option value="<?=$j->id_user?>"><?=$j->nama?></option>
                          <?php endforeach ?>
                         </select>
                       </div>
                       

                          
                    
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
                            <input type="number" class="form-control" id="berat" name="berat">
                        </div>

                        <div class="form-group">
                            <label for="nim">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="nim">No Telp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>

                        <!-- <div class="form-group">
                            <label for="nim">Tgl Donasi</label>
                            <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi">
                        </div> -->

                         <div class="form-group">
                            <label for="nim">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>    

                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="http://localhost/bankSampah/detail_donasi" class="btn btn-info">Cancel</a>
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