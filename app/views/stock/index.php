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
                                <h1 class="m-0">Riwayat Barang Masuk</h1>
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
                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <div class="col-sm-12">
                                                <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/stock/in"><i class='bx bx-plus' ></i>Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <table id="stockInHistoryList" class="table table-dark table-striped text-center">
                                            <thead id="stockListHeader">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Admin</th>
                                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                                    <th>Aksi</th>
                                                    <?php endif; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data['items'] as $stockIn) : ?>
                                                <tr>
                                                    <td><?= indoDate($stockIn['date']); ?></td>
                                                    <td><?= $stockIn['kd_barang']; ?></td>
                                                    <td><?= $stockIn['nm_barang']; ?></td>
                                                    <td><?= $stockIn['qty']; ?></td>
                                                    <td data-toggle="tooltip" data-placement="right" title="<?= $stockIn['nm_role']; ?>"><?= $stockIn['fullname']; ?></td>
                                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                                    <td>
                                                        <a class="btn btn-delete delete-button" href="<?= BASEURL ?>/stock/stockInDelete/<?= $stockIn['stock_id']; ?>/<?= $stockIn['id_barang']; ?>"><i class='bx bx-trash'></i></a>
                                                    </td>
                                                    <?php endif; ?>
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
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
