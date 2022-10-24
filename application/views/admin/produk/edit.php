     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Produk</h1>
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
                        Form Edit Data Produk
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($produk as $jns):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_produk" value="<?= $jns->id_produk;?>">
                    
                    <div class="form-group">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                            value="<?=$jns->nama;?>">
                    </div>

                      
                    <div class="form-group">
                            <label for="merk">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            value="<?=$jns->deskripsi;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                            value="<?=$jns->foto;?>">
                    </div>
                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?= base_url("Admin/produk");?>" class="btn btn-info">Cancel</a>
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