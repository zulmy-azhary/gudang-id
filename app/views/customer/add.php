<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <!-- !  -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1>Tambah Data Pelanggan</h1>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="content">
                    <div class="container-fluid">
                        <div class="row row-content">
                            <div class="col-md-12">
                                <div class="card">
                                    <form action="<?= BASEURL ?>/item/add" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center">
                                        <div class="card-body col-md-6">

                                            <div class="form-group">
                                                <label for="cust-code" class="col-sm-12 col-form-label">Kode Pelanggan</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="bx bx-barcode"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="cust-code" class="form-control" name="kd_pelanggan" readonly value="-">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cust-name" class="col-sm-12 col-form-label">Nama</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-user'></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="cust-name" class="form-control" name="nm_pelanggan" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cust-address" class="col-sm-12 col-form-label">Alamat</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-map' ></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="cust-address" class="form-control" name="alamat" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cust-telp" class="col-sm-12 col-form-label">Telepon</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-phone-call' ></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="cust-telp" class="form-control" name="tlp" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <div class="row-action justify-content-end">
                                                    <a class="btn btn-cancel px-3 py-2" href="<?= BASEURL ?>/item">Kembali</a>
                                                    <button type="submit" class="btn btn-accept create-button px-3 py-2">Simpan</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
