// !for initialize another plugins
$(function () {

	$(".table-ui").DataTable({
		responsive: true,
		paging: true,
		lengthChanged: true,
		autoWidth: false,
		ordering: false,
		info: false,
		dom: "lBfrtip",
		language: {
			paginate: {
				first: "<i class='bx bxs-chevrons-left'></i>",
				previous: "<i class='bx bxs-chevron-left' ></i>",
				next: "<i class='bx bxs-chevron-right'>",
				last: "<i class='bx bxs-chevrons-right' ></i>"
			},
			search: "",
			searchPlaceholder: "Cari",
			lengthMenu: "_MENU_", 
		},
		buttons: [
			{
				extend: "print",
				className: "btn button-actions",
				text: "<i class='bx bx-printer'></i>Cetak",
			},
			{
				extend: "excel",
				className: "btn button-actions",
				text: "<i class='bx bx-file' ></i>Excel",
			},
			{
				extend: "pdf",
				className: "btn button-actions",
				text: "<i class='bx bxs-file-pdf'></i>Pdf",
			},
		],
		columnDefs: [
			{	
				targets: "price", // call specific column class on table, and if you have column pricing. add class "price" on <th>
				render: $.fn.dataTable.render.number(".", ",", 0, "Rp. "),
			},
		],
		oLanguage: {
			sEmptyTable: "Data Kosong",
		},
	});

	// !global access for modification table components
	$(`.custom-select`).appendTo($(`.length-filter`)).removeClass(`form-control-sm`);
	$(`.dataTables_filter`).appendTo($(`.length-filter, .modal-filter`));
	$(`.table-footer`).append($(`.dataTables_paginate`));
	$(".dt-buttons").appendTo($(".action-buttons"));
	$(`input[placeholder = "Cari"]`).removeClass(`form-control-sm`);
	$(".dt-buttons").removeClass("btn-group flex-wrap");
	
	// !specific access for modification table components
	$(` #detailTrans_length,
		#detailTrans_filter,
		#detailTransHistory_paginate,
		#detailTransHistory_filter,
		#transactionPage_paginate,
		#transactionPage_filter
	`).remove();

	$(`select[name = "detailTransHistory_length"]`).remove()

	// !select2 component
	$(".custom-select").select2({
		minimumResultsForSearch: Infinity,
		allowClear: false,
	});
	$(".data-show").select2({
		placeholder: "Tampilkan data",
		minimumResultsForSearch: Infinity,
		allowClear: true,
	});
	$(".custom-select-user").select2({
		placeholder: "Tampilkan data",
		minimumResultsForSearch: Infinity,
	});
	
	// !filter for daterange
	$("#inputRange").daterangepicker({
		singleDatePicker : false,
		autoUpdateInput: false,
		showDropdowns: true,
		opens: "center",
		locale: {
			applyLabel: "Pilih",
			cancelLabel: "Reset",
		}
	});

	// !daterangepicker addon custom
	$(".drp-calendar.right").removeClass();
	$(".daterangepicker").addClass("single");
});
