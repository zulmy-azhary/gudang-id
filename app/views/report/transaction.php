<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 col-title">
                <h1>Laporan Data Transaksi</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <!-- Item In Report -->
        <div class="row row-content">
            <div class="col-12">
                <div class="card">
					<div class="card-header item-table-head">
						<div class="col-sm-3 input-group p-0">
							<input type="text" class="form-control" id="inputRange" placeholder="Input range tanggal"/>
						</div>
						<div class="col-sm-9 button-slot p-0">
							<div class="action-buttons"></div>
						</div>
					</div>
                    <div class="card-body">
                        <table id="transReport" class="table table-dark table-striped text-center table-ui">
                            <thead>
                                <tr>
									<th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
								
							</tbody>
                        </table>
                    </div>
					<div class="card-footer">
						<div class="col-sm-12 table-footer">

						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>