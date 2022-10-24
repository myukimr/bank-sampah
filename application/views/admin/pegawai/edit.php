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
                        Form Edit Data Pegawai
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($pegawai as $jns):?>
                    <form action="" method="post">
                    <input type="hidden" name="id_pegawai" value="<?= $jns->id_pegawai;?>">
                    
                    <div class="form-group">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                            value="<?=$jns->nama_pegawai;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ttl" name="ttl"
                            value="<?=$jns->ttl;?>">
                    </div>

                    
                    <div class="form-group">
                    <label for="nim">Gender</label>
                    <?php if($jns->jenis_kelamin == "L"): ?>
                      <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" checked>  Laki-Laki
                      </div>
                      <div class="form-check">
                          <input type="radio" name="jenis_kelamin" value="P">  Perempuan
                      </div>
                    <?php else: ?>
                      <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L">  Laki-Laki
                      </div>
                      <div class="form-check">
                          <input type="radio" name="jenis_kelamin" value="P" checked>  Perempuan
                      </div>
                    <?php endif ?>
                  </div>  

                    <div class="form-group">
                            <label for="merk">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"  cols="30" rows="5"  
                           > <?=$jns->alamat;?></textarea>  
                    </div>

                    <div class="form-group">
                            <label for="merk">no_hp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$jns->no_hp;?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("Admin/pegawai");?>" class="btn btn-info">Cancel</a>
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