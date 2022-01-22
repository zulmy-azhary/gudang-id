let startDate, endDate;
let DateFilters = (function (oSettings, aData, iDataIndex) {
    let start = parseDateValue(startDate);
    let end = parseDateValue(endDate);
    
    let evalDate= parseDateValue(aData[0]);
    if ( ( isNaN( start ) && isNaN( end ) ) ||
    ( isNaN( start ) && evalDate <= end ) ||
    ( start <= evalDate && isNaN( end ) ) ||
    ( start <= evalDate && evalDate <= end ) )
    {
        return true;
    }
    return false;
});

// TODO: Event
$(document).ready(function () {
    
    // ! Item
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
        $(".buttonDisabled").prop("disabled", false);
        $("#buttonModal").modal("hide");
        $(document).on('click', ".buttonReset", function () {
            $(".buttonDisabled").prop("disabled", true);
        })
    });

    $("#setStockIn").on("keyup", function () {
		if ($(this).val() > $(this).attr("max") * 1) {
			$(this).val($(this).attr("max"));
        }
        else if ($(this).val() < $(this).attr("min") * 1) {
            $(this).val($(this).attr("min"))
        }
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
    
    // ! Customer
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

    // ! Transaction
    // Customer
    $(document).on("click", "#selectCustModal", function () {
        let id = $(this).data("id");
        let name = $(this).data("name");
        let address = $(this).data("address");
        let telp = $(this).data("telp");
        $("#custId").val(id);
        $("#custNameTransaction").val(name);
        $("#custAddressTransaction").val(address);
        $("#custPhoneTransaction").val(telp);
        $("#custModal").modal("hide");
    });

    // Item
    $(document).on("click", "#selectItemModal", function () {
        let id = $(this).data("id");
        let code = $(this).data("code");
        let stock = $(this).data("stock");
        $("#itemId").val(id);
        $("#itemCodeTransaction").val(code);
        $("#itemStockTransaction").val(1).attr('max', stock);
        $("#itemDiscountTransaction").val(0);
        $("#itemModal").modal("hide");

        $("#itemStockTransaction").on('keyup', function () {
            if ($(this).val() > $(this).attr("max") * 1) {
                $(this).val($(this).attr("max"));
            }
            else if ($(this).val() < $(this).attr("min") * 1) {
                $(this).val($(this).attr("min"));
            }
        })
        $("#itemDiscountTransaction").keyup(function () {
            if ($(this).val() < $(this).attr("min") * 1) {
                $(this).val($(this).attr("min"));
            }
        });
    });

    // Add item transaction
    $(document).on("click", "#addRows", function (e) {
		e.preventDefault();
        
		let itemId = $("#itemId").val();
        let custId = $("#custId").val();
        if (itemId && custId) {
            let itemStockTransaction = $("#itemStockTransaction").val();
            let itemDiscountTransaction = $("#itemDiscountTransaction").val();
            $(".dataTables_empty").parent().remove();
            $(".buttonDisabled").prop("disabled", false);
            $.ajax({
                url: "http://localhost/gudang-id/public/item/getmodalitem",
                data: { id: itemId },
                method: "POST",
                success: function (res) {
                    let data = JSON.parse(res);
                    let el = parseInt($(`#itemStockAdd${itemId}`).val());
                    let total = discount(data.harga, itemStockTransaction, itemDiscountTransaction);
                    if ($("input[name='itemIdAdd[]']").length > 0) {
                        if ($(`#itemStockAdd${itemId}`).length > 0) {
                            el += parseInt(itemStockTransaction);
                            total = discount(data.harga, el, parseInt($(`#itemDiscountAdd${itemId}`).val()));
                            $(`#itemStockAdd${itemId}`).val(el)
                            $(`#itemTotalAdd${itemId}`).val(total);
                            setTextContents($(`#itemStockAdd${itemId}`).parent(), el);
                            setTextContents($(`#itemTotalAdd${itemId}`).parent(), `Rp. ${commafy(total)}`);
                        }
                        else {
                            itemRows(itemId, data.kd_barang, data.nm_barang, data.harga, itemStockTransaction, itemDiscountTransaction, total);
                        }
                    }
                    else {
                        itemRows(itemId, data.kd_barang, data.nm_barang, data.harga, itemStockTransaction, itemDiscountTransaction, total);
                    }

                    calculateTotal();
                },
            });
        }
    });
    
    // delete row in transaction
    $(document).on('click', '.deleteRow', function () {
        $(this).each(function () {
            $(this).closest('tr').remove();
        })
        if ($("input[name='itemIdAdd[]']").length <= 0) {
            $("#transactionPage").DataTable().clear().draw();
            $(".buttonDisabled").prop("disabled", true);
        }
        calculateTotal();
    })

    // Detail Transaction
    $(document).on("click", "#detailTransactionButton", function () {
        $("#detailItemsTransaction").children().remove();
        let detailDateTransaction = $("#dateTransaction").val();
        let detailNameTransaction = $("#custNameTransaction").val();
        let detailPhoneTransaction = $("#custPhoneTransaction").val();
        let detailAddressTransaction = $("#custAddressTransaction").val();
        let notes = $("#notes").val();
        let grandTotal = $("#grandTotal").val();

        $("#detailDateTransaction").html(detailDateTransaction);
        $("#detailNameTransaction").html(detailNameTransaction);
        $("#detailPhoneTransaction").html(detailPhoneTransaction);
        $("#detailAddressTransaction").html(detailAddressTransaction);
        $("#detailNotesTransaction").html(notes);
        $("#detailGrandTotalTransaction").html(`Rp. ${commafy(grandTotal)}`);
        $("#detailTerbilangTransaction").html(terbilang(grandTotal).replace(/  +/g, ' '));

        let code = $("input[name='itemCodeAdd[]']");
        let name = $("input[name='itemNameAdd[]']");
        let price = $("input[name='itemPriceAdd[]']");
        let stock = $("input[name='itemStockAdd[]']");
        let discount = $("input[name='itemDiscountAdd[]']");
        let total = $("input[name='itemTotalAdd[]']");
        for (let i = 0; i < code.length; i++) {
            $("#detailItemsTransaction").append(`
                <tr>
                    <td>${code[i].value}</td>
                    <td>${name[i].value}</td>
                    <td>Rp. ${commafy(price[i].value)}</td>
                    <td>${stock[i].value}</td>
                    <td>${discount[i].value}${discount[i].value == 0 ? "" : "%"}</td>
                    <td>Rp. ${commafy(total[i].value)}</td>
                </tr>
            `);
        }
    })

    // !Transaction History
    $(document).on("click", "#historyTransactionModal", function () {
        $("#detailHistoryTransaction").children().remove();
        let id = $(this).data('id');
        
        $.ajax({
            url: "http://localhost/gudang-id/public/transaction/gethistory",
            data: { id: id },
            method: "POST",
            success: function (res) {
                let data = JSON.parse(res);
                $("#invoiceHistory").html(data.invoice.invoice);
                $("#nameHistory").html(data.invoice.nm_pelanggan);
                $("#phoneHistory").html(data.invoice.no_telp);
                $("#addressHistory").html(data.invoice.alamat);
                $("#dateHistory").html(moment(data.invoice.created_at).format("DD/MM/YYYY hh:mm A"));
                $("#noteHistory").html(data.invoice.note);
                $("#adminHistory").html(data.invoice.fullname);
                $("#grandTotalHistory").html(`Rp. ${commafy(data.invoice.grand_total)}`);
                $("#terbilangHistory").html(terbilang(data.invoice.grand_total).replace(/  +/g, ' '));
                data.items.forEach(item => {
                    $("#detailHistoryTransaction").append(`
                    <tr>
                        <td>${item.kd_barang}</td>
                        <td>${item.nm_barang}</td>
                        <td>Rp. ${commafy(item.price)}</td>
                        <td>${item.qty}</td>
                        <td>${item.discount}${item.discount == 0 ? "" : "%"}</td>
                        <td>Rp. ${commafy(item.total)}</td>
                    </tr>
                    `);
                });
            },
        })
    });

    // ! Report
    let myTable = $(".table").DataTable();
    $("#inputRange").on("apply.daterangepicker", function(ev, picker) {
        $(this).val(picker.startDate.format("DD/MM/YYYY") + " - " + picker.endDate.format("DD/MM/YYYY"));
        startDate = picker.startDate.format("DD/MM/YYYY");
        endDate = picker.endDate.format("DD/MM/YYYY");
        $.fn.dataTableExt.afnFiltering.push(DateFilters);
        myTable.draw();
    });
    
    $("#inputRange").on("cancel.daterangepicker", function(ev, picker) {
        $(this).val("");
        startDate = "";
        endDate = "";
        $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilters, 1));
        myTable.draw();
    });
    
    
    // for show data in Laporan Barang
    let barang  = $("#myData");
    $(".data-show").on("change", function () {
        let val = $(this).val();
        if (val == "in") {
            barang.fadeIn(200);
            document.title = "Gudang ID | Barang Masuk";
            callback(val);
        } else if (val == "out") {
            barang.fadeIn(200);
            document.title = "Gudang ID | Barang Keluar";
            callback(val);
        } else {
            barang.fadeOut(200);
            document.title = "Gudang ID | Item Report";
        }
    }).trigger("change");

    // ! Recent Transaction in Dashboard Page
    for (let i = 0; i < $(".date-transaction").length; i++) {
		let dateRecentTransaction = $(".date-transaction")[i];
		$(".date-transaction")[i].innerHTML = moment(dateRecentTransaction.innerHTML).locale("id").fromNow();
	}
	
	for (let i = 0; i < $(".grand-total-trans").length; i++) {
		let grandTotalTransaction = $(".grand-total-trans")[i];
		$(".grand-total-trans")[i].innerHTML = `Rp. ${commafy(grandTotalTransaction.innerHTML)},-`
	}
});




function parseDateValue(rawDate) {
	let dateArray = rawDate.split("/");
	let parsedDate = new Date(dateArray[2], parseInt(dateArray[1]) - 1, dateArray[0]);
	return parsedDate;
} 

// Item Rows format
function itemRows(id, code, name, price, stock, discount, total) {
    $("#itemRows").append(`
        <tr>
            <input type="hidden" name="itemIdAdd[]" value="${id}">
            <td><input type="hidden" name="itemCodeAdd[]" value="${code}">${code}</td>
            <td><input type="hidden" name="itemNameAdd[]" value="${name}">${name}</td>
            <td><input type="hidden" id="itemPriceAdd${id}" name="itemPriceAdd[]" value="${price}">Rp. ${commafy(price)}</td>
            <td><input type="hidden" id="itemStockAdd${id}" name="itemStockAdd[]" value="${stock}">${stock}</td>
            <td><input type="hidden" id="itemDiscountAdd${id}" name="itemDiscountAdd[]" value="${discount}">${discount}${discount == 0 ? "" : "%"}</td>
            <td><input type="hidden" id="itemTotalAdd${id}" name="itemTotalAdd[]" value="${total}">Rp. ${commafy(total)}</td>
            <td class="act-btn"><button type="button" class="btn table-act-2 deleteRow"><i class='bx bx-trash'></i></button></td>
        </tr>
    `);
}

function discount(price, stock, discount) {
    return parseInt(price * stock) - ((price * stock) * (discount / 100));
}

function setTextContents(element, text) {
    element.contents().filter(function () {
        if (this.nodeType == Node.TEXT_NODE) {
            this.nodeValue = text;
        }
    })
}

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

// Price format, every 3 digit add dot (.) as separator
function commafy(num) {
    let str = num.toString().split(".");
    if (str[0].length >= 4) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, "$1.");
    }
	return str.join(".");
}

function callback(param) {
    $.ajax({
        url: "http://localhost/gudang-id/public/report/getstockreport",
        data: { type: param },
        method: "POST",
        success: function (res) {
            let data = JSON.parse(res);
            $("#itemReport").children("tbody").children().remove();
            data.forEach((stock) => {
                $("#itemReport").children("tbody").append(`
                    <tr>
                        <td>${moment(stock.date).format("DD/MM/YYYY")}</td>
                        <td>${stock.kd_barang}</td>
                        <td>${stock.nm_barang}</td>
                        <td>${stock.nm_kat}</td>
                        <td>${stock.qty}</td>
                    </tr>
                `);
            });
        },
    });
}