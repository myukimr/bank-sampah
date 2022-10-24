  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Berita</h1>
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
                        Form Edit Data Berita
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                      <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                      </div>  
                    <?php endif; ?>
                    <?php foreach($berita as $jns):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_berita" value="<?= $jns->id_berita;?>">
                    
                    <div class="form-group">
                            <label for="merk">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                            value="<?=$jns->judul;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan"
                            value="<?=$jns->tgl_kegiatan;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"  cols="30" rows="5"  
                           > <?=$jns->deskripsi;?></textarea>  
                    </div>
                    
                    <div class="form-group">
                            <label for="merk">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                            value="<?=$jns->foto;?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("Admin/berita");?>" class="btn btn-info">Cancel</a>
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