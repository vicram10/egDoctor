$(document).ready(function(){
	//datatables
	var table = $('table.display');

	// begin first table
	table.DataTable({
		responsive: true,
		language: {
			url: "../default/js/Spanish.json",
		},
		pagingType: 'full_numbers',
	});	
});