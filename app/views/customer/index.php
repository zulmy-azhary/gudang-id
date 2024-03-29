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
                    <?php if($_SESSION['id_role'] != 3) : ?>
                    <div class="card-header item-table-head">
						<div class="col-sm-6 length-filter"></div>
						<div class="col-sm-6 button-slot">
							<a class="btn button-actions" href="<?= BASEURL ?>/customer/add"><i class='bx bx-plus' ></i>Tambah</a>
						</div>
                    </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <table id="customerList" class="table table-dark table-striped table-ui">
                            <thead id="customerListHeader">
                                <tr>
                                    <th>Kode Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <?php if($_SESSION['id_role'] != 3) : ?>
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
                                    <?php if($_SESSION['id_role'] != 3) : ?>
                                    <td class="act-btn">
                                        <a class="btn table-act-1" data-toggle="modal" data-target="#customerUpdateModal" id="customerUpdateModalButton" data-id="<?= $item['cust_id']; ?>">
                                            <i class='bx bx-edit'></i>
                                        </a>
                                        <a class="btn table-act-2 delete-button" href="<?= BASEURL ?>/customer/delete/<?= $item['cust_id']; ?>">
                                            <i class='bx bx-trash'></i>
                                        </a>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
					<div class="card-footer">
						<div class="col-sm-12 table-footer"></div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Edit / Update Button -->
<div class="modal fade" id="customerUpdateModal" aria-labelledby="modalLabel" aria-hidden="true">
    <form action="<?= BASEURL ?>/customer/update" method="POST" id="updateModalForm">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content card">
                <div class="modal-header card-header border-0">
                    <h4 class="modal-title" id="modalLabel">Update Data Pelanggan</h4>
                </div>
                <div class="modal-body card-body">
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
				<div class="card-footer d-flex justify-content-center">
					<div class="row-action justify-content-end">
						<button class="btn button-actions" data-dismiss="modal"><i class='bx bx-undo'></i>Kembali</button>
						<button type="submit" class="btn button-success update-button"><i class='bx bx-save'></i>Update</button>
					</div>
				</div>
            </div>
        </div>
    </form>
</div>