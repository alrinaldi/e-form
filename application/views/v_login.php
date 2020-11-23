<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" href=<?php echo base_url("assets/images/favicon.png")?> />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('logins/css/main.css')?>">
<!--===============================================================================================-->
</head>
<style>
.vl {
  border-left: 4px solid  gray;
  height: 500px;
}
</style>
<body>
	
	<div class="limiter">

		<div class="container-login100" style="background-color: #091a2d !important;">
		<div class="col-md-5">
			<h1 class="font-weight-bold" style="color:azure"><span style='font-size:50px;'>&#8519;</span>-Registration Form for Master Data</h1>
		</div>
		<div class="vl"></div>
		<p class="pr-5"></p>
		<p class="pl-5"></p>
		<p class="pl-5"></p>
		<p class="pl-5"></p>
		<p class="pl-3"></p>
			<div class="wrap-login100 p-t-50 p-b-90 float-right" style="background-color:#091a2d !important">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?php echo base_url('login/cek_login');?>">
					<span class="login100-form-title p-b-51  " style="color:aliceblue">
						Welcome
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="nrp" placeholder="NRP">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
			

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" style="background-color: #e86016 !important;">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('logins/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('logins/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('logins/js/main.js');?>"></script>

</body>
</html>
