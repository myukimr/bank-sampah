<title>Halaman Produk Member</title>
<div class="ml-3 mr-3 col-lg-10 d-flex flex-wrap">
<?php foreach ($produk as $pmj): ?>
  <div class="card mr-3 mb-3"  style="width:330px; height:400px">
  <img src="<?= base_url('assets/Upload/produk_image/') . $pmj->foto ?>" style= "width:330px; height:300px;" >
    <div class="card-body">

      <center><h5 class="card-title"><?= $pmj->nama ?></h5></center>
      <center><p class="card-text"><?= $pmj->deskripsi ?></p></center>
    
    </div>
  </div>
    <?php endforeach ?>
  </div>