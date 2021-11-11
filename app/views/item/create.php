<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 col-title">
                    <h1>Tambah Data Barang</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form action="<?= BASEURL ?>/item/add" method="POST" id="createForm" class="form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body py-5">
                                <div class="form-group row form-group-center">
                                    <label for="item-category" class="col-sm-12 col-md-2 col-form-label">Kategori</label>
                                    <div class="col-lg-4 col-md-7 col-sm-12 input-wrapper">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class='bx bx-category-alt' ></i>
                                                </span>
                                            </div>
                                            <select class="custom-select" id="item-category" name="kategori" required>
                                                <option selected value="">Pilih Kategori</option>
                                                <option value="1" data-value="EK">Elektronik</option>
                                                <option value="2" data-value="TK">Toolkits</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row form-group-center">
                                    <label for="item-code" class="col-sm-12 col-md-2 col-form-label">Kode Barang</label>
                                    <div class="col-lg-4 col-md-7 col-sm-12 input-wrapper">
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
                                <div class="form-group row form-group-center">
                                    <label for="item-name" class="col-sm-12 col-md-2 col-form-label">Nama Barang</label>
                                    <div class="col-lg-4 col-md-7 col-sm-12 input-wrapper">
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
                                <div class="form-group row form-group-center">
                                    <label for="item-price" class="col-sm-12 col-md-2 col-form-label">Harga</label>
                                    <div class="col-lg-4 col-md-7 col-sm-12 input-wrapper">
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
                                <div class="form-group row form-group-center">
                                    <label for="item-stock" class="col-sm-12 col-md-2 col-form-label">Stok</label>
                                    <div class="col-lg-4 col-md-7 col-sm-12 input-wrapper">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class='bx bx-library'></i>   
                                                </span>
                                            </div>
                                            <input type="number" id="inputItemStock" class="form-control" name="stok" min="0" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row submit-button">
                                    <div class="col-md-12 button-group">
                                        <a class="btn btn-cancel px-3 py-2" href="<?= BASEURL ?>/item">Kembali</a>
                                        <button type="submit" class="btn btn-accept create-button px-3 py-2">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>