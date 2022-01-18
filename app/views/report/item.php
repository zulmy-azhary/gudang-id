<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 cool-title">
                <h1>Laporan Data Barang</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <!-- For Action -->
        <div class="row row-content">
            <div class="col-md-12" id="dataShow">
                <div class="card">
                    <div class="card-body">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class='bx bx-table'></i>
								</span>
							</div>
							<select class="select2 data-show">
								<option value=""></option>
								<option value="masuk">Barang Masuk</option>
								<option value="keluar">Barang Keluar</option>
							</select>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item In Report -->
        <div class="row row-content">
            <div class="col-md-12">
                <div class="card" id="myData">
					<div class="card-header item-table-head">
						<div class="col-sm-3 input-group p-0">
							<input type="text" class="form-control" id="inputRange" placeholder="Input range tanggal"/>
						</div>
						<div class="col-sm-9 button-slot p-0">
							<div class="action-buttons"></div>
						</div>
					</div>
                    <div class="card-body">
                        <table id="itemReport" class="table table-dark table-striped text-center table-ui">
                            <thead id="itemReportHead">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Jumlah(pcs)</th>
                                </tr>
                            </thead>
							<tbody>
								
							</tbody>
                        </table>
                    </div>
					<div class="card-footer">
						<div class="table-footer"></div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>