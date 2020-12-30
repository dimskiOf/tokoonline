<div class="container-fluid">
	<h3>Laporan Penjualan</h3>
</div>

<!-- Filter Laporan -->
  <div class="container-fluid mt-4 mb-4">
	  <div class="card">
		  <div class="card-header">
		    Filter Laporan
		  </div>
		    <div class="card-body">
		        <div class="row">
		          <div class="col-md-6">
		            <table class="table table-striped table-hover">
		              <tr>
		                <td>Mulai Tanggal : </td>
		                <td><input type="date" name="mulaitanggal" class="form-control"></td>
		              </tr>
		              <tr>
		                <td>Sampai Tanggal :</td>
		                <td><input type="date" name="sampaitanggal" class="form-control"></td>
		              </tr>
		            </table>
		            <button class="btn btn-primary btn-sm mt-3">Tampilkan Data Laporan</button>
		          </div>
		    </div>
		  </div>
	</div>
</div>
<!-- Filter Laporan -->
  <div class="container-fluid mb-6">
	  <div class="card">
		  <div class="card-header">
		    Laporan Penjualan
		  </div>
		    <div class="card-body">
		        <div class="row">
		          <div class="col-md-6">
		            <table class="table table-striped table-hover">
		              <tr>
		                <td>Dari Tanggal</td>
		                <td>:</td>
		                <td><input type="date" name="mulaitanggal" class="form-control" ></td>
		              </tr>
		              <tr>
		                <td>Sampai Tanggal </td>
		                <td>:</td>
		                <td><input type="date" name="sampaitanggal" class="form-control"></td>
		              </tr>
		            </table>
		            <button class="btn btn-success btn-sm"><i class="fas fa-file-pdf"></i> Print PDF</button>
		            <button class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Cetak Data</button>
		          </div>
		    </div>
		  </div>
	</div>
</div>
<!-- Tabel l -->
<div class="container-fluid">
	<table class="table table-bordered table-stripped mt-3 text-center">
		<tr>
			<th>NO.</th>
			<th>No.Invoice</th>
			<th>Tanggal Masuk</th>
			<th>Nama Pelanggan</th>
			<th>Jumlah Bayar</th>
			<th>Status</th>
		</tr>
		<?php 
		$no=1; 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><span>Invoice-</span>31231</td>
			<td>02/02/2020</td>
			<td>3123131</td>
			<td>Rp. <span>123123</span></td>
			<td class="text-center"><div class="btn btn-warning btn-sm">Dikirim</div></td>
		</tr>
	</table>
</div>
</div>