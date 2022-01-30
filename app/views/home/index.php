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
					<div class="col-sm-3">
						<div class="card total-item">
							<div class="card-body box-wrapper">
								<span class="logo">
									<i class='bx bx-import'></i>
								</span class="title">
								<span class="title">Total Barang</span>
								<h5><?= isset($data['totalItem']) ? $data['totalItem'] : 0; ?></h5>
							</div>
						</div>
					</div>
                    
					<div class="col-sm-3">
						<div class="card total-trans">
							<div class="card-body box-wrapper">
								<span class="logo">
									<i class='bx bx-export'></i>
								</span>
								<span class="title">Total Transaksi</span>
								<h5><?= isset($data['totalTransaction']) ? $data['totalTransaction'] : 0; ?></h5>
							</div>
						</div>
					</div>
                    
					<div class="col-sm-3">
						<div class="card total-cust">
							<div class="card-body box-wrapper">
								<span class="logo">
									<i class='bx bxs-user-detail'></i>
								</span>
								<span class="title">Total Pelanggan</span>
								<h5><?= isset($data['customer']) ? $data['customer'] : 0; ?></h5>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card total-inc">
							<div class="card-body box-wrapper">
								<span class="logo">
									<i class='bx bxs-badge-dollar'></i>
								</span>
								<span class="title">Total Omzet</span>
								<h5>---</h5>
							</div>
						</div>
					</div>
                </div>
                <div class="row row-content">
                    <div class="col-md-6">
                        <div class="connectedSortable">
                            <div class="card">
								<div class="card-header item-table-head">
									<h4 class="col-sm-6 ">Transaksi Terakhir</h4>
									<div class="col-sm-6 button-slot">
										<button type="button" class="btn" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									</div>
								</div>
                                <div class="card-body">
                                    <?php if(!empty($data['transaction'])) : ?>
                                        <?php foreach($data['transaction'] as $transaction) : ?>
                                        <div class="row mb-4 recent-trans">
											<span class="col-sm-1 p-1">
												<i class='bx bx-cart-alt cust-logo'></i>
											</span>
											<div class="cust-wrapper col-sm-5 d-flex flex-column">
												<span class="invoice"><?= $transaction['invoice']; ?></span>
												<span class="cust-name"><?= $transaction['nm_pelanggan']; ?></span>
											</div>
											<span class="col-sm-3 grand-total-trans"><?= $transaction['grand_total']; ?></span>
                                            <span class="col-sm-3 date-transaction"><?= $transaction['created_at']; ?></span>
                                        </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
											<span class="cust-name">Belum ada riwayat transaksi</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>