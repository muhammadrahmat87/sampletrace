




<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo base_url(); ?>assets/dist/img/6.png" type="image/gif"> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>3BALAMINA | SMARTRI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></head>

</head>
<body style="background-image: url(image/abs.png);  " >

              
	
	  
	   
	  
	  <div class="login-box">
 
	  
				 
						<div class="login-panel panel  ">                  
						 
	 <br><br>
	   <div class="login-box"> <br><center>
	  <!--  <img src="<?php echo base_url(); ?>assets/dist/img/logo.jpg" width="110" height=" 41"   > -->
		  <div class="login-logo"> <img src="<?php echo base_url(); ?>assets/dist/img/2.png" width="354" height=" 190"   ></div>
		</center>
		  <!-- /.login-logo -->
		  <div class="login-box-body">
		   
		  <?php
	// Cek apakah terdapat session nama message
	if($this->session->flashdata('message')){ // Jika ada
		echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
	}
	?>
	
			<?php echo form_open('auth/check_login'); ?>
	
				<div class="form-group ">
				<label  >Username</label>
				  <input type="text" name="username" class="form-control" placeholder="Username">
				 
				</div>
	
				<div class="form-group has-feedback">
				<label  >Password</label>
				  <input type="password" name="password" class="form-control" placeholder="Password">
				  
				</div>
	
				
				  <!-- /.col -->
				  <div>
					<button type="submit" name="submit" class="btn bg-blue btn-block">Login</button>
				  </div>
				  <!-- /.col -->
		</div>
			</form>
	
		  </div>
		  <!-- /.login-box-body -->
	  </div>
	  <!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
