<nav class="main-header navbar navbar-expand navbar-navy navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <span class="nav-link user-profile" data-toggle="dropdown">
                <img class="brand-image img-circle elevation-3" src="<?= BASEURL ?>/dist/img/avatar5.png" width="30" height="30">
            </span>
            
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-dark">
                <li><h5 class="dropdown-item disabled"><?= $_SESSION['fullname']; ?></h5></li>
                <li><p class="dropdown-item disabled p-0 mb-0 role-profile text-success"><?= $_SESSION['role']; ?></p></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item btn btn-default text-muted" href="<?= BASEURL ?>/users/logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>