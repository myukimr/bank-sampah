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
                        Form Edit Data Poin
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($poin as $jns):?>
                    <form action="" method="post">
                    <input type="hidden" name="id_poin" value="<?= $jns->id_poin;?>">
                    <input type="hidden" name="id_user" value="<?= $jns->id_user;?>">

                
                    <div class="form-group">
                            <label for="merk">Total Poin</label>
                            <input type="text" class="form-control" id="total_poin" name="total_poin"
                            value="<?=$jns->total_poin;?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?= base_url("Admin/poin/");?>" class="btn btn-info">Cancel</a>
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