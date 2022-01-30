<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang ID | <?= $data['title']; ?></title>
	<link rel="shortcut icon" href="<?= BASEURL ?>/assets/img/brand/auto.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/swiper.bundle.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/login.css">
</head>
<body>
    <div class="area">
        <div class="login-card">
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="banner">
                    <div class="box"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="box-form">
                    <span class="title mb-2">Masuk</span>
                    <p class="subtitle mb-4">Sistem Informasi Manajemen Penjualan & Inventory</p>
                    <div class="col-sm-12 forms">
                        <form class="form-wrapper" method="POST" action="<?= BASEURL ?>/login">
                            <div class="form-group">
                                <label class="label" id="inLabel">Username</label>
                                <input id="username" name="username" type="text" class="form-control input" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="label" id="inLabel">Password</label>
                                <input id="password" name="password" type="password" class="form-control input" autocomplete="off">
                            </div>
                            <div class="response mt-3" id="message">
                                <span id="msgSuccess"style="display: none;"></span>
                                <span id="msgError"style="display: none;"></span>
                            </div>
                            <button type="submit" class="btn btn-login" id="loginBtn" tabindex="0" disabled>Login</button>
                        </form>
                    </div>
                    <span class="footer mt-5">2021-2026 Gudang ID. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= BASEURL ?>/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/login.js"></script>
</body>
</html>