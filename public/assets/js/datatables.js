//! for initialize another plugins
$(function () {
    
    $("#itemList").DataTable({
        responsive: true,
        paging: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
        columnDefs: [
            {
                targets: 3,
                render: $.fn.dataTable.render.number(".", ",", 0, "Rp. "),
            },
        ],
    });
    
    $("#itemModalTable").DataTable({
		responsive: true,
		paging: true,
		lengthChange: false,
		autoWidth: false,
		ordering: false,
		info: false,
		language: {
			paginate: {
				first: '<i class="fas fa-angle-double-left"></i>',
				previous: '<i class="fas fa-angle-left"></i>',
				next: '<i class="fas fa-angle-right"></i>',
				last: '<i class="fas fa-angle-double-right"></i>',
			},
		},
		columnDefs: [
			{
				targets: 2,
				render: $.fn.dataTable.render.number(".", ",", 0, "Rp. "),
			},
		],
	});
    
    $("#stockInList").DataTable({
        responsive: true,
        paging: true,
        lengthChange: false,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });
    
    $("#stockInHistoryList").DataTable({
		responsive: true,
		paging: true,
		lengthChange: true,
		autoWidth: false,
		ordering: false,
		info: false,
		language: {
			paginate: {
				first: '<i class="fas fa-angle-double-left"></i>',
				previous: '<i class="fas fa-angle-left"></i>',
				next: '<i class="fas fa-angle-right"></i>',
				last: '<i class="fas fa-angle-double-right"></i>',
			},
		},
		oLanguage: {
			sEmptyTable: "Belum ada barang masuk yang ditambahkan",
		},
	});
    
    $("#customerList").DataTable({
        responsive: true,
        paging: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });
    
    $("#custModalTable").DataTable({
        responsive: true,
        paging: true,
        lengthChange: false,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });
    
    $("#transactionPage").DataTable({
		responsive: true,
		paging: false,
		filter: false,
		lengthChange: true,
		autoWidth: false,
		ordering: false,
		info: false,
		oLanguage: {
			sEmptyTable: "Belum ada item yang ditambahkan",
		},
	});
    
    $("#detailTrans").DataTable({
        responsive: true,
        paging: false,
        filter: false,
        lengthChange: false,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });
    
    $("#transStatus").DataTable({
        responsive: true,
        paging: true,
        filter: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });
    
    $("#transHistory").DataTable({
        responsive: true,
        paging: true,
        filter: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
		columnDefs: [
			{
				targets: 3,
				render: $.fn.dataTable.render.number(".", ",", 0, "Rp. "),
			},
		],
    });
    
    $("#userList").DataTable({
        responsive: true,
        paging: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });

    $("#transactionReport").DataTable({
        responsive: true,
        paging: true,
        filter: true,
        lengthChange: true,
        autoWidth: false,
        ordering: false,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
    });

    $("#itemReport").DataTable({
        responsive: true,
        paging: false,
        lengthChange: false,
        autoWidth: false,
        ordering: false,
        filter: true,
        info: false,
        language: {
            paginate: {
                first: '<i class="fas fa-angle-double-left"></i>',
                previous: '<i class="fas fa-angle-left"></i>',
                next: '<i class="fas fa-angle-right"></i>',
                last: '<i class="fas fa-angle-double-right"></i>',
            },
        },
        dom: "Bfrtip",
        buttons: [
            {
                extend: "print",
                className: "btn btn-add",
                text: "<i class='bx bx-printer'></i>Cetak",
            },
            {
                extend: "excel",
                className: "btn btn-add",
                text: "<i class='bx bx-file' ></i>Excel",
            },
            {
                extend: "pdf",
                className: "btn btn-add",
                text: "<i class='bx bxs-file-pdf'></i>Pdf",
            },
        ],
    }).buttons().container().appendTo($("#action-buttons"));
    
    $("#custom-select").select2({
        placeholder: "Tampilkan Data",
        allowClear: true,
    });
    
    $("#inputRange").daterangepicker({
        autoUpdateInput: false,
        locale: {
            applyLabel: "Pilih",
            cancelLabel: "Reset"
        }
    });
    $(".dt-buttons").removeClass("btn-group flex-wrap");
});