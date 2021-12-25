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

    $("#transReport").DataTable({
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

let startDate, endDate;
let DateFilters = (function (oSettings, aData, iDataIndex) {
    let start = parseDateValue(startDate );
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

function parseDateValue(rawDate) {
    let dateArray= rawDate.split("/");
    let parsedDate= new Date(dateArray[2], parseInt(dateArray[1])-1, dateArray[0]);  
    return parsedDate;
} 

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
    
    // for show data in Laporan Barang
    let barang  = $("#myData");
    let show    = $("#dataShow")
    let action  = $("#dataAct");
    $("#custom-select").on("change", function () {
        let val = $(this).val();
        if (val == "masuk") {
            barang.show();
            action.show()
            show.removeClass("col-md-12");
        } else if (val == "keluar") {
            show.removeClass("col-md-12");
            barang.show();
            action.show();
        } else {
            barang.hide();
            action.hide()
            show.addClass("col-md-12");
        }
    }).trigger("change");
    
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
    
    $(document).on("click", "#userUpdateModalButton", function () {
        let id = $(this).data("id");
        
        $.ajax({
            url: "http://localhost/gudang-id/public/manageuser/getmodalusers",
            data: { id: JSON.stringify(id) },
            method: "POST",
            success: function (res) {
                let data = JSON.parse(res);
                console.log(data);
                
                $("#updateFullName").val(data.fullname);
                $("#updateUsername").val(data.username);
                $("#updateUserCabang").val(data.id_cabang);
                $("#updateUserRole").val(data.id_role);
                if (data.id_role == 1) {
                    $("#updateUserRole").prop("disabled", true)
                    .append($("<option selected>").val(1).text(data.nm_role));
                    $("#updateUserCabang").prop("disabled", true)
                    .append($("<option selected>").val(0).text("-"));
                    // $("#updateUserCabang").append($("<option>").text("-"));
                } else {
                    $("#updateUserRole")
                    .prop("disabled", false).find(`option[value=${1}]`).remove();
                    $("#updateUserCabang")
                    .prop("disabled", false).find(`option[value=${0}]`).remove();
                }
            },
        });
    });
    
    let myTable = $("#itemReport").DataTable();
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
}); 