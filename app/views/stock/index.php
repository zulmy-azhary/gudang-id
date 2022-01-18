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
					<div class="card-header item-table-head">
						<div class="col-sm-6 length-filter"></div>
						<div class="col-sm-6 button-slot">
							<a class="btn button-actions" href="<?= BASEURL ?>/stock/in"><i class='bx bx-plus' ></i>Tambah</a>
						</div>
                    </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <table id="stockInHistoryList" class="table table-dark table-striped text-center table-ui">
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
                                    <td class="act-btn">
                                        <a class="btn table-act-2 delete-button" href="<?= BASEURL ?>/stock/stockInDelete/<?= $stockIn['stock_id']; ?>/<?= $stockIn['id_barang']; ?>"><i class='bx bx-trash'></i></a>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
					<div class="card-footer">
						<div class="table-footer"></div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>