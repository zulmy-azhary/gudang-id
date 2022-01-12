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
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="col-sm-12">
                                <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/manageuser/add"><i class='bx bx-plus' ></i>Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="userList" class="table table-dark table-striped">
                            <thead id="userListHeader">
                                <tr>
                                    <th>Nama lengkap</th>
                                    <th>Username</th>
                                    <th>Cabang</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['items'] as $users) : ?>
                                <tr>
                                    <td><?= $users['fullname']; ?></td>
                                    <td><?= $users['username']; ?></td>
                                    <?php if($users['id_role'] == 1): ?>
                                        <td>-</td>
                                    <?php else : ?>
                                        <td><?= $users['nm_cabang']; ?></td>
                                    <?php endif; ?>
                                    <td><?= $users['nm_role']; ?></td>
                                    <td>
                                        <a class="btn btn-edit" data-toggle="modal" data-target="#userUpdateModal" id="userUpdateModalButton" data-id="<?= $users['user_id']; ?>">
                                            <i class='bx bx-edit'></i>
                                        </a>
                                        <?php if($users['id_role'] != 1) : ?>
                                        <a class="btn btn-delete delete-button" href="<?= BASEURL ?>/manageuser/delete/<?= $users['user_id']; ?>">
                                            <i class='bx bx-trash'></i>
                                        </a>
                                        <?php endif; ?>
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
                                        <input type="text" class="form-control" name="" id="updateFullName">
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
                                        <input type="text" class="form-control" name="" id="updateUsername" disabled>
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
                                        <input type="password" class="form-control" name="" id="updatePassword" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="updateUserCabang" class="col-sm-12 col-form-label">Cabang</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="bx bx-barcode"></i>
                                            </span>
                                        </div>
                                        <select class="custom-select" id="updateUserCabang" name="id_role" required>
                                            <option selected value="">Pilih Cabang</option>
                                            <option value="1" >Cabang A</option>
                                            <option value="2" >Cabang B</option>
                                            <option value="3" >Cabang C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="updateUserRole" class="col-sm-12 col-form-label">Role</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-network-chart' ></i>
                                            </span>
                                        </div>
                                        <select class="custom-select" id="updateUserRole" name="kategori" required>
                                            <option selected value="">Pilih Role</option>
                                            <option value="2" >Admin</option>
                                            <option value="3" >Branch Manager</option>
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
        </div>
    </form>
</div>