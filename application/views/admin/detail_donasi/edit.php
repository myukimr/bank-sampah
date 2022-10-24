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
                        Form Edit Data Transaksi Donasi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($detail_donasi as $jns):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_detail_donasi" value="<?= $jns->id_detail_donasi;?>">
                    <input type="hidden" name="id_donasi" value="<?= $jns->id_donasi;?>">
                    <input type="hidden" name="id_user" value="<?= $jns->id_user;?>">
                        
                    <div class="form-group">
                    <label for="nim">Jenis Donasi</label>
                    <?php if($jns->jenis_donasi == "terpakai"): ?>
                      <div class="form-check">
                            <input type="radio" name="jenis_donasi" value="terpakai" checked>  TERPAKAI
                      </div>
                      <div class="form-check">
                          <input type="radio" name="jenis_donasi" value="tidak terpakai"> TIDAK TERPAKAI
                      </div>
                    <?php else: ?>
                      <div class="form-check">
                            <input type="radio" name="jenis_donasi" value="terpakai">  TERPAKAI
                      </div>
                      <div class="form-check">
                          <input type="radio" name="jenis_donasi" value="tidak" checked>  TIDAK TERPAKAI
                      </div>
                    <?php endif ?>
                  </div>     

                    <div class="form-group">
                            <label for="merk">Berat</label>
                            <input type="number" class="form-control" id="berat" name="berat"
                            value="<?=$jns->berat;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"  cols="30" rows="5"  
                           > <?=$jns->alamat;?></textarea>  
                    </div>

                    <div class="form-group">
                            <label for="merk">Nomor yang dapat di hubungi</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp"
                            value="<?=$jns->no_hp;?>">
                    </div>


                    <div class="form-group">
                            <label for="merk">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                            value="<?=$jns->foto;?>">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?= base_url("Admin/detail_donasi/");?>" class="btn btn-info">Cancel</a>
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