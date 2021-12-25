<aside class="main-sidebar shadow-sm">
    <!-- Brand Logo -->
    <p class="brand-link d-flex align-items-center">
        <img src="<?= BASEURL; ?>/assets/img/brand/auto.svg" alt="Gudang ID Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
        <span class="brand-text">Gudang ID</span>
    </p>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item mb-2">
                    <a href="<?= BASEURL; ?>/home" class="nav-link <?= $data['title'] == 'Home' ? 'active' : ''; ?>">
                        <i class='bx bx-grid-alt'></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Customers -->
                <li class="nav-item mb-2">
                    <a href="<?= BASEURL ?>/customer" class="nav-link <?= $data['title'] == 'Customer List' || $data['title'] == 'Add Customer' ? 'active' : ''; ?>">
                        <i class='bx bx-group' ></i>
                        <p>Pelanggan</p>
                    </a>
                </li>

                <!-- Items -->
                <li class="nav-item mb-2 <?= $data['title'] == 'Stock List' || $data['title'] == 'Stock In' || $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'menu-open' : ''; ?>">
                    <a class="nav-link <?= $data['title'] == 'Stock List' || $data['title'] == 'Stock In' || $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'active' : ''; ?>">
                        <i class="bx bx-layer"></i>
                        <p>
                            Data Barang
                            <i class="right bx bx-chevron-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASEURL; ?>/item" class="nav-link mb-1 <?= $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Daftar Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL; ?>/stock" class="nav-link mb-1 <?= $data['title'] == 'Stock List' || $data['title'] == 'Stock In' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Barang Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transactions -->
                <?php if($_SESSION['id_role'] != 3) : ?>
                <li class="nav-item mb-2 <?= $data['title'] == 'Transaction List' || $data['title'] == 'Transaction Status' || $data['title'] == 'Transaction History'? 'menu-open' : ''; ?>">
                    <a class="nav-link <?= $data['title'] == 'Transaction List' || $data['title'] == 'Transaction Status' || $data['title'] == 'Transaction History'? 'active' : ''; ?>">
                        <i class='bx bx-dollar-circle' ></i>
                        <p>
                            Transaksi
                            <i class="right bx bx-chevron-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/transaction/index" class="nav-link mb-1 <?= $data['title'] == 'Transaction List' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>
                                    Tambah
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/transaction/status" class="nav-link mb-1 <?= $data['title'] == 'Transaction Status' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/transaction/history" class="nav-link mb-1 <?= $data['title'] == 'Transaction History' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Riwayat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

                <!-- Report -->
                <li class="nav-item mb-2 <?= $data['title'] == 'Item Report' || $data['title'] == 'Transaction Report'? 'menu-open' : ''; ?>">
                    <a class="nav-link <?= $data['title'] == 'Item Report' || $data['title'] == 'Transaction Report'? 'active' : ''; ?>">
                        <i class='bx bx-receipt' ></i>
                        <p>
                            Laporan
                            <i class="right bx bx-chevron-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/report/itemreport" class="nav-link mb-1 <?= $data['title'] == 'Item Report'  ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/report/transreport" class="nav-link mb-1 <?= $data['title'] == 'Transaction Report' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Users -->
                <?php if($_SESSION['id_role'] == 1) : ?>
                <li class="nav-item mb-2">
                    <a href="<?= BASEURL ?>/manageuser" class="nav-link <?= $data['title'] == 'User Management' ? 'active' : ''; ?>">
                        <i class='bx bx-user-circle'></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <?php endif; ?>

                <!-- About -->
                <li class="nav-item mb-2">
                    <a href="<?= BASEURL ?>/about" class="nav-link <?= $data['title'] == 'About' ? 'active' : ''; ?>">
                        <i class='bx bx-help-circle' ></i>
                        <p>Tentang</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>