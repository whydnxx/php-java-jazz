var MessagesTable;

$(document).ready(function(){
  // manage brand table
	MessagesTable = $("#MessagesTable").DataTable({
		'ajax': 'php_action/fetchMessages.php',
		'order': []
	});
});
