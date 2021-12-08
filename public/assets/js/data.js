// ! Datatables
$(function () {
	// Table for item list
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

	// Table for Stock In list
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

	// Table for history barang masuk in Stock In
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
	});

	// Table for Customer
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
    
    //transaction page
    $("#transactionPage").DataTable({
		responsive: true,
        paging: false,
        filter: false,
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
		columnDefs: [
			{
				targets: 3,
				render: $.fn.dataTable.render.number(".", ",", 0, "Rp. "),
			},
		],
	});
    
});

// ! Event
$(document).ready(function () {
	// Item code when add item
	$("#item-category").on("change", function () {
		let key = $(this).children("option:selected").data("value");
		let data = {
			category: this.value,
			key: key,
		};
		$.ajax({
			url: "http://localhost/gudang-id/public/item/getitemcode",
			method: "post",
			data: { data: JSON.stringify(data) },
			success: function (data) {
				// Get json file
				let dataset = JSON.parse(data);
				$("#item-code").val(dataset.code);
				if (dataset.key == "-") {
					$("#item-code").val("-");
				}
			},
		});
	});

	// Select Item from Stock In
	$(document).on("click", "#selectStockInModal", function () {
		let id = $(this).data("id");
		let code = $(this).data("code");
		let name = $(this).data("name");
		let category = $(this).data("category");
		let stock = $(this).data("stock");
		$("#stockIn-id").val(id);
		$("#stockIn-code").val(code);
		$("#stockIn-name").val(name);
		$("#stockIn-category").val(category);
		$("#initial-stock").val(stock);
		$("#buttonModal").modal("hide");
	});

	// Update data barang from Item List
	$(document).on("click", "#itemUpdateModalButton", function () {
		let id = $(this).data("id");

		$.ajax({
			url: "http://localhost/gudang-id/public/item/getmodalitem",
			data: { id: JSON.stringify(id) },
			method: "POST",
			success: function (res) {
				let data = JSON.parse(res);

				$("#updateIdBarang").val(data.id_barang);
				$("#updateItemCode").val(data.kd_barang);
				$("#updateItemName").val(data.nm_barang);
				$("#updateCategoryName").val(data.nm_kat);
				$("#updateCategory").val(data.id_kat);
				$("#updatePrice").val(data.harga);
			},
		});
	});

	// Update data barang from Item List
	$(document).on("click", "#customerUpdateModalButton", function () {
		let id = $(this).data("id");

		$.ajax({
			url: "http://localhost/gudang-id/public/customer/getmodalcustomer",
			data: { id: JSON.stringify(id) },
			method: "POST",
			success: function (res) {
				let data = JSON.parse(res);

				$("#updateCustomerId").val(data.cust_id);
				$("#updateCustomerCode").val(data.kd_pelanggan);
				$("#updateCustomerName").val(data.nm_pelanggan);
				$("#updateCustomerAddress").val(data.alamat);
				$("#updateCustomerPhoneNumber").val(data.no_telp);
			},
		});
	});
});
