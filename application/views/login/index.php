<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>Login</title>
<!-- Favicon -->
<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">

<script src='https://www.google.com/recaptcha/api.js'></script>
<!--<link rel="stylesheet" type="text/css" href="<? echo base_url();?>/assets/login/login.css"> -->
     
<body background = "<?=base_url();?>./assets/images/background4.jpeg">
        
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="<?=base_url();?>assets/images/logo4.png"alt="">
                <form class="form-signin" method="POST" action="login/proses_login" role="form" autocomplete="off" id="formlogin" >
                        <?php if($this->session->flashdata('errorRecaptcha') == TRUE):?>
                    <div class="alert alert-info alert-danger">
                        <a href="login" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  
                        <?php echo $this->session->flashdata('errorRecaptcha');?>
                        </div>
                        <?php endif; ?> 
                        <?php if($this->session->flashdata('pesan') == TRUE):?>
                    <div class="alert alert-info alert-danger">
                        <a href="login" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('pesan');?>
                        </div>
                        <?php endif; ?>            

                    <input type="text" class="form-control" name="username" id="username"  placeholder="Username" required autofocus>
                    <input type="password" id="password-field"class="form-control" name="password"  placeholder="Password" required>
                    <span toggle="#myInput" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <br>
                    
                    <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LcizvEUAAAAANxLpXVHzuJ73xjVuc6AvFMj5j1w"></div>
                            </div>
                            <br>

                <button  class="btn btn-success btn-lg btn-block" type="submit">Sign in</button>
                
              
              
                <a href="#" class="pull-right need-help"> </a><span class="clearfix"></span>
                <a href="<?=base_url("Admin/register");?>" class="text-center new-account">Create an account </a>
                <a href="<?=base_url("User/dashboard");?>" class="text-center new-account">Back to Home</a> 
                
            
                    
                
                    </div>

                   
               
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!-- ##### Header Area End ##### -->
    
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url().'assets/User/js/jquery/jquery-2.2.4.min.js ';?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/popper.min.js';?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/bootstrap.min.js';?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url().'assets/User/js/plugins/plugins.js';?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url().'assets/User/js/active.js';?>"></script>
<style>

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 70px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>

<script>
$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script> 
