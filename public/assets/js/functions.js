// !for initialize another plugins
$(function () {
	tableTemplate(".table-ui");
	tableComponents();
	
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

// ! Date Filter
let startDate, endDate;
let DateFilters = function (oSettings, aData, iDataIndex) {
	let start = parseDateValue(startDate);
	let end = parseDateValue(endDate);

	let evalDate = parseDateValue(aData[0]);
	if (
		(isNaN(start) && isNaN(end)) ||
		(isNaN(start) && evalDate <= end) ||
		(start <= evalDate && isNaN(end)) ||
		(start <= evalDate && evalDate <= end)
	) {
		return true;
	}
	return false;
};

// ! Main Table
function tableTemplate(tableName) {
	$(tableName).DataTable({
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
}

// !global access for modification table components
function tableComponents() {
	$(`.custom-select`).appendTo($(`.length-filter`)).removeClass(`form-control-sm`);
	$(`.dataTables_filter`).appendTo($(`.length-filter, .modal-filter`));
	$(`.table-footer`).append($(`.dataTables_paginate`));
	$(".dt-buttons").appendTo($(".action-buttons"));
	$(`input[placeholder = "Cari"]`).removeClass(`form-control-sm`);
	$(".dt-buttons").removeClass("btn-group flex-wrap");
}


function parseDateValue(rawDate) {
	let dateArray = rawDate.split("/");
	let parsedDate = new Date(dateArray[2], parseInt(dateArray[1]) - 1, dateArray[0]);
	return parsedDate;
}

// ! Item Rows format
function itemRows(id, code, name, price, stock, discount, total) {
	$("#itemRows").append(`
        <tr>
            <input type="hidden" name="itemIdAdd[]" value="${id}">
            <td><input type="hidden" name="itemCodeAdd[]" value="${code}">${code}</td>
            <td><input type="hidden" name="itemNameAdd[]" value="${name}">${name}</td>
            <td><input type="hidden" id="itemPriceAdd${id}" name="itemPriceAdd[]" value="${price}">Rp. ${commafy(
		price
	)}</td>
            <td><input type="hidden" id="itemStockAdd${id}" name="itemStockAdd[]" value="${stock}">${stock}</td>
            <td><input type="hidden" id="itemDiscountAdd${id}" name="itemDiscountAdd[]" value="${discount}">${discount}${
		discount == 0 ? "" : "%"
	}</td>
            <td><input type="hidden" id="itemTotalAdd${id}" name="itemTotalAdd[]" value="${total}">Rp. ${commafy(
		total
	)}</td>
            <td class="act-btn"><button type="button" class="btn table-act-2 deleteRow"><i class='bx bx-trash'></i></button></td>
        </tr>
    `);
}

// ! Discount in transaction
function discount(price, stock, discount) {
	return parseInt(price * stock) - price * stock * (discount / 100);
}

function setTextContents(element, text) {
	element.contents().filter(function () {
		if (this.nodeType == Node.TEXT_NODE) {
			this.nodeValue = text;
		}
	});
}

// ! Calculate grand total in transaction
function calculateTotal() {
	let totalAmount = 0;
	$("[id^='itemPriceAdd']").each(function () {
		let id = $(this).attr("id");
		id = id.replace("itemPriceAdd", "");
		let price = $(`#itemPriceAdd${id}`).val();
		let qty = $(`#itemStockAdd${id}`).val();
		let itemDiscount = $(`#itemDiscountAdd${id}`).val();
		let total = discount(price, qty, itemDiscount);
		$(`#itemTotalAdd${id}`).val(total);
		totalAmount += total;
	});

	$("#grandTotal").val(totalAmount);
	$("#grandTotalTransaction").html(`Rp. ${commafy(totalAmount)}`);
}

// ! Price format, every 3 digit add dot (.) as separator
function commafy(num) {
	let str = num.toString().split(".");
	if (str[0].length >= 4) {
		str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, "$1.");
	}
	return str.join(".");
}

// ! 
function callback(param) {
	$.ajax({
		url: "http://localhost/gudang-id/public/report/getstockreport",
		data: { type: param },
		method: "POST",
		success: function (res) {
			let data = JSON.parse(res);
			$("#itemReport_paginate").remove();
			$("#itemReport").DataTable().destroy();
			$("tbody").children().remove();
			data.forEach((stock) => {
				$("tbody").append(`
                    <tr>
                        <td>${moment(stock.date).format("DD/MM/YYYY")}</td>
                        <td>${stock.kd_barang}</td>
                        <td>${stock.nm_barang}</td>
                        <td>${stock.nm_kat}</td>
                        <td>${stock.qty}</td>
                    </tr>
                `);
			});
			$("#itemReport").addClass("table table-ui");
			tableTemplate("#itemReport");
			tableComponents();
			dateRange();
		},
	});
}

// ! Date range
function dateRange() {
	// ! Report
	let myTable = $(".table").DataTable();
	$("#inputRange").on("apply.daterangepicker", function (ev, picker) {
		$(this).val(
			picker.startDate.format("DD/MM/YYYY") + " - " + picker.endDate.format("DD/MM/YYYY")
		);
		startDate = picker.startDate.format("DD/MM/YYYY");
		endDate = picker.endDate.format("DD/MM/YYYY");
		$.fn.dataTableExt.afnFiltering.push(DateFilters);
		myTable.draw();
	});

	$("#inputRange").on("cancel.daterangepicker", function (ev, picker) {
		$(this).val("");
		startDate = "";
		endDate = "";
		$.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilters, 1));
		myTable.draw();
	});
}


// function getAjaxData(sendData, ajaxUrl) {
//     const url = getAjaxUrl(ajaxUrl);

//     $.ajax({
//         url: url,
//         data: { type: sendData },
//         method: "POST",
//         success: function (response) {
//             const data = JSON.parse(response);
//             displayData(data);
//         }
//     })
// }

// function getAjaxUrl(url) {
//     return `http://localhost/gudang-id/public/${url}`;
// }

// function displayData(data) {
//     data.forEach((stock) => {
// 		$("#itemReport").children("tbody").append(`
//             <tr>
//                 <td>${moment(stock.date).format("DD/MM/YYYY")}</td>
//                 <td>${stock.kd_barang}</td>
//                 <td>${stock.nm_barang}</td>
//                 <td>${stock.nm_kat}</td>
//                 <td>${stock.qty}</td>
//             </tr>
//         `);
// 	});
// }