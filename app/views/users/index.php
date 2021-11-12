<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <h1>Gudang ID</p>
                </div>
                <div class="card-body">
                    <h5 class="login-box-msg">Login Form</h5>

                    <form action="<?= BASEURL ?>/users" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= $data['usernameError'] || $data['passwordError'] ? 'is-invalid' : ''; ?>" name="username" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class='bx bxs-user-circle' ></i>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $data['usernameError']; ?>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control <?= $data['usernameError'] || $data['passwordError'] ? 'is-invalid' : ''; ?>" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class='bx bxs-lock-alt' ></i>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $data['passwordError']; ?>
                            </div>
                        </div>
                        <div class="input-group mt-5">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Not registered yet? Sign up <a href="<?= BASEURL ?>/users/register">here</a></p>
                </div>
            </div>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>