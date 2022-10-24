<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-success"> <i class="nav-icon fas fa-user-tie"></i> Data Pegawai </h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-chart-line"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp; <i class="nav-icon fas fa-user-tie"></i> Pegawai
        </div>
        <div class="row">
          <div class="col"> 
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class='card-header'>
                    <a class='btn btn-success'href="pegawai/tambah">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>
                        Tambah
                    </span>
                    </a>

                    </div>   
                  <span>
                  <br>
                    <?php
                   if (!empty($this->session->flashdata('pesan')))
                   {
                     ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan2')))
                   {
                     ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan2');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan3')))
                   {
                     ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan3');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>

                 </span> 
                 
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Gender</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($pegawai as $pmj): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pmj->nama_pegawai ?></td>
                        <td><?= date('d F Y', strtotime($pmj->ttl)); ?></td>
                        <td><?= $pmj->jenis_kelamin ?></td>
                        <td><?= $pmj->alamat ?></td>
                        <td><?= $pmj->no_hp ?></td>
                        <td>
                            <a class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')" href="<?= base_url().'Admin/pegawai/hapus/'.$pmj->id_pegawai ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <a class='btn btn-warning' href="<?= base_url().'Admin/pegawai/edit/'.$pmj->id_pegawai ?>">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                            </a>
                            <a class='btn btn-info' href='<?= base_url().'Admin/pegawai/detail/'.$pmj->id_pegawai?>' class='btn btn-biru'>
                                 <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
            <!-- /.card-body -->
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
