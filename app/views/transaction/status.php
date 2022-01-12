<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-title">
                <h1 class="m-0">Status Transaksi</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="transStatus" class="table table-dark table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/12/2012</td>
                                    <td>GDID009843</td>
                                    <td>Beddu</td>
                                    <td>$4000</td>
                                    <td>Pending</td>
                                    <td>
                                        <a class="btn btn-accept" href="#"><i class='bx bx-check'></i></a>
                                        <a class="btn btn-edit" data-toggle="modal" data-target="#transHistoryModal" id="itemUpdateModalButton" data-id="<?= $item['id_barang']; ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a class="btn btn-delete delete-button" href="#"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="transHistoryModal" aria-labelledby="modalLabel" aria-hidden="true">
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
                                <div class="modal-wrapper table-responsive">
                                <table id="detailTrans" class="table table-dark table-striped table-valign-middle">
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                <div class="col-md-12">
                    <div class="row-action justify-content-center" style="gap: 1rem;">
                        <button class="btn btn-cancel d-flex" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>