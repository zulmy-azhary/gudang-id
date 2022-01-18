<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-title">
                <h1>Tambah Data Barang</h1>
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
							<a class="btn button-actions" href="<?= BASEURL ?>/item/index"><i class='bx bx-undo'></i>Kembali</a>
						</div>
                    </div>
                    <form action="<?= BASEURL ?>/item/create" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center align-items-center flex-column">
                        <div class="card-body col-md-6">

                            <div class="form-group">
                                <label for="item-category" class="col-sm-12 col-form-label">Kategori</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-category-alt' ></i>
                                            </span>
                                        </div>
                                        <select class="custom-select" id="item-category" name="kategori" required>
                                            <option selected data-value="-" value="">Pilih Kategori</option>
                                            <option value="1" data-value="EK">Elektronik</option>
                                            <option value="2" data-value="TK">Toolkits</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="item-code" class="col-sm-12 col-form-label">Kode Barang</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="bx bx-barcode"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="item-code" class="form-control" name="kd_barang" readonly value="-">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="item-name" class="col-sm-12 col-form-label">Nama Barang</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="bx bx-purchase-tag"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="item-name" class="form-control" name="nm_barang" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="item-price" class="col-sm-12 col-form-label">Harga</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-dollar-circle' ></i>
                                            </span>
                                        </div>
                                        <input type="number" id="item-price" class="form-control" name="harga" min="1000" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="card-footer d-flex justify-content-center">
							<div class="row-action col-md-6 justify-content-end">
								<button type="reset" class="btn button-warning"><i class='bx bx-reset'></i>Reset</button>
								<button type="submit" class="btn button-success create-button d-flex"><i class='bx bx-save' ></i>Simpan</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>