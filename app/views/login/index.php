<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card shadow-sm">
                <div class="card-header text-center border-0">
                    <h1>Gudang ID</p>
                </div>
                
                <form action="<?= BASEURL ?>/login" method="POST" class="form-horizontal">
                    <div class="card-body">
                        <div class="col-sm-12 input-group">
                            <div class="input-box mb-4 mt-4">
                                <input type="text" class="form-control <?= $data['usernameError'] || $data['passwordError'] ? 'is-invalid' : ''; ?>" name="username" autocomplete="off" required>
                                <span class="label">Username</span>
                                <span class="floating-component"></span>
                                <div class="invalid-feedback">
                                    <?= $data['usernameError']; ?>
                                </div>
                            </div>

                            <div class="input-box mb-5 mt-2">
                                <input type="password" class="form-control <?= $data['usernameError'] || $data['passwordError'] ? 'is-invalid' : ''; ?>" name="password" required>
                                <span class="label">Password</span>
                                <span class="floating-component"></span>
                                <div class="invalid-feedback">
                                    <?= $data['passwordError']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="input-group col-sm-12 display-4 text-center">
                            <button type="submit" class="btn btn-login btn-block">Login</button>
                        </div>
                    </div>
                </form>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>