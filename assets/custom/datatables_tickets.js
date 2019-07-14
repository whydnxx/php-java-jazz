var manageTicketTables;

$(document).ready(function(){
  // manage brand table
	manageTicketTables = $("#manageTicketTables").DataTable({
		'ajax': 'php_action/fetchTickets.php',
		'order': []
	});

	$('#deleteTicket').on('show.bs.modal', function(e) {
		$(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
	});
});
