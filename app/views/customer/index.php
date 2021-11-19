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
                                <h1 class="m-0">Customer List</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- !main content -->
            <section class="content">
                <div class="container-fluid content-container">
                    <div class="row row-content">
                        <div class="col-12 table-row">
                            <div class="card">
                                <div class="card-body">
                                    <table id="customerList" class="table table-dark table-striped">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Telephone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PLG01</td>
                                                <td>Bangkullu</td>
                                                <td>Allakkuang</td>
                                                <td>081223457374</td>
                                                <td>
                                                    <button class="btn btn-edit">
                                                        <i class='bx bx-edit'></i>
                                                    </button>
                                                    <button class="btn btn-delete">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row-action">
                                <a class="btn btn-cancel px-3 py-2" href="<?= BASEURL ?>/item">Kembali</a>
                                <button type="submit" class="btn btn-accept create-button px-3 py-2">Simpan</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- !end of main content -->
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>
