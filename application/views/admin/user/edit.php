<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">     
     <!-- Content Wrapper. Contains page content -->
                      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Admin dan Pengguna</h1>
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
                        Form Edit Data User
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($user as $jns):?>
                    <form action="" method="post">
                    <input type="hidden" name="id_user" value="<?= $jns->id_user;?>">
                    
                    <div class="form-group">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                            value="<?=$jns->nama;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"  cols="30" rows="5"  
                           > <?=$jns->alamat;?></textarea>  
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
                            <label for="merk">No Telp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                            value="<?=$jns->no_hp;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                            value="<?=$jns->username;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                            value="<?=$jns->password;?>">
                    </div>


                    <div class="form-group">
                    <label for="nim">Level</label>
                    <?php if($jns->level == "admin"): ?>
                      <div class="form-check">
                            <input type="radio" name="level" value="admin" checked>  Admin
                      </div>
                      <div class="form-check">
                          <input type="radio" name="level" value="member">  Member
                      </div>
                    <?php else: ?>
                      <div class="form-check">
                            <input type="radio" name="level" value="admin">  Admin
                      </div>
                      <div class="form-check">
                          <input type="radio" name="level" value="member" checked>  Member
                      </div>
                    <?php endif ?>
                  </div>  

                    <div class="form-group">
                    <label for="nim">Status</label>
                    <?php if($jns->status == "aktif"): ?>
                      <div class="form-check">
                            <input type="radio" name="status" value="aktif" checked>  Aktif
                      </div>
                      <div class="form-check">
                          <input type="radio" name="status" value="pasif">  Pasif
                      </div>
                    <?php else: ?>
                      <div class="form-check">
                            <input type="radio" name="status" value="aktif">  Aktif
                      </div>
                      <div class="form-check">
                          <input type="radio" name="status" value="pasif" checked>  Pasif
                      </div>
                    <?php endif ?>
                  </div>    
                       
                  
                       <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?=base_url("Admin/user");?>" class="btn btn-info">Cancel</a>
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