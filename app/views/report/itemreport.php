<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 cool-title">
                                <h1>Laporan Data Barang</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <!-- For Action -->
                        <div class="row row-content">
                            <div class="col-md-12 col-md-8" id="dataShow">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class='bx bx-table'></i>
                                                            </span>
                                                        </div>
                                                        <select class="select2" id="custom-select">
                                                            <option value=""></option>
                                                            <option value="masuk">Barang Masuk</option>
                                                            <option value="keluar">Barang Keluar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="dataAct">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inputRange" placeholder="dd/mm/yyyy - dd/mm/yyyy"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="action-buttons"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item In Report -->
                        <div class="row row-content">
                            <div class="col-md-12">
                                <div class="card" id="myData">
                                    <div class="card-body">
                                        <table id="itemReport" class="table table-dark table-striped text-center">
                                            <thead id="itemReportHead">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Jumlah(pcs)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01/03/2020</td>
                                                    <td>KB11</td>
                                                    <td>Paku Payung</td>
                                                    <td>Toolkit</td>
                                                    <td>20kg</td>
                                                </tr>
                                                <tr>
                                                    <td>12/03/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                                <tr>
                                                    <td>01/03/2020</td>
                                                    <td>KB11</td>
                                                    <td>Paku Payung</td>
                                                    <td>Toolkit</td>
                                                    <td>20kg</td>
                                                </tr>
                                                <tr>
                                                    <td>12/03/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                                <tr>
                                                    <td>01/03/2020</td>
                                                    <td>KB11</td>
                                                    <td>Paku Payung</td>
                                                    <td>Toolkit</td>
                                                    <td>20kg</td>
                                                </tr>
                                                <tr>
                                                    <td>12/03/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                                <tr>
                                                    <td>01/03/2020</td>
                                                    <td>KB11</td>
                                                    <td>Paku Payung</td>
                                                    <td>Toolkit</td>
                                                    <td>20kg</td>
                                                </tr>
                                                <tr>
                                                    <td>12/03/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                                <tr>
                                                    <td>01/03/2020</td>
                                                    <td>KB11</td>
                                                    <td>Paku Payung</td>
                                                    <td>Toolkit</td>
                                                    <td>20kg</td>
                                                </tr>
                                                <tr>
                                                    <td>02/04/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                                <tr>
                                                    <td>02/05/2020</td>
                                                    <td>KB21</td>
                                                    <td>Mi Tv</td>
                                                    <td>Electronik</td>
                                                    <td>18</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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