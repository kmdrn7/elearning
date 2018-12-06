var ses_login = '';

function convertToRupiah(angka)
{
	var rupiah = '';
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

function formatNumber( num, fixed ) {
	var decimalPart;

	var array = Math.floor(num).toString().split('');
	var index = -3;
	while ( array.length + index > 0 ) {
		array.splice( index, 0, '.' );
		index -= 4;
	}

	if(fixed > 0){
		decimalPart = num.toFixed(fixed).split(".")[1];
		return array.join('') + "," + decimalPart;
	}
	return array.join('');
};

$(document).ready(function() {

	tableMaster = $('#master').DataTable({
		// scrollY: 200,
		"lengthMenu": [[5, 10, 15, 20, 30, -1], [5, 10, 15, 20, 30, "All"]],
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
	});

	// $('.datepicker').datepicker({
	// 	format: "dd/mm/yyyy",
	//     todayBtn: "linked",
	//     language: "id",
	//     orientation: "bottom auto",
	//     keyboardNavigation: false,
	//     autoclose: true
	// });

	$('input').attr('autocomplete', 'off');
	// $('input').iCheck({
	// 	checkboxClass: 'icheckbox_square-blue',
	// 	radioClass: 'iradio_square-blue',
	// 	increaseArea: '20%' // optional
	// });
	$('textarea').attr('autocomplete', 'off');

	var isSubmitted=false;
	$('.form-insert').on('submit', function(e) {
		if ( isSubmitted ) {
			return true;
		} else {
			e.preventDefault();
			swal({
				title: "Apakah data yang anda masukkan sudah benar?",
				icon: "warning",
				cancelButtonText: '<i class="fa fa-times"></i> Tidak, kembali',
				cancelButtonAriaLabel: 'Tidak, kembali',
				confirmButtonText: '<i class="fa fa-floppy-o"></i> Ya, simpan',
				confirmButtonAriaLabel: 'Ya, simpan',
				buttons: true,
			}).then((willDelete) => {
				if (willDelete) {
					isSubmitted=1;
					$(this).submit();
				}else{
					return false;
				}
			});
		}
	});

	$('.form-update').on('submit', function(e) {
		if ( isSubmitted ) {
			return true;
		} else {
			e.preventDefault();
			swal({
				title: "Apakah data yang anda ubah sudah benar?",
				icon: "warning",
				cancelButtonText: '<i class="fa fa-times"></i> Tidak, kembali',
				cancelButtonAriaLabel: 'Tidak, kembali',
				confirmButtonText: '<i class="fa fa-floppy-o"></i> Ya, simpan',
				confirmButtonAriaLabel: 'Ya, simpan',
				buttons: true,
			}).then((willDelete) => {
				if (willDelete) {
					isSubmitted=1;
					$(this).submit();
				}else{
					return false;
				}
			});
		}
	});

	// cek_notif();
	// setInterval(cek_notif, 300000);

});
