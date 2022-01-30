<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-title">
                <h1 class="m-0">Riwayat Transaksi</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
					<div class="card-header">
						<div class="col-sm-6 length-filter"></div>
                    </div>
                    <div class="card-body">
                        <table id="transHistory" class="table table-dark table-striped text-center table-ui">
                            <thead id="itemListHeader">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama Pelanggan</th>
                                    <th class="price">Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['items'] as $item) : ?>
                                <tr>
                                    <td><?= indodate($item['date']); ?></td>
                                    <td><?= $item['invoice']; ?></td>
                                    <td><?= $item['nm_pelanggan']; ?></td>
                                    <td><?= $item['grand_total']; ?></td>
                                    <td class="act-btn">
                                        <a class="btn table-act-1" data-toggle="modal" data-target="#transHistoryModal" id="historyTransactionModal" data-id="<?= $item['order_id']; ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <?php if($_SESSION['id_role'] == 1) : ?>
                                        <a class="btn table-act-2 delete-button" href="<?= BASEURL ?>/transaction/deletetransaction/<?= $item['order_id']; ?>"><i class='bx bx-trash'></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
					<div class="card-footer">
						<div class="col-sm-12 table-footer">

						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="transHistoryModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
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
                            <h5 class="p-0 m-0 invoice" id="invoiceHistory"></h5>
                        </div>
                    </div>

                    <!-- Detail customer -->
                    <div class="row row-content justify-content-between" style="padding: 0 3rem;">
                        <div class="col-sm-5">
                            <div class="detail-cust">
                                <span class="sub-head">Nama</span>
                                <span class="sub-detail" id="nameHistory"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Telepon</span>
                                <span class="sub-detail" id="phoneHistory"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Alamat</span>
                                <span class="sub-detail" id="addressHistory"></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="detail-cust">
                                <span class="sub-head">Tanggal Transaksi</span>
                                <span class="sub-detail" id="dateHistory"></span>
                            </div>
                            <div class="detail-cust">
                                <span class="sub-head">Catatan</span>
                                <p class="sub-detail" id="noteHistory"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Detail cart -->
                    <div class="row row-content">
                        <div class="col-12 table-row">
                            <div class="modal-wrapper table-responsive">
                            <table id="detailTransHistory" class="table table-dark table-striped table-valign-middle table-ui">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th class="price">Harga</th>
                                        <th>Jumlah</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="detailHistoryTransaction">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="row row-content justify-content-between" style="padding: 0 3rem;">
                        <div class="col-sm-5">
                            <div class="detail-total">
                                <span class="sub-head">Admin</span>
                                <span class="sub-detail" id="adminHistory"></span>
                            </div>
                        </div>
                        <div class="col-sm-5" style="text-align: end;">
                            <div class="detail-total">
                                <span class="sub-head">Grand total</span>
                                <span class="sub-detail" id="grandTotalHistory"></span>
                            </div>
                            <div class="detail-total">
                                <span class="sub-head">Terbilang</span>
                                <span class="sub-detail" id="terbilangHistory"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 card-footer">
				<div class="col-sm-12 d-flex justify-content-center" style="gap: 1rem;">
					<button class="btn button-warning" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
                    <button type="submit" class="btn button-actions d-flex"><i class='bx bx-printer'></i>Cetak</button>
				</div>
    		</div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>