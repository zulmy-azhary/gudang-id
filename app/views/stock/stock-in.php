<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1>Stock In</h1>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="content">
                    <div class="container-fluid">
                        <div class="row row-content">
                            <div class="col-md-12">
                                <div class="card">
                                    <form action="<?= BASEURL ?>/stock/process" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center">
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
                                                            <input type="text" class="form-control" id="stockIn-date" name="date_in" value="<?= date('Y-m-d') ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="stockIn-code" class="col-sm-12 col-form-label">Kode Barang</label>
                                                    <div class="input-group col-sm-12">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-qr'></i>
                                                            </span>
                                                        </div>

                                                        <input type="hidden" name="id_barang_in" id="stockIn-id">
                                                        <input type="text" class="form-control rounded-right" id="stockIn-code" name="kd_barang_in" placeholder="Pilih kode barang" readonly>

                                                        <button class="btn btn-add ml-2" type="button" data-toggle="modal" data-target="#buttonModal">
                                                            +
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
                                                    <div class="row col-sm-12 m-0">
                                                        <div class="col-sm-6 pl-0">
                                                            <label for="initial-stock" class="col-form-label">Stok Awal</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class='bx bx-category-alt'></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="initial-stock" name="stok_in" value="-" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pr-0">
                                                            <label for="stockIn-stock" class="col-form-label">Tambah Stok</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class='bx bx-category-alt'></i>
                                                                    </span>
                                                                </div>
                                                                <input type="number" class="form-control" id="set-stockIn-stock" name="set_stok_in" min="1" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 button-group d-flex justify-content-end">
                                                    <div class="row-action justify-content-end">
                                                        <button type="reset" class="btn btn-cancel">Reset</button>
                                                        <button type="submit" name="stock_in_add" class="btn btn-accept">Submit</button>
                                                    </div>
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
                                    <button class="btn" type="button" data-dismiss="modal">x</button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-wrapper table-responsive">
                                        <table id="stockInList" class="table table-dark table-striped text-center">
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
                                                    <td>
                                                        <button class="btn btn-add" id="selectStockInModal"
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
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
