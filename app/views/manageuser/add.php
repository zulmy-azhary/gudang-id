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
                    <div class="card-header item-table-head">
						<div class="col-sm-12 button-slot">
							<a class="btn button-actions" href="<?= BASEURL ?>/manageuser"><i class='bx bx-undo'></i>Kembali</a>
						</div>
                    </div>
                    <form action="<?= BASEURL ?>/manageuser/add" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center align-items-center flex-column">
                        <div class="card-body col-md-6">
                            <div class="form-group">
                                <label for="user-fname" class="col-sm-12 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-rename'></i>
                                            </span>
                                        </div>
                                        <input type="text" id="user-fname" class="form-control" name="fullname" autocomplete="off" required>
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
                                <label for="confirmPassword" class="col-sm-12 col-form-label">Confirm Password</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bxs-key'></i>
                                            </span>
                                        </div>
                                        <input type="password" id="confirmPassword" class="form-control <?= $data['confirmPasswordError'] ? 'is-invalid' : ''; ?>" name="confirmPassword" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user-code" class="col-sm-12 col-form-label">Cabang</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="bx bx-barcode"></i>
                                            </span>
                                        </div>
                                        <select class="custom-select" id="u_cabang" name="userCabang" required>
                                            <option selected value="">Pilih Cabang</option>
                                            <option value="1" >Cabang A</option>
                                            <option value="2" >Cabang B</option>
                                            <option value="3" >Cabang C</option>
                                        </select>
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
                                        <select class="custom-select" id="u_role" name="userRole" required>
                                            <option selected value="">Pilih Role</option>
                                            <option value="2" >Admin</option>
                                            <option value="3" >Branch Manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="card-footer d-flex justify-content-center">
							<div class="row-action col-md-6 justify-content-end">
								<button type="reset" class="btn button-warning"><i class='bx bx-reset'></i>Reset</button>
								<button type="submit" class="btn button-success"><i class='bx bx-save' ></i>Simpan</button>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</section>