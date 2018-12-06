<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box page-title-box-white">
						<ol class="breadcrumb float-right">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0);">Layouts</a></li>
							<li class="breadcrumb-item active">Page Title 2</li>
						</ol>
						<h4 class="page-title">Kategori</h4>
						<p style="margin-top: 10px; margin-bottom: 0px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima fugit tenetur asperiores</p>
					</div>
				</div>
			</div>
			<!-- end row -->

			<div class="page-content-wrapper mt-0">
				<div class="row">
					<div class="col-12">
						<div class="card m-b-20">
							<div class="card-body">
								<h4 class="mt-0 header-title">Tambah data baru</h4>
								<a href="<?= base_url('admin/kategori/add') ?>" class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp; Tambahkan</a>
							</div>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end page content-->

			<div class="page-content-wrapper mt-0">
				<div class="row">
					<div class="col-12">
						<div class="card m-b-20">
							<div class="card-body">
								<h4 class="mt-0 header-title">Data <?= $jdl ?></h4>
								<p class="text-muted m-b-30">
									Menampilkan semua data kategori yang ada di dalam sistem
								</p>
								<table id="masterTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
									<thead>
										<tr>
											<th>No.</th>
											<th>Kategori</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end page content-->
		</div>
		<!-- container-fluid -->
	</div>
	<!-- content -->
</div>

<script>
	$(document).ready(function(){
		var table = $('#masterTable').DataTable({
			"lengthMenu": [[10, 30, 100, 200, -1], [10, 30, 100, 200, "All"]],
			"scrollX": true,
			"scrollY": true,
			"language": {
	            "lengthMenu": "Tampil _MENU_ data /halaman",
	            "zeroRecords": "Tidak ada data yang ditemukan",
	            "info": "Halaman _PAGE_ dari _PAGES_",
	            "infoEmpty": "Data masih kosong",
	            "infoFiltered": "(difilter dari total _MAX_ data)",
				"search": "Cari :",
			},
			"processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('admin/kategori/get_datatable')?>",
                "type": "POST"
            },
			"columnDefs": [
				{
					targets: [0],
					orderable: false,
            	},
				{
					targets: [1],
					orderable: true,
            	},
				{
					targets : [2],
					orderable: true,
            	},
				{
					targets: [3],
					class: 'text-center',
					orderable : false,
					searchable: false,
					render: function(data, type, row, meta){
						return '<div class="btn-group btn-group-sm">'+
									'<button type="button" data-id="'+row['id_kategori']+'" class="view-button btn btn-warning" data-toggle="modal" href="#view">'+
										'<i class="fa fa-eye"></i>'+
									'</button>'+
									'<a href="/admin/kategori/update/'+row['id_kategori']+'" class="btn btn-primary">'+
										'<i class="fa fa-edit"></i>'+
									'</a>'+
									'<button data-id="'+row['id_kategori']+'" class="delete btn btn-danger">'+
										'<i class="fa fa-trash"></i>'+
									'</button>'+
								'</div>';
					}
				},
            ],
		});

		$('.delete').on('click', function(){
			swal({
				title: "Apakah anda yakin?",
				text: "Data akan dihapus secara permanent",
				icon: "warning",
				cancelButtonText: "Tidak, kembali",
				confirmButtonText: "Ya, hapus data",
				buttons: true,
				dangerMode: true,
			}).then((willDelete) => {
				if (willDelete) {
					var id = $(this).attr('data-id');
					var csrfData = {};
					csrfData['<?= $this->security->get_csrf_token_name() ?>'] = '<?= $this->security->get_csrf_hash()?>';
					$.ajaxSetup({
						data : csrfData
					});
					$.ajax({
						url : "<?= base_url()?>admin/kategori/delete/"+id,
						type : 'post',
						data : {'id' : id},
						success : function(data){
							if (data == 'sukses') {
								$('#example').DataTable().row($('#table-row-'+id)).remove().draw();
								swal("Berhasil", "Data berhasil dihapus", "success");
							}else{
								swal({
									title: "Ups!",
									text: "Data tidak bisa dihapus, coba periksa barang dengan jenis ini. Tekan 'Hapus Paksa' jika ingin menghapus semua data yang berhubungan dengan data ini",
									icon: "error",
									buttons: {
										HapusPaksa: {
											text: "Hapus Paksa",
											value: "HapusPaksa",
											className: "swal-button--danger",
										},
										Ok: {
											text: "Batal",
											value: "batal"
										}
									},
									dangerMode: true,
								}).then((value) => {
									switch (value) {
									case 'HapusPaksa':
										swal({
											title: "Apakah anda yakin?",
											text: "Data akan dihapus secara permanent, data yang berhubungan akan dihapus juga",
											icon: "warning",
											cancelButtonText: "Tidak, kembali",
											confirmButtonText: "Ya, hapus data",
											buttons: true,
											dangerMode: true,
										}).then((value) => {
											if (value) {
												$.ajax({
													url : "<?= base_url()?>jenis-barang/delete-force/"+id,
													type : 'post',
													data : {'id' : id},
													success: function (data) {
														if (data == 'sukses') {
															$('#example').DataTable().row($('#table-row-'+id)).remove().draw();
															swal("Berhasil", "Data berhasil dihapus", "success");
														} else {
															swal("Ops!", "Gagal menghapus data", "error");
														}
													}
												});
											}
										});
										break;
									default:
										swal("Dibatalkan", "Data tidak jadi dihapus", "error");
										break;
									}
								});
							}

						}
					});
				}else{
					swal("Dibatalkan", "Data tidak jadi dihapus", "error");
				}
			});
		});

		$('.view-button').on('click', function(){
			var id = $(this).attr('data-id');
			var csrfData = {};
			csrfData['<?= $this->security->get_csrf_token_name() ?>'] = '<?= $this->security->get_csrf_hash()?>';

			$.ajaxSetup({
				data : csrfData
			});

			$.ajax({
				url : '<?= base_url()?>admin/kategori/view',
				data : {'id' : id},
				type : 'post',
				success : function(data){
					var data = $.parseJSON(data);
					$('#nama-view').text(data['kategori']);
					$('#ket-view').text(data['deskripsi']);

				}
			});
		});
	});
</script>

<?php if ($this->session->flashdata('sukses-in')): ?>
	<script>
		swal("Berhasil", "<?= $this->session->flashdata('sukses-in');?>", "success");
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('sukses-up')): ?>
	<script>
		swal("Berhasil", "<?= $this->session->flashdata('sukses-up');?>", "success");
	</script>
<?php endif; ?>
