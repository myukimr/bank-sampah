<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Poin</h1>
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
                        Form Tambah Data Poin
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        
                    <div class="form-group">
                         <label for="">Nama</label>
                         <select class="form-control"  id="id_user" name="nama">
                          <?php foreach ($user as $j):?>
                            <option value="<?=$j->id_user?>"><?=$j->nama?></option>
                          <?php endforeach ?>
                         </select>
                       </div>

                        <div class="form-group">
                            <label for="nim">Total Poin</label>
                            <input type="number" class="form-control" id="total_poin" name="total_poin">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="http://localhost/bankSampah/poin" class="btn btn-info">Cancel</a>
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