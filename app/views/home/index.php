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
            <div class="col-12">
                <div class="row row-content">
                    <!-- ?items out -->
                    <div class="box-wrapper col-sm-3">
                        <div class="small-box shadow-none">
                            <i class='bx bx-import'></i>
                            <span>Total Barang</span>
                            <h5><?= isset($data['totalItem']) ? $data['totalItem'] : 0; ?></h5>
                        </div>
                    </div>
                    
                    <div class="box-wrapper col-sm-3">
                        <div class="small-box shadow-none">
                            <i class='bx bx-export'></i>
                            <span>Total Transaksi</span>
                            <h5><?= isset($data['totalTransaction']) ? $data['totalTransaction'] : 0; ?></h5>
                        </div>
                    </div>
                    
                    <div class="box-wrapper col-sm-3">
                        <div class="small-box shadow-none">
                            <i class='bx bxs-user-account'></i>
                            <span>Total Pelanggan</span>
                            <h5><?= isset($data['customer']) ? $data['customer'] : 0; ?></h5>
                        </div>
                    </div>


                    <div class="box-wrapper col-sm-3">
                        <div class="small-box shadow-none">
                            <i class='bx bxs-badge-dollar'></i>
                            <span>Total Omzet</span>
                            <h5>---</h5>
                        </div>
                    </div>
                </div>
                
                <div class="row row-content">
                    <div class="col-sm-6">
                        <div class="connectedSortable">
                            <div class="card shadow-none">
                                <div class="card-header">
                                    <h3 class="card-title">Transaksi Terakhir</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php if(!empty($data['transaction'])) : ?>
                                        <?php foreach($data['transaction'] as $transaction) : ?>
                                        <div class="row mb-2 text-center">
                                            <span class="col-sm-3"><?= $transaction['invoice']; ?></span>
                                            <span class="col-sm-3"><?= $transaction['nm_pelanggan']; ?></span>
                                            <span class="col-sm-6 date-transaction"><?= $transaction['created_at']; ?></span>
                                        </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <span>Belum ada riwayat transaksi</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row-content">
                            <div class="connectedSortable">
                                <div class="card shadow-none">
                                    <div class="card-header">
                                        <h3 class="card-title">Pengguna Online</h3>
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
        </div>
    </div>
</section>