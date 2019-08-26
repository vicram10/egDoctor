"use strict";
var KTDatatablesSearchOptionsColumnSearch = function() {

	$.fn.dataTable.Api.register('column().title()', function() {
		return $(this.header()).text().trim();
	});

	var initTableMessages = function() {

		// begin first table
		var table = $('#table_messages').DataTable({
			responsive: true,

			// Pagination settings
			dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
			// read more: https://datatables.net/examples/basic_init/dom.html

			lengthMenu: [5, 10, 25, 50],

			pageLength: 10,

			language: {
				'lengthMenu': 'Display _MENU_',
			},

			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: url_mensajes_recibidos,
				type: 'GET',
				data: {
					columnsDef: [
						'nombre', 'correo', 'mensaje',],
				},
			},
			columns: [
				{data: 'nombre'},
				{data: 'correo'},
				{data: 'mensaje'},
			],
			initComplete: function() {
				var thisTable = this;
				var rowFilter = $('<tr class="filter"></tr>').appendTo($(table.table().header()));

				this.api().columns().every(function() {
					var column = this;
					var input;

					switch (column.title()) {
						case 'nombre':
						case 'Correo':
						case 'mensaje':
							input = $(`<input type="text" class="form-control form-control-sm form-filter kt-input" data-col-index="` + column.index() + `"/>`);
							break;
					}
				});

				 // hide search column for responsive table
				 var hideSearchColumnResponsive = function () {
           thisTable.api().columns().every(function () {
	           var column = this
	           if(column.responsiveHidden()) {
		           $(rowFilter).find('th').eq(column.index()).show();
	           } else {
		           $(rowFilter).find('th').eq(column.index()).hide();
	           }
           })
         };

				// init on datatable load
				hideSearchColumnResponsive();
				// recheck on window resize
				window.onresize = hideSearchColumnResponsive;
			},
		});

	};

	return {

		//main function to initiate the module
		init: function() {
			initTableMessages();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesSearchOptionsColumnSearch.init();
});