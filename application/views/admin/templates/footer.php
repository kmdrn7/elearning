<div class="modal" id="ModalGue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
				<h4 class="modal-title" id="ModalHeader"></h4>
			</div>
			<div class="modal-body" id="ModalContent"></div>
			<div class="modal-footer" id="ModalFooter"></div>
		</div>
	</div>
</div>

<script>
	$('select').select2({
		width: '100%',
	});

	$('#ModalGue').on('hide.bs.modal', function () {
		   setTimeout(function(){
		   		$('#ModalHeader, #ModalContent, #ModalFooter').html('');
		   }, 500);
		});
</script>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<small style="color: gray">Crafted with <i class="fa fa-heart" aria-hidden="true"></i> by&nbsp;</small> <strong><a style="color: black" href="https://reinventid.github.io/reinvent" target="_blank">Re:Invent Indonesia</a></strong>
	</div>
	Copyright &copy; <?= date('Y') ?> <strong>Anggera Store</strong>
</footer>
