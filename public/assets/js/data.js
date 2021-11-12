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
			url: "http://localhost/gudang-id/public/json/itemJson",
			method: "post",
			data: { data: JSON.stringify(data) },
			success: function () {
				// Get json file
				$.getJSON("http://localhost/gudang-id/public/json/jsonData.json", function (data) {
					let dataset = data;
					$("#item-code").val(dataset.code);
					if (data.key == null) {
						$("#item-code").val("-");
					}
				});
			},
		});
	});

	// Select Item from Stock In
	$(document).on('click', '#selectStockInModal',function () {
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
});