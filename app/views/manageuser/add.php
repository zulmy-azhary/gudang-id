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
                    <form action="<?= BASEURL ?>/manageuser/add" method="POST" id="createForm" class="form-horizontal d-flex justify-content-center align-items-center flex-column" autocomplete="off">
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
                                        <input type="text" id="user-fname" class="form-control" name="fullname" autocomplete="off" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-12 col-form-label">Username</label>
                                <div class="col-sm-12 username-input-form">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-user-circle'></i>
                                            </span>
                                        </div>
                                        <input type="text" id="username" class="form-control" name="username" autocomplete="off" required>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <small id="usernameFeedback" class="form-text text-danger" hidden></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-12 col-form-label">Password</label>
                                <div class="col-sm-12 d-flex flex-column">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-key'></i>
                                            </span>
                                        </div>
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <small id="passwordLengthFeedback" class="form-text mr-4 text-danger" hidden></small>
                                        <small id="passwordNumberFeedback" class="form-text mr-4 text-danger" hidden></small>
                                        <small id="passwordCharFeedback" class="form-text mr-4 text-danger" hidden>Password Length</small>
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
                                        <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" autocomplete="off" placeholder="Input password terlebih dahulu" required readonly>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <small id="confirmPasswordFeedback" class="form-text text-danger" hidden></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user-role" class="col-sm-12 col-form-label">Role</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class='bx bx-network-chart'></i>
                                            </span>
                                        </div>
                                        <select class="custom-select" id="userRole" name="userRole" required>
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
								<button type="reset" class="btn button-warning" id="resetUserForm"><i class='bx bx-reset'></i>Reset</button>
								<button type="submit" class="btn button-success" id="userCreateSubmit" tabindex="0"><i class='bx bx-save' ></i>Simpan</button>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</section>