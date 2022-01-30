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
    
    dateRange();
    
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