<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
		<title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
		<meta content="Admin Dashboard" name="description">
		<meta content="Themesbrand" name="author">
		<link rel="shortcut icon" href="<?= base_url('assets/admin/images/favicon.ico') ?>">
		<link rel="stylesheet" href="https://themesbrand.com/agroxa/plugins/morris/morris.css">
		<link href="https://themesbrand.com/agroxa/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
		<link href="https://themesbrand.com/agroxa/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
		<!-- Responsive datatable examples -->
		<link href="https://themesbrand.com/agroxa/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
		<link href="<?= base_url('assets/admin/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
		<link href="<?= base_url('assets/admin/css/icons.css')?>" rel="stylesheet" type="text/css">
		<link href="<?= base_url('assets/admin/css/style.css')?>" rel="stylesheet" type="text/css">
		<!-- Script -->
		<script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>
		<script>
			var tableMaster;
		</script>
	</head>
	<body>
		<!-- Begin page -->
		<div id="wrapper">
			<!-- Load Topbar -->
			<?php $this->load->view('admin/layouts/topbar') ?>
			<!-- Load Sidebar -->
			<?php $this->load->view('admin/layouts/sidebar') ?>
			<!-- Load Content -->
			<?php $this->load->view('admin/pages/'.$hlm) ?>
			<!-- Load Footer -->
			<?php $this->load->view('admin/layouts/footer') ?>
		</div>
		<!-- END wrapper -->
		<!-- jQuery  -->
		<script src="<?= base_url('assets/admin/js/bootstrap.bundle.min.js') ?>"></script>
		<script src="<?= base_url('assets/admin/js/metisMenu.min.js') ?>"></script>
		<script src="<?= base_url('assets/admin/js/jquery.slimscroll.js') ?>"></script>
		<script src="<?= base_url('assets/admin/js/waves.min.js') ?>"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		<!-- Peity JS -->
		<script src="https://themesbrand.com/agroxa/plugins/peity/jquery.peity.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/morris/morris.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/raphael/raphael-min.js"></script>
		<!-- Required datatable js -->
		<script src="https://themesbrand.com/agroxa/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<!-- Buttons examples -->
		<script src="https://themesbrand.com/agroxa/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/jszip.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/pdfmake.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/vfs_fonts.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/buttons.html5.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/buttons.print.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/buttons.colVis.min.js"></script>
		<!-- Responsive examples -->
		<script src="https://themesbrand.com/agroxa/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="https://themesbrand.com/agroxa/plugins/datatables/responsive.bootstrap4.min.js"></script>
		<!-- Datatable init js -->
		<script src="<?= base_url('assets/admin/pages/datatables.init.js') ?>"></script>
		<script src="<?= base_url('assets/admin/pages/dashboard.js') ?>"></script><!-- App js -->
		<script src="<?= base_url('assets/admin/js/app.js') ?>"></script>
		<script src="<?= base_url('assets/admin/js/elearning.js') ?>"></script>
	</body>
</html>