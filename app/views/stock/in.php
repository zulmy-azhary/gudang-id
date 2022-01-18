<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-title">
                <h1>Tambah Stok Barang Masuk</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row row-content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header item-table-head">
						<div class="col-sm-12 button-slot">
							<a class="btn button-actions" href="<?= BASEURL ?>/stock"><i class='bx bx-undo'></i>Kembali</a>
						</div>
                    </div>
                    <form action="<?= BASEURL ?>/stock/process" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center align-items-center flex-column">
                        <div class="card-body col-md-6">
                            <div class="form-group">
                                <label for="stockIn-date" class="col-sm-12 col-form-label">Tanggal</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class='bx bx-calendar'></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="stockIn-date" name="date_in" value="<?= date('d-m-Y') ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stockIn-code" class="col-sm-12 col-form-label">Kode Barang</label>
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="bx bx-barcode"></i>
                                        </span>
                                    </div>

                                    <input type="hidden" name="id_barang_in" id="stockIn-id">
                                    <input type="text" class="form-control rounded-right" id="stockIn-code" name="kd_barang_in" placeholder="Pilih kode barang..." readonly>

                                    <button class="btn button-actions ml-2" type="button" data-toggle="modal" data-target="#buttonModal">
                                        <i class='bx bx-search-alt mr-1'></i>Cari
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stockIn-name" class="col-sm-12 col-form-label">Nama barang</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class='bx bx-purchase-tag-alt' ></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="stockIn-name" name="nm_barang_in" value="-" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stockIn-category" class="col-sm-12 col-form-label">Kategori</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class='bx bx-category-alt'></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="stockIn-category" name="nm_kat_in" value="-" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row col-sm-12 col-md-12 col-lg-12 m-0 p-0">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="initial-stock" class="col-form-label">Stok Awal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class='bx bx-archive' ></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="initial-stock" name="stok_in" value="-" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="stockIn-stock" class="col-form-label">Tambah Stok</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class='bx bx-archive-in'></i>
                                                </span>
                                            </div>
                                            <input type="number" class="form-control" id="setStockIn" name="set_stok_in" min="1" max="9999" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="card-footer d-flrx d-flex justify-content-center">
							<div class="row-action col-md-6 justify-content-end">
								<button type="reset" class="btn button-warning buttonReset"><i class='bx bx-reset'></i>Reset</button>
								<button type="submit" name="stock_in_add" class="btn button-success buttonDisabled" disabled><i class='bx bx-save' ></i>Simpan</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="buttonModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content card">
                <div class="modal-header border-0 d-flex align-items-center">
                    <h4 class="modal-title" id="modalLabel">List Barang</h4>
                </div>
				<div class="card-header">
					<div class="col-sm-6 modal-filter"></div>
				</div>
                <div class="modal-body">
                    <div class="modal-wrapper table-responsive">
                        <table id="stockInList" class="table table-dark table-striped text-center table-ui">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['items'] as $item) : ?>
                                <tr>
                                    <td><?= $item['kd_barang']; ?></td>
                                    <td><?= $item['nm_barang']; ?></td>
                                    <td><?= $item['nm_kat']; ?></td>
                                    <td><?= $item['stok']; ?></td>
                                    <td class="act-btn">
                                        <button class="btn table-act-3" id="selectStockInModal"
                                                data-id="<?= $item['id_barang']; ?>"
                                                data-code="<?= $item['kd_barang']; ?>"
                                                data-name="<?= $item['nm_barang']; ?>"
                                                data-category="<?= $item['nm_kat']; ?>"
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>