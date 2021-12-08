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
                                <h1 class="m-0">Daftar Pelanggan</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- !main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row row-content">
                        <div class="col-12">
                            <div class="card">
                                <?php if($_SESSION['user_id'] != 3) : ?>
                                <div class="card-header">
                                    <div class="card-tools">
                                        <div class="col-sm-12">
                                            <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/customer/add"><i class='bx bx-plus' ></i>Tambah</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <table id="customerList" class="table table-dark table-striped">
                                        <thead id="customerListHeader">
                                            <tr>
                                                <th>Kode Pelanggan</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No. HP</th>
                                                <?php if($_SESSION['user_id'] != 3) : ?>
                                                <th>Aksi</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data['items'] as $item) : ?>
                                            <tr>
                                                <td><?= $item['kd_pelanggan']; ?></td>
                                                <td><?= $item['nm_pelanggan']; ?></td>
                                                <td><?= $item['alamat']; ?></td>
                                                <td><?= $item['no_telp']; ?></td>
                                                <?php if($_SESSION['user_id'] != 3) : ?>
                                                <td>
                                                    <a class="btn btn-edit" data-toggle="modal" data-target="#customerUpdateModal" id="customerUpdateModalButton" data-id="<?= $item['cust_id']; ?>">
                                                        <i class='bx bx-edit'></i>
                                                    </a>
                                                    <a class="btn btn-delete delete-button" href="<?= BASEURL ?>/customer/delete/<?= $item['cust_id']; ?>">
                                                        <i class='bx bx-trash'></i>
                                                    </a>
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
                </section>
                <!-- !end of main content -->
            </div>

            <!-- Modal for Edit / Update Button -->
            <div class="modal fade" id="customerUpdateModal" aria-labelledby="modalLabel" aria-hidden="true">
                <form action="<?= BASEURL ?>/customer/update" method="POST" id="updateModalForm">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content card">
                            <div class="modal-header border-0">
                                <h4 class="modal-title" id="modalLabel">Update Data Pelanggan</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-horizontal d-flex justify-content-center">
                                    <input type="hidden" name="cust_id" id="updateCustomerId">
                                    <div class="card-body col-md-8">
                                        <div class="form-group">
                                            <label for="updateCustomerCode" class="col-sm-12 col-form-label">Kode Pelanggan</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="bx bx-barcode"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="kd_pelanggan" id="updateCustomerCode" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateCustomerName" class="col-sm-12 col-form-label">Nama Pelanggan</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-user'></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="nm_pelanggan" id="updateCustomerName" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateCustomerAddress" class="col-sm-12 col-form-label">Alamat</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-map' ></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="alamat" id="updateCustomerAddress" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateCustomerPhoneNumber" class="col-sm-12 col-form-label">No. HP</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-phone-call' ></i>
                                                        </span>
                                                    </div>
                                                    <input type="number" class="form-control" name="tlp" min="0" id="updateCustomerPhoneNumber" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <div class="col-md-12">
                                    <div class="row-action justify-content-center" style="gap: 1rem;">
                                        <button class="btn btn-cancel d-flex" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
                                        <button type="submit" class="btn btn-accept update-button d-flex"><i class='bx bx-save'></i>Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </form>
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
