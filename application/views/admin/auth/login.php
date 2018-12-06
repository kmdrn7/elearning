<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Andika Ahmad Ramadhan">
	<meta name="application-name" content="Anggera Store">
	<meta name="description" content="Aplikasi Pergudangan">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title>Login | Anggera Store</title>

	<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type='image/x-icon'>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/anggerastore.css?v='.rand(0,999))?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini" id="body" style="background-color: #d2d6de">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b> Anggera Store</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Login untuk memulai sesi anda</p>

			<form action="<?= base_url('login')?>" method="post">
				<div class="form-group has-feedback">
					<input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					<?= form_error('email')?>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					<?= form_error('password')?>
				</div>
				<div class="row">
					<?php if ( $this->session->flashdata('error') ): ?>
						<div class="col-xs-8">
							<small style="color: red"><b><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; Username atau password yang anda masukkan salah</b></small>
						</div>
					<?php endif; ?>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Login </button>
					</div>
				</div>

				<?php if ( isset($_GET['last_page']) ): ?>
					<input type="hidden" name="last_page" value="<?= $_GET['last_page'] ?>">
				<?php endif; ?>

				<?php
					$csrf = [
						'name' => $this->security->get_csrf_token_name(),
						'hash' => $this->security->get_csrf_hash(),
					];
				?>

				<input type="hidden" name="<?= $csrf['name']?>" value="<?= $csrf['hash']?>">
			</form>
		</div>
	</div>

	<!-- REQUIRED JS SCRIPTS -->
	<script src="<?= base_url('assets/js/jqss.min.js')?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/js/adminlte.min.js')?>"></script>
	<!-- Data Tables -->
	<script src="<?= base_url('assets/js/datatables.min.js')?>"></script>
	<script src="<?= base_url('assets/js/icheck.min.js')?>"></script>
	<!-- Anggera Store App -->
	<script src="<?= base_url('assets/js/anggerastore.js')?>"></script>
	<script type="text/javascript">
		sess_login = "<?= isset($_SESSION['id_pengurus']) ?>";
	</script>
</body>

</html>
