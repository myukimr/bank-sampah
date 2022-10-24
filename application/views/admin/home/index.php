<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
     
           <h3 class="m-0 text-success">  <i class="nav-icon fas fa-chart-line"></i> Dashboard</h3>
           <div class="row">
  <div class="col-lg-5 col-xs-10">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
      <h3>
          <?php echo $this->db->get('Donasi')->num_rows() ?>
        </h3>
        <p>Pengambilan Donasi</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="<?php echo base_url().'Admin/donasi' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
        <?php echo $this->db->get('galeri')->num_rows() ?>
      </h3>
      <p>Galeri</p>
    </div>
    <div class="icon">
      <i class="ion ion-camera"></i>
    </div>
    <a href="<?php echo base_url().'Admin/galeri' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->

<!-- ./col -->
<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('detail_donasi')->num_rows() ?>
    <h3>
      <p>Transaksi Donasi</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="<?php echo base_url().'Admin/detail_donasi' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->

<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('poin')->num_rows() ?>
    <h3>
      <p>Poin</p>
    </div>
    <div class="icon">
    <i class="ion ion-ribbon-b"></i>
    </div>
    <a href="<?php echo base_url().'Admin/poin' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>


<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('pegawai')->num_rows() ?>
    <h3>
      <p>Pegawai</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="<?php echo base_url().'Admin/pegawai' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('user')->num_rows() ?>
    <h3>
      <p>User</p>
    </div>
    <div class="icon">
    <i class="ion ion-ios-contact-outline"></i>
    </div>
    <a href="<?php echo base_url().'Admin/user' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('berita')->num_rows() ?>
    <h3>
      <p>Berita</p>
    </div>
    <div class="icon">
    <i class="ion ion-clipboard"></i>
    </div>
    <a href="<?php echo base_url().'Admin/berita' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<div class="col-lg-5 col-xs-10">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
    <h3>
    <?php echo $this->db->get('produk')->num_rows() ?>
    <h3>
      <p>Produk</p>
    </div>
    <div class="icon">
    <i class="ion ion-android-playstore"></i>
    </div>
    <a href="<?php echo base_url().'Admin/produk' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>

</div>





           
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
         
            <div class="card">
             
                <div class="d-flex justify-content-between">
               
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
