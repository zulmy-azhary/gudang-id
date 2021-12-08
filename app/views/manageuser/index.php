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
                                <h1 class="m-0">Daftar Pengguna</h1>
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
                                            <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/manageuser/add"><i class='bx bx-plus' ></i>Tambah</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <table id="userList" class="table table-dark table-striped">
                                        <thead id="userListHeader">
                                            <tr>
                                                <th>Kode Pengguna</th>
                                                <th>Nama lengkap</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>USR212</td>
                                                <td>Fahrizal</td>
                                                <td>rizal</td>
                                                <td>blablabla</td>
                                                <td>Branch Manager</td>
                                                <td>
                                                    <a class="btn btn-edit" data-toggle="modal" data-target="#userUpdateModal" id="userUpdateModalButton" data-id="">
                                                        <i class='bx bx-edit'></i>
                                                    </a>
                                                    <a class="btn btn-delete delete-button" href="#">
                                                        <i class='bx bx-trash'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- !end of main content -->
            </div>
            </div>

            <div class="modal fade" id="userUpdateModal" aria-labelledby="modalLabel" aria-hidden="true">
                <form action="<?= BASEURL ?>/item/update" method="POST" id="updateModalForm">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content card">
                            <div class="modal-header border-0">
                                <h4 class="modal-title" id="modalLabel">Update Data Pengguna</h4>
                                <!-- <button class="btn" type="button" data-dismiss="modal">x</button> -->
                            </div>
                            <div class="modal-body">
                                <div class="form-horizontal d-flex justify-content-center">
                                    <input type="hidden" name="id_barang" id="updateIdBarang">
                                    <div class="card-body col-md-8">
                                        <div class="form-group">
                                            <label for="updateFname" class="col-sm-12 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <i class='bx bx-rename'></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="" id="updateFname">
                                                    <!-- <input type="hidden" name="kategori" id="updateCategory"> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateUsername" class="col-sm-12 col-form-label">Username</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-user-circle'></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="" id="updateUsername">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updatePassword" class="col-sm-12 col-form-label">Password</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-key'></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="" id="updatePassword" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="changeRole" class="col-sm-12 col-form-label">Role</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-network-chart' ></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="changeRole" name="kategori" required>
                                                        <option selected data-value="-" value="">Pilih Role</option>
                                                        <option value="1" >Super Admin</option>
                                                        <option value="2" >Branch Manager</option>
                                                        <option value="3" >Admin</option>
                                                    </select>
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