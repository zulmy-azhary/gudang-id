<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
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
                                                <label for="inputDate" class="col-sm-12 col-form-label">Tanggal</label>
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
                                            <label for="inputName" class="col-sm-12 col-form-label">Nama Pelanggan</label>
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
                                            <label for="inputAddres" class="col-sm-12 col-form-label">Alamat</label>
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
                                            <label for="inputPhoneNumber" class="col-sm-12 col-form-label">Telepon</label>
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
                            <div class="card" style="height: 24.893rem;">
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        
                                        <!-- ?for add item code -->
                                        <div class="form-group">
                                            <label for="inputCodeItem" class="col-sm-12 col-form-label">Kode item</label>
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
                                            <label for="inputQuantity" class="col-sm-12 col-form-label">Jumlah</label>
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
                                            <label for="inputDiscount" class="col-sm-12 col-form-label">Diskon</label>
                                            <div class="input-group col-sm-12">
                                                <input type="number" class="form-control" id="inputDiscount" placeholder="0">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bxs-discount'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-action col-sm-12 justify-content-center" style="padding-top: 2.1rem;">
                                            <button class="btn btn-add d-flex justify-content-center align-items-center"><i class='bx bx-cart-alt' ></i>Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ?for invoice serial indicator -->
                        <div class="col-sm-4">
                            <div class="card" style="height: 20.4rem;">
                                <div class="form-horizontal">
                                    <div class="card-body">
                                    <div class="form-group">
                                            <label for="inputName" class="col-sm-12 col-form-label">Catatan</label>
                                            <div class="input-group col-sm-12">
                                            <textarea class="form-control" placeholder="Masukkan pesan" style="height: 13.499rem;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                    <table id="transactionPage" class="table table-dark table-striped table-valign-middle"">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Diskon</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CTR1</td>
                                                <td>Sample Name</td>
                                                <td>$2000</td>
                                                <td>200</td>
                                                <td>20%</td>
                                                <td>$2000</td>
                                                <td>
                                                    <button class="btn btn-edit">
                                                        <i class='bx bx-edit'></i>
                                                    </button>
                                                    <button class="btn btn-delete">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>CTR1</td>
                                                <td>Sample Name</td>
                                                <td>$2000</td>
                                                <td>200</td>
                                                <td>20%</td>
                                                <td>$2000</td>
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
                            <div class="row-action d-flex justify-content-end" style="gap: 0.5rem;">
                                <button class="btn btn-add d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#buttonModal"><i class='bx bx-info-circle'></i>Detail</button>
                                <button class="btn btn-accept d-flex justify-content-center align-items-center"><i class='bx bx-check'></i>Proses</button>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Modal for see details transactions -->
                <div class="modal fade" id="buttonModal" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content card">
                                <div class="modal-header border-0 d-flex align-items-center">
                                    <h4 class="modal-title" id="modalLabel">Detail Transaksi</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row row-content">
                                            <div class="col-sm-8">
                                                <p class="brand-logo d-flex align-items-center m-0">
                                                    <img src="<?= BASEURL; ?>/assets/img/brand/auto.svg" alt="Gudang ID Logo" class="brand-image img-circle" style="opacity: .8">
                                                    <span class="brand-text">Gudang ID</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-4 d-flex justify-content-end align-items-center">
                                                    <h5 class="p-0 m-0">#GDID009843</h5>
                                            </div>
                                        </div>
    
                                        <!-- Detail customer -->
                                        <div class="row row-content" style="padding-left: 3rem;">
                                            <div class="col-sm-4">
                                                <div class="detail-cust">
                                                    <span class="sub-head">Nama</span>
                                                    <span class="sub-detail">Beddu Salang</span>
                                                </div>
                                                <div class="detail-cust">
                                                    <span class="sub-head">Telepon</span>
                                                    <span class="sub-detail">085234294098</span>
                                                </div>
                                                <div class="detail-cust">
                                                    <span class="sub-head">Alamat</span>
                                                    <span class="sub-detail">Allakkuang</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="detail-cust">
                                                    <span class="sub-head">Tanggal Transaksi</span>
                                                    <span class="sub-detail">12/12/2012</span>
                                                </div>
                                                <div class="detail-cust">
                                                    <span class="sub-head">Catatan</span>
                                                    <p class="sub-detail">
                                                        Di area Pemakaman belok kanan, kemudian terus terus
                                                        sampai mentok di tikungan dekat sumur.... paket saya taro di pinggir
                                                        batu nisan aja:v
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Detail cart -->
                                        <div class="row row-content">
                                            <div class="col-12 table-row">
                                                <table id="detailTrans" class="table table-dark table-striped table-valign-middle"">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>Harga</th>
                                                            <th>Jumlah</th>
                                                            <th>Diskon</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CTR1</td>
                                                            <td>Sample Name</td>
                                                            <td>$2000</td>
                                                            <td>200</td>
                                                            <td>20%</td>
                                                            <td>$2000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CTR1</td>
                                                            <td>Sample Name</td>
                                                            <td>$2000</td>
                                                            <td>200</td>
                                                            <td>20%</td>
                                                            <td>$2000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row row-content" style="padding-left: 3rem; padding-right: 3rem;">
                                            <div class="col-sm-6">
                                                <div class="detail-total">
                                                        <span class="sub-head">Total Barang</span>
                                                        <span class="sub-detail">400</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="text-align: end;">
                                                <div class="detail-total">
                                                    <span class="sub-head">Total Bayar</span>
                                                    <span class="sub-detail">$4000</span>
                                                </div>
                                                <div class="detail-total">
                                                    <span class="sub-head">Terbilang</span>
                                                    <span class="sub-detail">Empat Ribu Dollar</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                <div class="col-md-12">
                                    <div class="row-action justify-content-center" style="gap: 1rem;">
                                        <button class="btn btn-cancel d-flex" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
                                        <button type="submit" class="btn btn-accept update-button d-flex"><i class='bx bx-printer'></i>Cetak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <?php require APPROOT . '/views/includes/footer.php'?>
        </div>
        <?php require APPROOT . '/views/includes/script.php'?>
    </body>
</html>
