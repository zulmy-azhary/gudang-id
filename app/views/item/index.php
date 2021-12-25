<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1 class="m-0">Daftar Barang</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <div class="col-sm-12">
                                                <a class="btn btn-accept d-flex" href="<?= BASEURL ?>/item/add"><i class='bx bx-plus' ></i>Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <table id="itemList" class="table table-dark table-striped text-center">
                                            <thead id="itemListHeader">
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                                    <th>Aksi</th>
                                                    <?php endif; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data['items'] as $item ) : ?>
                                                <tr>
                                                    <td><?= $item['kd_barang']; ?></td>
                                                    <td><?= $item['nm_barang']; ?></td>
                                                    <td><?= $item['nm_kat']; ?></td>
                                                    <td><?= $item['harga']; ?></td>
                                                    <td><?= $item['stok']; ?></td>
                                                    <?php if($_SESSION['id_role'] != 3) : ?> 
                                                    <td>
                                                        <a class="btn btn-edit" data-toggle="modal" data-target="#itemUpdateModal" id="itemUpdateModalButton" data-id="<?= $item['id_barang']; ?>">
                                                            <i class='bx bx-edit' ></i>
                                                        </a>
                                                        <a class="btn btn-delete delete-button" href="<?= BASEURL ?>/item/delete/<?= $item['id_barang']; ?>"><i class='bx bx-trash'></i></a>
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
            </div>

            <!-- Modal for Edit / Update Button -->
            <div class="modal fade" id="itemUpdateModal" aria-labelledby="modalLabel" aria-hidden="true">
                <form action="<?= BASEURL ?>/item/update" method="POST" id="updateModalForm">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content card">
                            <div class="modal-header border-0">
                                <h4 class="modal-title" id="modalLabel">Update Data Barang</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-horizontal d-flex justify-content-center">
                                    <input type="hidden" name="id_barang" id="updateIdBarang">
                                    <div class="card-body col-md-8">
                                        <div class="form-group">
                                            <label for="updateCategory" class="col-sm-12 col-form-label">Kategori</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-category-alt' ></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="kategoriName" id="updateCategoryName" readonly>
                                                    <input type="hidden" name="kategori" id="updateCategory">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateItemCode" class="col-sm-12 col-form-label">Kode Barang</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="bx bx-barcode"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="kd_barang" id="updateItemCode" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updateItemName" class="col-sm-12 col-form-label">Nama Barang</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="bx bx-purchase-tag"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="nm_barang" id="updateItemName" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="updatePrice" class="col-sm-12 col-form-label">Harga</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class='bx bx-dollar-circle' ></i>
                                                        </span>
                                                    </div>
                                                    <input type="number" class="form-control" name="harga" min="1000" id="updatePrice" autocomplete="off">
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
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
