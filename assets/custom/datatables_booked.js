var manageBookedTables;

$(document).ready(function(){
  // manage brand table
	manageBookedTables = $("#manageBookedTables").DataTable({
		'ajax': 'php_action/fetchBooked.php',
		'order': []
	});

	$('#deletePesananBooked').on('show.bs.modal', function(e) {
		$(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
	});
});
