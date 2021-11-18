<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-title">
                                <h1>Stock In</h1>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="content">
                    <div class="container-fluid">
                        <form action="<?= BASEURL ?>/stock/process" method="POST" id="createForm" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card py-5">
                                        <div class="card-body d-flex justify-content-center">
                                            <div class="form-wrapper col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="stockIn-date">Tanggal</label>
                                                    <input type="date" class="form-control" id="stockIn-date" name="date_in" value="<?= date('Y-m-d') ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="stockIn-code">Kode Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" name="id_barang_in" id="stockIn-id">
                                                        <input type="text" class="form-control" id="stockIn-code" name="kd_barang_in" placeholder="Pilih kode barang..." readonly>
                                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buttonModal">
                                                            <i class='bx bx-search-alt' ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="stockIn-name">Nama Barang</label>
                                                    <input type="text" class="form-control" id="stockIn-name" name="nm_barang_in" value="-" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="stockIn-category">Kategori</label>
                                                    <input type="text" class="form-control" id="stockIn-category" name="nm_kat_in" value="-" readonly>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="initial-stock">Stok Awal</label>
                                                        <input type="text" class="form-control" id="initial-stock" name="stok_in" value="-" readonly>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="stockIn-stock">Tambah Stok</label>
                                                        <input type="number" class="form-control" id="set-stockIn-stock" name="set_stok_in" min="1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-5 mb-0">
                                                    <div class="footer-wrapper d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-cancel">Reset</button>
                                                        <button type="submit" name="stock_in_add" class="btn btn-accept">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                
                <!-- Modal -->
                <div class="modal fade" id="buttonModal" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modalLabel">List Barang</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-wrapper table-responsive">
                                    <table id="stockInList" class="table table-striped text-center">
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
                                                    <button class="btn btn-primary" id="selectStockInModal"
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
