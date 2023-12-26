"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: '/company_info_list',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'ct_id', 'ct_name', 'created_at', 'action_1', 'action_2', 'action_3'],
				},
			},
			columns: [
				{data: 'ct_id'},
				{data: 'ct_name'},
				{data: 'created_at'},
				{data: 'action_1'},
				{data: 'action_2'},
				{data: 'action_3'},
			],
			columnDefs: [
				{
					targets: -3,
					orderable: false,
					render: function(data, type, full, meta) {
						return '<a href="/company_apply" class="btn btn-primary" title="Apply">申込</a>';
					},
				},
				{
					targets: -2,
					orderable: false,
					render: function(data, type, full, meta) {
						return '<a href="/company_edit" class="btn btn-primary" title="Edit">編集</a>';
					},
				},
				{
					targets: -1,
					orderable: false,
					render: function(data, type, full, meta) {
						return '<a href="/company_delete" class="btn btn-primary" title="Delete">削除</a>';
					},
				},
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxServer.init();
});
