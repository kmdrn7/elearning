<div class="content">
	<section class="content-header">
		<h1>
			Tambah Kategori<br>
			<small style="padding-left: 0">Tambahkan data kategori baru ke dalam sistem</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?= base_url('dashboard')?>">
					<i class="fa fa-dashboard"></i> Dashboard
				</a>
			</li>
			<li>
				<a href="<?= base_url('jenis-barang')?>">
					<i class="fa fa-building"></i> Jenis Barang
				</a>
			</li>
			<li><i class="fa fa-plus"></i>&nbsp; Tambahkan data</li>
		</ol>
	</section>

	<section class="content container-fluid main-content-container">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary box-centered">
					<div class="box-header with-border">
						<h3 class="box-title"><b>Tambahkan Jenis Barang Baru</b></h3>
					</div>
					<div class="box-body">
						<form class="form-main form-insert" action="<?= base_url('admin/kategori/add')?>" method="POST">
							<div class="form-group">
								<label for="kategori">Kategori</label>
								<input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan nama kategori" required autofocus value="<?=set_value('kategori')?>">
								<?= form_error('kategori') ?>

							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea class="txt-area form-control" name="deskripsi" id="deskripsi" rows="4" cols="80" class="form-control" placeholder="Masukkan deskripsi"><?=set_value('deskripsi')?></textarea>
								<?= form_error('deskripsi') ?>
							</div>
							<?php
								$csrf = [
									'name' => $this->security->get_csrf_token_name(),
									'hash' => $this->security->get_csrf_hash(),
								];
							?>
							<input type="hidden" name="<?= $csrf['name']?>" value="<?= $csrf['hash']?>">

							<a href="<?=base_url('admin/kategori')?>" class="btn btn-lg btn-danger btn-flat"><i class="fa fa-reply"></i>&nbsp; Batal</a>
							<button type="submit" class="btn btn-lg btn-primary btn-flat"><i class="fa fa-save"></i>&nbsp; Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('input').attr('autocomplete', 'off');
	});
</script>
