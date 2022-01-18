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

    <section class="area">
        <div class="box-banner">
            <div class="col-sm-12">
                <div class="banner-header">
                    <span class="head">GUDANG.ID</span>
                </div>
                <div class="swiper my-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="box-form">
            <div class="col-sm-12 heading">
                <img class="login-icon" src="<?= BASEURL ?>/assets/img/robot-checking-user-profile.svg" alt="Login Icon">
            </div>
            <div class="col-sm-12 forms">
                <form class="form-wrapper" method="POST" action="<?= BASEURL ?>/login">
                    <div class="form-group">
                        <label class="label" id="inLabel">Username</label>
                        <input id="username" name="username" type="text" class="form-control input" autocomplete="off">
                        <div class="plat"></div>
                    </div>
                    <div class="form-group">
                        <label class="label" id="inLabel">Password</label>
                        <input id="password" name="password" type="password" class="form-control input" autocomplete="off">
                        <div class="plat"></div>
                    </div>
                    <div class="response" id="message">
                        <span id="msgSuccess"style="display: none;"></span>
                        <span id="msgError"style="display: none;"></span>
                    </div>
                    <button type="submit" class="btn btn-success btn-login" id="loginBtn" disabled>Login</button>
                </form>
            </div>
            <div class="col-sm-12 footer">
                <div class="form-footer">
                    <span><i class='bx bx-copyright'></i>2021-2026 Gudang ID. All rights reserved.</span>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= BASEURL ?>/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/login.js"></script>
</body>
</html>