<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url();?>assets/login2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/login2/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url(). 'index/cek_login'; ?>" method="post">
					<span class="login100-form-title p-b-34">
						Pendaftaran Akun
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Username">
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Password">
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Nama">
						<span class="symbol-input100">
							<i class="fa fa-pencil"></i>
						</span>
						<input class="input100" type="text" name="name" placeholder="Nama">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Email">
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" style="width: 500px" data-validate="Tuliskan Alamat">
						<span class="symbol-input100">
							<i class="fa fa-home"></i>
						</span>
						<input id="first-name" class="input100" type="textarea" name="address" placeholder="Alamat">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Kota">
						<span class="symbol-input100">
							<i class="fa fa-bell"></i>
						</span>
						<input class="input100" type="text" name="city" placeholder="Kota">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Tuliskan No. Hp">
						<span class="symbol-input100">
							<i class="fa fa-phone"></i>
						</span>
						<input class="input100" type="text" name="telp" placeholder="No. HP">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Tuliskan Rekening">
						<span class="symbol-input100">
							<i class="fa fa-credit-card"></i>
						</span>
						<input class="input100" type="text" name="rekening" placeholder="Rekening">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Masukan Photo">
						<span class="symbol-input100">
							<i class="fa fa-file-image-o"></i>
						</span>
						<input class="input100" type="file" name="image" placeholder="Photo">
						<span class="focus-input100"></span>
					</div>


					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<a href="<?php echo base_url(). 'index'; ?>" class="txt3">
							Kembali Ke Beranda.
						</a>
						&emsp;
						<a href="<?php echo base_url(). 'index/form_login'; ?>" class="txt3">
							Sudah Punya Akun?
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?= base_url();?>assets/login2/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url();?>assets/login2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url();?>assets/login2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/login2/js/main.js"></script>

</body>
</html>