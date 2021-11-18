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
                <!-- User Details -->
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= BASEURL; ?>/home" class="nav-link <?= $data['title'] == 'Home' ? 'active' : ''; ?>">
                        <i class='bx bx-grid-alt'></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $data['title'] == 'Stock In' || $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'menu-open' : ''; ?>">
                    <a class="nav-link <?= $data['title'] == 'Stock In' || $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'active' : ''; ?>">
                        <i class="bx bx-layer"></i>
                        <p>
                            Item
                            <i class="right bx bx-chevron-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASEURL; ?>/item" class="nav-link <?= $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>List Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL; ?>/stock/in" class="nav-link <?= $data['title'] == 'Stock In' ? 'active' : ''; ?>">
                                <i class='bx bx-radio-circle-marked'></i>
                                <p>Stock In</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/customer" class="nav-link <?= $data['title'] == 'Customer List' ? 'active' : ''; ?>">
                        <i class='bx bx-group' ></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='bx bx-dollar-circle' ></i>
                        <p>Transaction</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='bx bx-receipt' ></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL ?>/about" class="nav-link <?= $data['title'] == 'About' ? 'active' : ''; ?>">
                        <i class='bx bx-help-circle' ></i>
                        <p>About</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>