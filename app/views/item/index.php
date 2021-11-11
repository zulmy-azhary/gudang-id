<div class="content-wrapper">
    <!-- !page header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Data Barang</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- !end of page header -->
    
    <!-- !main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="itemList" class="table table-dark table-striped text-center">
                                <thead id="itemListHeader">
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
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
                                        <td>
                                            <button class="btn edit"><i class='bx bx-edit' ></i></button>
                                            <a class="btn delete delete-button" href="<?= BASEURL ?>/item/delete/<?= $item['id_barang']; ?>"><i class='bx bx-trash'></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a class="btn btn-success" href="<?= BASEURL ?>/item/create"><i class='bx bx-plus' ></i> Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !end of main content -->
</div>