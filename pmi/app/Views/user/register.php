<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/icons/favicon.ico') ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(<?= base_url('assets/img/bg-hospital.png') ?>);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Registrasi
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="post">
					<div class="wrap-input100">
						<input class="input100" type="text" name="nama_user" placeholder="Nama Lengkap">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#x2709;"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>



					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Daftar
						</button>
					</div><br>
					<p class="text-center">Sudah punya akun? <a data-toggle="tab" href="<?= base_url('login')?>">Masuk</a></p>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/animsition/js/animsition.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/countdowntime/countdowntime.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>