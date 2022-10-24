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
                        Form Edit Data Pengambilan Donasi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($donasi as $jns):?>
                    <form action="" method="post">
                    <input type="hidden" name="id_donasi" value="<?= $jns->id_donasi;?>">
                    <input type="hidden" name="id_user" value="<?= $jns->id_user;?>">


                    <div class="form-group">
                            <label for="id_user">Nama Pegawai</label>
                            <select class="form-control" name="id_pegawai" id="id_pegawai">
                            <?php foreach($pegawai as $j):?>
                           <option value="<?=$j->id_pegawai?>"><?=$j->nama_pegawai?></option>
                           <?php endforeach ?>
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="merk">Tanggal Donasi</label>
                            <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi"
                            value="<?=$jns->tgl_donasi;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tgl_pengambilan" name="tgl_pengambilan"
                            value="<?=$jns->tgl_donasi;?>">
                    </div>

                    <div class="form-group">
                    <label for="nim">Status</label>
                    <?php if($jns->status == "TERAMBIL"): ?>
                      <div class="form-check">
                            <input type="radio" name="status" value="terambil" checked>  TERAMBIL
                      </div>
                      <div class="form-check">
                          <input type="radio" name="status" value="belum"> BELUM TERAMBIL
                      </div>
                    <?php else: ?>
                      <div class="form-check">
                            <input type="radio" name="status" value="terambil">  TERAMBIL
                      </div>
                      <div class="form-check">
                          <input type="radio" name="status" value="belum" checked>  BELUM TERAMBIL
                      </div>
                    <?php endif ?>
                  </div>  

                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?= base_url("Admin/donasi/");?>" class="btn btn-info">Cancel</a>
                        </form>
                        <?php endforeach ?>
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