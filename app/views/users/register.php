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
                    <h5 class="login-box-msg">Registration</h5>

                    <form action="<?= BASEURL ?>/users/register" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= $data['fullnameError'] ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" placeholder="Full Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class='bx bxs-rename' ></i>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $data['fullnameError']; ?>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= $data['usernameError'] ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Username">
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
                            <input type="password" class="form-control <?= $data['passwordError'] ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class='bx bxs-lock-alt' ></i>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $data['passwordError']; ?>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control <?= $data['confirmPasswordError'] ? 'is-invalid' : ''; ?>" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class='bx bxs-lock-alt' ></i>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $data['confirmPasswordError']; ?>
                            </div>
                        </div>
                        <div class="input-group mt-5">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Already registered? <a href="<?= BASEURL ?>/users">Login</a></p>
                </div>
            </div>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>