<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Andika Ahmad Ramadhan">
	<meta name="application-name" content="Anggera Store">
	<meta name="description" content="Aplikasi Pergudangan">
	<meta name="robots" content="noindex">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title>Anggera Store | Admin Panel</title>

	<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type='image/x-icon'>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/skins/skin-blue.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/skins/square/blue.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/datatables.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker3.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/anggerastore.css?v=1.1.0')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/select2.css')?>">
	<script>var global_csrf = {};</script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- <script src="<?= base_url('assets/js/moment.js')?>"></script> -->
	<script src="<?= base_url('assets/js/chart.min.js')?>"></script>
	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/select2.js')?>"></script>
	<script src="<?= base_url('assets/js/sweetalert.js')?>"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini" id="body">
	<div class="wrapper">
		<!-- Main Header -->
		<header class="main-header">
			<a href="<?= base_url('dashboard')?>" class="logo">
				<span class="logo-mini"><b>AGR</b></span>
				<span class="logo-lg"><b>Anggera</b>Store</span>
			</a>

			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu pull-left">
					<!-- NAV KIRI -->
					<ul class="nav navbar-nav">
						<li class="notification-menu">
							<a href="#" onclick="javascript">User Aktif : <b><?= $_SESSION['nama_pengurus'] ?></b> </a>
						</li>
						<li class="notification-menu">
							<?php
								switch ($this->session->userdata('level')) {
									case 0:
										$grup = 'Super Admin';
										break;
									case 1:
										$grup = 'Admin';
										break;
									case 2:
										$grup = 'Pengurus Toko';
										break;
									case 3:
										$grup = 'Kasir';
										break;
									default:
										$grup = 'Tidak ada';
										break;
								}
							?>
							<a href="#">Grup Aktif : <b><?= $_SESSION['level_name'] ?></b> </a>
						</li>
						<li class="notification-menu">
							<a href="#">Store Aktif : <b><?= $_SESSION['nama_store'] ?></b> </a>
						</li>
					</ul>
				</div>
				<!-- NAV KANAN -->
				<div class="navbar-custom-menu pull-right">
					<ul class="nav navbar-nav">
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span style="margin-right: 10px">
									Notifikasi
								</span>
								<span class="pulse"><i class="fa fa-bell-o"></i></span>
								<span class="label label-warning" id="notif_jumlah">0</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header text-center">Notfikasi stok habis</li>
								<li>
									<ul class="menu" id="notif_container">
										<li>
											<a href="#">
												Tidak ada notifikasi
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?= base_url('logout') ?>"><i class="fa fa-unlock" aria-hidden="true"></i>&nbsp; Logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<?php $this->load->view('templates/side_nav'); ?>

		<div class="content-wrapper">
			<?php $this->load->view('pages/'. $hlm) ?>
		</div>

		<?php $this->load->view('templates/footer'); ?>

	</div>
	<!-- ./wrapper -->

	<script>		
		global_csrf['<?= $this->security->get_csrf_token_name() ?>'] = '<?= $this->security->get_csrf_hash()?>';
		$.ajaxSetup({
			data : global_csrf
		});
	</script>
	<!-- REQUIRED JS SCRIPTS -->
	<script src="<?= base_url('assets/js/jqss.min.js')?>"></script>
	<!-- jQuery 3 -->
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/js/adminlte.min.js')?>"></script>
	<!-- Data Tables -->
	<script src="<?= base_url('assets/js/datatables.min.js')?>"></script>
	<script src="<?= base_url('assets/js/icheck.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js')?>"></script>
	<!-- Anggera Store App -->
	<script src="<?= base_url('assets/js/anggerastore.js')?>"></script>
	<script type="text/javascript">
		sess_login = "<?= $_SESSION['id_pengurus'] ?>";
	</script>
</body>

</html>
