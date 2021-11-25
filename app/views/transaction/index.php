<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . 'views/includes/head.php' ?>
    <body class="hold-tansition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1 class="m-0">Transaksi</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid content-container">
                        <div class="row row-content">
                            <div class="col-sm-4">
                                <div class="card">
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                        
                                            <!-- ?for input date -->
                                            <div class="form-group">
                                                <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
                                                <div class="input-group date col-sm-12" id="reservationdate" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="dd/mm/yyyy"/>
                                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                        <div class="input-group-text">
                                                            <i class="bx bx-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <!-- ?for input customer -->
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-12 col-form-label">Customer</label>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- ?for input address -->
                                        <div class="form-group">
                                            <label for="inputAddres" class="col-sm-12 col-form-label">Address</label>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" id="inputAddres" placeholder="Address">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bx-map'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- ?for input customer number (opsional)-->
                                        <div class="form-group">
                                            <label for="inputPhoneNumber" class="col-sm-12 col-form-label">Phone</label>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" id="inputPhoneNumber" placeholder="08xxx">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bx-phone-call'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 24.68rem;">
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        
                                        <!-- ?for add item code -->
                                        <div class="form-group">
                                            <label for="inputCodeItem" class="col-sm-12 col-form-label">Item code</label>
                                            <div class="input-group col-sm-12">
                                                <input type="search" class="form-control" id="inputCodeItem" placeholder="AA12">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bx-search-alt' ></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- ?for input quantity -->
                                        <div class="form-group">
                                            <label for="inputQuantity" class="col-sm-12 col-form-label">Quantity</label>
                                            <div class="input-group col-sm-12">
                                                <input type="number" class="form-control" id="inputQuantity" placeholder="0">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bx-library'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- ?for input discount -->
                                        <div class="form-group">
                                            <label for="inputDiscount" class="col-sm-12 col-form-label">Discount</label>
                                            <div class="input-group col-sm-12">
                                                <input type="number" class="form-control" id="inputDiscount" placeholder="0">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bxs-discount'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-action col-sm-12" style="padding-top: 2.1rem;">
                                            <button class="btn btn-add w-100">add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ?for invoice serial indicator -->
                        <div class="col-sm-4">
                            <div class="box-wrapper">
                                <div class="small-box shadow-none">
                                    <div class="row col-sm-12 justify-content-between">
                                        <span>Invoice</span>
                                        <h5 class="p-0 m-0">GDID009843</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-content">
                        <div class="col-12 table-row">
                            <div class="card">
                                <div class="card-body">
                                    <table id="transaction" class="table table-striped table-valign-middle"">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Discount</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CTR1</td>
                                                <td>Sample Name</td>
                                                <td>Sample Category</td>
                                                <td>$2000</td>
                                                <td>200</td>
                                                <td>20%</td>
                                                <td>234</td>
                                                <td>
                                                    <button class="btn btn-edit">
                                                        <i class='bx bx-edit'></i>
                                                    </button>
                                                    <button class="btn btn-delete">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row row-content justify-content-end">
                        <div class="col-sm-4">
                            <div class="box-wrapper">
                                <div class="small-box shadow-none">
                                    <div class="row col-sm-12 justify-content-between">
                                        <span>Grand Total</span>
                                        <h5 class="p-0 m-0">$20.000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row-action d-flex justify-content-between" style="gap: 0.5rem;">
                                <button class="btn btn-accept col-sm-6">process</button>
                                <button class="btn btn-cancel col-sm-6">clear</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require APPROOT . '/views/includes/footer.php'?>
        </div>
        <?php require APPROOT . '/views/includes/script.php'?>
    </body>
</html>
