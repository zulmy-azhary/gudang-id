<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gudang ID | <?= $data['title']; ?></title>
		<link rel="shortcut icon" href="<?= BASEURL; ?>/assets/img/brand/auto.svg" type="image/x-icon">
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/fontawesome-free/css/all.min.css">
		<!-- Boxicons -->
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/dist/css/adminlte.min.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/main.css">

		<!-- SweetAlert2 -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/sweetalert2/sweetalert2.min.css">
		
		<!-- Datatables -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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
						<li><h5 class="dropdown-item disabled">Zulmy Azhary AS</h5></li>
						<li><p class="dropdown-item disabled p-0 mb-0">Admin</p></li>
						<div class="dropdown-divider"></div>
						<li><a class="dropdown-item text-muted" href="#">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary navbar-navy elevation-4">
			<!-- Brand Logo -->
			<p class="brand-link">
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
						<li class="nav-item">
							<a href="<?= BASEURL; ?>/item/in" class="nav-link <?= $data['title'] == 'Stock In' ? 'active' : ''; ?>">
								<i class='bx bx-log-in-circle'></i>
								<p>Stock In</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= BASEURL; ?>/item" class="nav-link <?= $data['title'] == 'Item List' || $data['title'] == 'Add Item' ? 'active' : ''; ?>">
								<i class='bx bx-layer' ></i>
								<p>Item List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
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