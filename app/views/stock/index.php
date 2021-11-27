<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1 class="m-0">History Barang Masuk</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row row-content">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <div class="col-sm-12">
                                                <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/stock/in"><i class='bx bx-plus' ></i>Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="stockInHistoryList" class="table table-dark table-striped text-center">
                                            <thead id="stockListHeader">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Admin</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data['items'] as $stockIn) : ?>
                                                <tr>
                                                    <td><?= indo_date($stockIn['date']); ?></td>
                                                    <td><?= $stockIn['kd_barang']; ?></td>
                                                    <td><?= $stockIn['nm_barang']; ?></td>
                                                    <td><?= $stockIn['qty']; ?></td>
                                                    <td><?= $stockIn['fullname']; ?></td>
                                                    <td>
                                                        <button class="btn btn-edit" data-toggle="modal" data-target="#stockInHistoryModal" id="stockInHistoryModalButton" data-id="<?= $stockIn['stock_id']; ?>">
                                                            <i class='bx bx-info-circle'></i>
                                                        </button>
                                                        <a class="btn btn-delete delete-button" href="<?= BASEURL ?>/stock/stockInDelete/<?= $stockIn['stock_id']; ?>/<?= $stockIn['id_barang']; ?>"><i class='bx bx-trash'></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- !end of main content -->
            </div>

            <!-- Modal for Edit / Update Button -->
            <div class="modal fade" id="stockInHistoryModal" aria-labelledby="modalLabel" aria-hidden="true">
                <form action="<?= BASEURL ?>/item/update" method="POST" id="updateModalForm">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content card">
                            <div class="modal-header border-0 d-flex align-items-center">
                                <h4 class="modal-title" id="modalLabel">Detail Barang Masuk</h4>
                                <!-- <button class="btn" type="button" data-dismiss="modal">x</button> -->
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="detail-group mb-4">
                                        <h4>Tanggal ditambahkan :</h4>
                                        <p id="stockInDateDetail"></p>
                                    </div>

                                    <div class="detail-group mb-4">
                                        <h4>Detail barang :</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5>Kode Barang</h5>
                                                <p id="stockInItemCodeDetail"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>Nama Barang</h5>
                                                <p id="stockInItemNameDetail"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>Kategori</h5>
                                                <p id="stockInCategoryDetail"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>Jumlah</h5>
                                                <p id="stockInQtyDetail"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail-group">
                                        <h4>Ditambahkan oleh :</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5>Nama Pengguna</h5>
                                                <p id="stockInFullNameDetail"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>User Role</h5>
                                                <p id="stockInRoleDetail"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <div class="col-md-12">
                                    <div class="row row-action justify-content-center" style="gap: 1rem;">
                                        <button class="btn btn-cancel d-flex" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
