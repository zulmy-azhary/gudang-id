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
    <form action="<?= BASEURL ?>/transaction/process" method="POST" role="form" novalidate="">
        <div class="container-fluid content-container">
            <div class="row row-content">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="custIdTransaction" id="custId">
                            <!-- ?for input date -->
                            <div class="form-group">
                                <label for="inputDate" class="col-sm-12 col-form-label">Tanggal</label>
                                <div class="input-group date col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="bx bx-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="dateTransaction" id="dateTransaction" class="form-control" value="<?= date('d/m/Y') ?>" readonly>
                                </div>
                            </div>
                        
                            <!-- ?for input customer -->
                            <div class="form-group">
                                <label for="custNameTransaction" class="col-sm-12 col-form-label">Nama Pelanggan</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="bx bx-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control rounded-right" id="custNameTransaction" name="custNameTransaction" placeholder="Pilih pelanggan..." readonly>
                                    <button class="btn button-actions ml-2" type="button" data-toggle="modal" data-target="#custModal">
                                        <i class='bx bx-search-alt mr-1'></i>Cari
                                    </button>
                                </div>
                            </div>
                            
                            <!-- ?for input address -->
                            <div class="form-group">
                                <label for="custAddressTransaction" class="col-sm-12 col-form-label">Alamat</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class='bx bx-map'></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="custAddressTransaction" name="custAddressTransaction" placeholder="-" readonly>
                                </div>
                            </div>
                            
                            <!-- ?for input customer number -->
                            <div class="form-group">
                                <label for="custPhoneTransaction" class="col-sm-12 col-form-label">Telepon</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class='bx bx-phone-call'></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="custPhoneTransaction" name="custPhoneTransaction" placeholder="-" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="height: 24.893rem;">
                        <div class="card-body">
                            <!-- ?for add item code -->
                            <div class="form-group">
                                <label for="itemCodeTransaction" class="col-sm-12 col-form-label">Kode Barang</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class='bx bx-barcode'></i>
                                        </div>
                                    </div>
                                    <input type="hidden" id="itemId">
                                    <input type="text" class="form-control rounded-right" id="itemCodeTransaction" placeholder="Pilih kode barang..." readonly>
                                    <button class="btn button-actions ml-2" type="button" data-toggle="modal" data-target="#itemModal">
                                        <i class='bx bx-search-alt mr-1'></i>Cari
                                    </button>
                                </div>
                            </div>
                            
                            <!-- ?for input quantity -->
                            <div class="form-group">
                                <label for="itemStockTransaction" class="col-sm-12 col-form-label">Jumlah</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class='bx bx-library'></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="itemStockTransaction" placeholder="0" min="1">
                                </div>
                            </div>
                            
                            <!-- ?for input discount -->
                            <div class="form-group">
                                <label for="itemDiscountTransaction" class="col-sm-12 col-form-label">Diskon</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class='bx bxs-discount'></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="itemDiscountTransaction" placeholder="0" min="0">
                                </div>
                            </div>
                            <div class="row-action col-sm-12 justify-content-center" style="padding-top: 2.1rem;">
                                <button id="addRows" class="btn button-actions"><i class='bx bx-cart-alt' ></i>Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body invoice">
                                <span class="col-sm-4 labels">Invoice</span>
                                <h5 class="col-sm-8 data"><?= $data['invoice']; ?></h5>
                                <input type="hidden" name="invoice" value="<?= $data['invoice']; ?>">
                            </div>
                        </div>
                    <div class="card" style="height: 20rem;">
                        <div class="form-horizontal">
                            <div class="card-body">
                            <div class="form-group">
                                    <label for="inputName" class="col-sm-12 col-form-label">Catatan</label>
                                    <div class="input-group col-sm-12">
                                    <textarea name="notes" id="notes" class="form-control" placeholder="Masukkan pesan" style="height: 13.499rem; resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-content">
                <div class="col-12 table-row">
                    <div class="card">
                        <div class="card-body">
                            <table id="transactionPage" class="table table-dark table-striped table-valign-middle table-ui">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="itemRows">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row row-content justify-content-end">
                <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body grand-total">
                                <span class="col-sm-4 labels">Grand Total</span>
                                <h5 id="grandTotalTransaction" class="col-sm-8 data">Rp. 0</h5>
                                <input type="hidden" name="grandTotalTransaction" id="grandTotal">	
                            </div>
                        </div>
                    <div class="row-action d-flex justify-content-end" style="gap: 0.5rem;">
                        <button type="button" id="detailTransactionButton" class="btn button-actions buttonDisabled" disabled data-toggle="modal" data-target="#detailsModal"><i class='bx bx-info-circle'></i>Detail</button>
                        <button type="submit" name="processTransaction" class="btn button-success buttonDisabled" disabled><i class='bx bx-check'></i></i>Proses</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Modal for add customers -->
<div class="modal fade" id="custModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content card">
                <div class="modal-header border-0 d-flex align-items-center">
                    <h4 class="modal-title" id="modalLabel">Daftar Pelanggan</h4>
                </div>
				<div class="card-header">
					<div class="col-sm-6 modal-filter"></div>
				</div>
                <div class="modal-body card-body">
                    <div class="modal-wrapper table-responsive">
                        <table id="custModalTable" class="table table-dark table-striped text-center table-ui">
                            <thead>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['custData'] as $customer) : ?>
                                <tr>
                                    <td><?= $customer['nm_pelanggan']; ?></td>
                                    <td><?= $customer['alamat']; ?></td>
                                    <td><?= $customer['no_telp']; ?></td>
                                    <td class="act-btn">
                                        <button class="btn table-act-3" id="selectCustModal"
                                                data-id="<?= $customer['cust_id']; ?>"
                                                data-name="<?= $customer['nm_pelanggan']; ?>"
                                                data-address="<?= $customer['alamat']; ?>"
                                                data-telp="<?= $customer['no_telp']; ?>">
                                            <i class='bx bx-check'></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer border-0 card-footer">
					<div class="col-sm-12 d-flex justify-content-between">
						<div class="table-footer"></div>
						<button class="btn button-actions" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
					</div>
    			</div>
			</div>
        </div>
    </div>
</div>

<!-- Modal for add items -->
<div class="modal fade" id="itemModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content card">
			<div class="modal-header border-0 d-flex align-items-center">
				<h4 class="modal-title" id="modalLabel">Daftar Barang</h4>
			</div>
			<div class="card-header">
				<div class="col-sm-6 modal-filter"></div>
			</div>
			<div class="modal-body">
				<div class="modal-wrapper table-responsive">
					<table id="itemModalTable" class="table table-dark table-striped text-center table-ui">
						<thead>
							<tr>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th class="price">Harga</th>
								<th>Stok</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data['itemData'] as $item) : ?>
							<tr>
								<td><?= $item['kd_barang']; ?></td>
								<td><?= $item['nm_barang']; ?></td>
								<td><?= $item['harga']; ?></td>
								<td><?= $item['stok']; ?></td>
								<td class="act-btn">
									<button class="btn table-act-3" id="selectItemModal"
											data-id="<?= $item['id_barang']; ?>"
											data-code="<?= $item['kd_barang']; ?>"
											data-stock="<?= $item['stok']; ?>">
										<i class='bx bx-check'></i>
									</button>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer border-0 card-footer">
				<div class="col-sm-12 d-flex justify-content-between">
					<div class="table-footer"></div>
					<button class="btn button-actions" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
				</div>
    		</div>
		</div>
	</div>
</div>

<!-- Modal for see details transactions -->
<div class="modal fade" id="detailsModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content card">
            <div class="modal-header border-0 d-flex align-items-center card-header">
                <h4 class="modal-title" id="modalLabel">Detail Transaksi</h4>
            </div>
            <div class="modal-body card-body">
                <div class="container-fluid">
                    <div class="row row-content">
                        <div class="col-sm-8">
                            <p class="brand-logo d-flex align-items-center m-0">
                                <img src="<?= BASEURL; ?>/assets/img/brand/auto.svg" alt="Gudang ID Logo" class="brand-image img-circle" style="opacity: .8">
                                <span class="brand-text">Gudang ID</span>
                            </p>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-end align-items-center">
                            <h5 class="p-0 m-0 invoice"><?= $data['invoice']; ?></h5>
                        </div>
                    </div>

                    <!-- Detail customer -->
                    <div class="row row-content justify-content-between" style="padding: 0 3rem;">
                        <div class="col-sm-5">
                            <div class="detail-cust">
                                <span class="sub-head">Nama</span>
                                <span class="sub-detail" id="detailNameTransaction"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Telepon</span>
                                <span class="sub-detail" id="detailPhoneTransaction"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Alamat</span>
                                <span class="sub-detail" id="detailAddressTransaction"></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="detail-cust">
                                <span class="sub-head">Tanggal Transaksi</span>
                                <span class="sub-detail" id="detailDateTransaction"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Catatan</span>
                                <p class="sub-detail" id="detailNotesTransaction"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Detail cart -->
                    <div class="row row-content">
                        <div class="col-12 table-row">
                            <div class="modal-wrapper table-responsive">
                            <table id="detailTrans" class="table table-dark table-striped table-valign-middle table-ui">
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
                                <tbody id="detailItemsTransaction">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="row row-content justify-content-between" style="padding: 0 3rem;">
                        <div class="col-sm-5">
                            <div class="detail-total">
                                <span class="sub-head">Admin</span>
                                <span class="sub-detail"><?= $_SESSION['fullname']; ?></span>
                            </div>
                        </div>
                        <div class="col-sm-5" style="text-align: end;">
                            <div class="detail-total">
                                <span class="sub-head">Grand total</span>
                                <span class="sub-detail" id="detailGrandTotalTransaction"></span>
                            </div>
                            <div class="detail-total">
                                <span class="sub-head">Terbilang</span>
                                <span class="sub-detail" id="detailTerbilangTransaction"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 card-footer">
				<div class="col-sm-12 d-flex justify-content-end">
					<button class="btn button-actions" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
				</div>
    		</div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>