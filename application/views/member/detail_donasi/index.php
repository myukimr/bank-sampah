<title>Halaman Riwayat Member</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="m-0 text-success">   <i class="fas fa-hand-holding-heart nav-icon"></i>Riwayat Donasi</h3>
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
         
          <div class="alert alert-success" role="alert">
  <p>Ini merupakan riwayat donasi yang pernah Anda lakukan</p>
  <hr>
</div>
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
                  <th>Jenis Donasi</th>
                  <th>Berat</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>Foto</th>
                  <th>Tgl Donasi</th>
                  <th>Tgl Pengambilan</th>
                  <th>Pegawai yg mengambil</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($detail_donasi as $pmj): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pmj->jenis_donasi ?></td>
                        <td><?= $pmj->berat ?> Kg</td>
                        <td><?= $pmj->alamat ?></td>
                        <td><?= $pmj->no_hp ?></td>
                        <td><img src="<?= base_url('assets/Upload/donasi_image/') . $pmj->foto ?>" style= "width:100px; height:100px;" ></td>
                        <td><?= date('d F Y', strtotime($pmj->tgl_donasi)); ?></td>
                        <td><?= $pmj->tgl_pengambilan == '0000-00-00' ? 'belum di ambil': date('d F Y', strtotime($pmj->tgl_pengambilan)) ?></td>
                        <td><?= $pmj->tgl_pengambilan == '0000-00-00' ? 'belum ada': $pmj->nama_pegawai ?></td>
                        

                      
                        <!-- <td>
                            <a class='btn btn-danger' href="<?= base_url().'detail_donasi/hapus/'.$pmj->id_detail_donasi ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <a class='btn btn-warning' href="<?= base_url().'detail_donasi/edit/'.$pmj->id_detail_donasi ?>">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                            </a>
                            <a class='btn btn-info' href='<?= base_url().'detail_donasi/detail/'.$pmj->id_detail_donasi?>' class='btn btn-biru'>
                                 <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>
                        </td> -->
                    </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
              
              <?php foreach ($poin as $pmj): ?>
              <h5> Total Poin Anda : <?= $pmj->total_poin ?><h5>
              <?php endforeach ?>
              <br>        
              
              <a class='btn btn-success'href="<?= base_url('Member/detail_donasi_member/pdf') ?>">
                    <i class="fa fa-print" aria-hidden="true"></i>
                    <span>
                        Cetak
                     <span> 
                    </a>

             
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