<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/includes/head.php' ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/includes/nav.php' ?>
            <?php require APPROOT . '/views/includes/sidebar.php' ?>
            <div class="content-wrapper">
                <!-- !page header -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 col-title">
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !end of page header -->
                
                <!-- !main content -->
                <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- !for monitoring item dan transactions -->
                        <div class="col-lg-8">
                            <div class="row row-content">
                                <!-- ?items out -->
                                <div class="box-wrapper col-sm-4">
                                    <div class="small-box shadow-none">
                                        <i class='bx bx-up-arrow-alt'></i>
                                        <span>Items Out</span>
                                        <h5>---</h5>
                                    </div>
                                </div>
                                
                                <!-- ?total customers -->
                                <div class="box-wrapper col-sm-4">
                                    <div class="small-box shadow-none">
                                        <i class='bx bxs-user-account'></i>
                                        <span>Total Customers</span>
                                        <h5>---</h5>
                                    </div>
                                </div>

                                <div class="box-wrapper col-sm-4">
                                    <div class="small-box shadow-none">
                                    <i class='bx bx-down-arrow-alt'></i>
                                        <span>Items In</span>
                                        <h5>---</h5>
                                    </div>
                            </div>
                            </div>
                            
                            <div class="row row-content">
                                <div class="col-sm-6">
                                    <div class="connectedSortable">
                                        <div class="card shadow-none">
                                            <div class="card-header">
                                                <h3 class="card-title">Categories</h3>
                                                
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="connectedSortable">
                                        <div class="card shadow-none">
                                            <div class="card-header">
                                                <h3 class="card-title">Recent Transaction</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- !for user monitoring sections -->
                        <div class="col-lg-4">
                            <div class="row-content">
                                <div class="connectedSortable">
                                    <div class="card shadow-none">
                                        <div class="card-header">
                                            <h3 class="card-title">User Online</h3>
                                            
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-valign-middle">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="" class="img-circle img-size-32 mr-2">
                                                        </td>
                                                        <td class="text-left">
                                                            Admin 1
                                                        </td>
                                                        <td class="text-right">
                                                            role
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </section>
                <!-- !end of main content -->
            </div>
            <?php require APPROOT . '/views/includes/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/includes/script.php' ?>
    </body>
</html>