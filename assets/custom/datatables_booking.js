var manageBookingTables;

$(document).ready(function(){
  // manage brand table
	manageBookingTables = $("#manageBookingTables").DataTable({
		'ajax': 'php_action/fetchBookings.php',
		'order': []
	});

	$('#confirmPesananBooking').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});

	$('#deletePesananBooking').on('show.bs.modal', function(e) {
		$(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
	});
});
