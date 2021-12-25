<nav class="main-header navbar navbar-expand navbar-dark">
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
                <div class="bubbles"></div>
                <div class="cover">
                    <img class="user-avatar" src="<?= BASEURL ?>/dist/img/avatar5.png">
                </div>
                <div class="user">
                    <span class="user-name"><?= $_SESSION['fullname']; ?></span>
                    <span class="role-profile"><?= $_SESSION['nm_role']; ?></span>
                </div>
                <div class="action">
                    <a class="btn btn-logout" href="<?= BASEURL ?>/login/logout">
                        <i class='bx bx-log-out'></i>
                    </a>
            </ul>
        </li>
    </ul>
</nav>