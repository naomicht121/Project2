<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/icons/card.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/iconic/css/material-design-iconic-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<img src="<?php echo base_url('assets/payment.png')?>" style="width: 100px; height: 100px;">
					</span>
					<form action="<?php  echo base_url(); ?>bank/input" class="login100-form validate-form" method="post">

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="uniq_key">
						<span class="focus-input100" data-placeholder="Unique Key"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="nominal">
						<span class="focus-input100" data-placeholder="Nominal"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Input
							</button>
				</form>
						</div>
					</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/js/main.js')?>"></script>

</body>
</html>