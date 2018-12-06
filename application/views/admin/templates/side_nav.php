<aside class="main-sidebar main-sidebar-add" style="height: 100vh;">
	<section class="sidebar">
		<div class="user-panel" style="display: none">
			<div class="text-center">
				<span>
					<p style="color: white; margin-top: 15px; text-align: left">
						
					</p>
				</span>
			</div>
		</div>

		<?php
			$level = [];
			$hak_akses = [];
		?>

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">Main</li>
			<li class="<?= $idh=='dashboard'?'active':'' ?>"><a href="<?= base_url('dashboard')?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
			<li class="header">Panel Master & Utilitas</li>
			<li class="treeview <?= $ktg=='master'?'active':'' ?>">
				<a href="#" id="sidebar-master">
					<i class="fa fa-database"></i> <span>Master</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?= $idh=='kategori'?'active':'' ?>"><a href="<?= base_url('/admin/kategori')?>"><i class="fa fa-flickr"></i> Kategori</a></li>
					<li class="<?= $idh=='store'?'active':'' ?>"><a href="<?= base_url('/store')?>"><i class="fa fa-flickr"></i> Store</a></li>
					<li class="<?= $idh=='supplier'?'active':'' ?>"><a href="<?= base_url('/supplier')?>"><i class="fa fa-flickr"></i> Supplier</a></li>
					<li class="<?= $idh=='jenisbarang'?'active':'' ?>"><a href="<?= base_url('/jenis-barang')?>"><i class="fa fa-flickr"></i> Jenis Barang</a></li>
					<li class="<?= $idh=='barang'?'active':'' ?>"><a href="<?= base_url('/barang')?>"><i class="fa fa-flickr"></i> Barang</a></li>
					<li class="<?= $idh=='hpp'?'active':'' ?>"><a href="<?= base_url('/hpp')?>"><i class="fa fa-flickr"></i> HPP</a></li>
					<li class="<?= $idh=='pelanggan'?'active':'' ?>"><a href="<?= base_url('/pelanggan')?>"><i class="fa fa-flickr"></i> Pelanggan</a></li>
					<li class="<?= $idh=='notif'?'active':'' ?>"><a href="<?= base_url('/notifikasi')?>"><i class="fa fa-flickr"></i> Notifikasi</a></li>
					<li class="<?= $idh=='level'?'active':'' ?>"><a href="<?= base_url('/level')?>"><i class="fa fa-flickr"></i> Level dan Hak Akses</a></li>
					<li class="<?= $idh=='modal'?'active':'' ?>"><a href="<?= base_url('/modal')?>"><i class="fa fa-flickr"></i> Modal</a></li>
				</ul>
			</li>
			<li class="header">Panel Akun</li>
			<li class="<?= $idh=='logout'?'active':'' ?>"><a href="<?= base_url('logout')?>"><i class="fa fa-unlock"></i> <span>Logout</span></a></li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
