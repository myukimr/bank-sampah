<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- favicon-->
  <link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/member/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/member/')?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/member/')?>css/sb-admin-2.min.css" rel="stylesheet">

<style>
  .profile-img {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
</style>
</head>
<body background = "<?=base_url();?>./assets/images/background4.jpeg">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <!--<h1 class="h4 text-gray-900 mb-4">Register</h1> -->
                <img class="profile-img" src="<?=base_url();?>assets/images/logo4.png"alt="">

              </div>
           
   
              <form class="user" action="register/index" role="form" autocomplete="off" id="formlogin" method="POST"> 
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="nim">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama"  required autofocus>
                  </div>

                  <div class="col-sm-6">
                  <label for="nim">No Handphone</label>
                    <input type="number" class="form-control form-control" name="no_hp" id="no_hp"  required autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="nim">Username</label>
                    <input type="text" class="form-control form-control" name="username" id="username" required autofocus>
                  </div>
                  <div class="col-sm-6">
                  <label for="nim">Password</label>
                    <input type="password" class="form-control form-control" name="password" id="password"  required autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="nim">Jenis Kelamin</label>
                    <div class="form-check" > 
                        <input type="radio" name="jenis_kelamin" value="L"  required autofocus>  Laki-Laki
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="P"  required autofocus>  Perempuan
                    </div>
                  </div>

                  <div class="col-sm-6">
                  <label for="nim">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="" class="form-control"  required autofocus></textarea>
                  </div>
                </div>
                <button class="btn btn-success btn btn-block" type="submit">Register Akun</button>
               
                </a>
                
                
              </form>
 
              <hr>
            
              <div class="text-center">
                <a class="small" href="<?=base_url();?>Admin/login">Apakah Sudah Punya Akun? Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/member/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/member/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/member/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/member/')?>js/sb-admin-2.min.js"></script>

</body>

</html>
