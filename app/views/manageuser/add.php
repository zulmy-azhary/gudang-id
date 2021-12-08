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
                                <h1>Tambah Data Pengguna</h1>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="content">
                    <div class="container-fluid">
                        <div class="row row-content">
                            <div class="col-md-12">
                                <div class="card">
                                <div class="card-header">
                                        <div class="card-tools">
                                            <div class="col-sm-12">
                                                <a class="btn btn-cancel d-flex" href="<?= BASEURL ?>/manageuser/index"><i class='bx bx-undo'></i>Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="<?= BASEURL ?>/customer/create" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center">
                                        <div class="card-body col-md-6">
                                            <div class="form-group">
                                                <label for="user-code" class="col-sm-12 col-form-label">Kode</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="bx bx-barcode"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="user-code" class="form-control" name="kd_user" readonly value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="user-fname" class="col-sm-12 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-rename'></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="user-fname" class="form-control" name="nm_user" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-12 col-form-label">Username</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-user-circle'></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" id="username" class="form-control" name="username" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password" class="col-sm-12 col-form-label">Password</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-key'></i>
                                                            </span>
                                                        </div>
                                                        <input type="password" id="password" class="form-control" name="password" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="user-role" class="col-sm-12 col-form-label">Role</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-network-chart' ></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="item-category" name="role" required>
                                                        <option selected data-value="-" value="">Pilih Role</option>
                                                        <option value="1" >Super Admin</option>
                                                        <option value="2" >Branch Manager</option>
                                                        <option value="3" >Admin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <div class="row-action justify-content-end">
                                                    <button type="reset" class="btn btn-cancel d-flex"><i class='bx bx-reset'></i>Reset</button>
                                                    <button type="submit" class="btn btn-accept create-button d-flex"><i class='bx bx-save' ></i>Simpan</button>
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
