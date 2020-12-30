	<section id="cart_items">
		<div class="container mb-2">
			<div class="card">
				  <div class="card-header">
				    Pengiriman Barang
				  </div>
					  <div class="card-body">
					   <div class="col-md-12">
		           		 <table class="table table-border table-striped">
		      
	             		 <tr>
		               		<td>No. Invoice</td>
		                	<td><input type="text" name="no_inv" class="form-control" value="Invoice - <?php echo $noin; ?>" readonly=""></td>
		              	</tr>
		              	<tr>
		                	<td>Nama Penerima</td>
		                	<td><input type="text" name="nama_pen" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" readonly=""></td>
		              	</tr>
		              	<tr>
		              		<td>Alamat</td>
		              		<td><input type="text" name="alamat_pen" class="form-control" value="<?php echo $this->session->userdata('alamat_user'); ?>" placeholder="Masukan Alamat Lengkap Anda.." required=""></td>
		              	</tr>
		              	<tr>
		              		<td>No. Handphone</td>
		              		<td><input type="text" name="no_hp" class="form-control" placeholder="Masukan Nomor Handphone Anda.." required=""></td>
		              	</tr>
		             
		            	</table>
			          </div>
				</div>
			</div>
		<div class="container" style="margin-top: 20px;">
			<div class="card">
			  <div class="card-header">
			    Transfer Pembayaran
			  </div>
				  <div class="card-body">
				   <div class="col-md-12">
	           		 <table class="table table-border table-stripped">
             		 <tr>
	               		<td>No. Rekening</td>
	                	<td><strong>12313131073109</strong></td>
	              	</tr>
	              	<tr>
	                	<td>Atas Nama</td>
	                	<td><strong>Rabadi Multiguna</strong></td>
	              	</tr>
	              	<tr>
	              		<td>Nama Bank</td>
	              		<td><strong>Mandiri</strong></td>
	              	</tr>
	            	</table>
		          </div>
			</div>
			</div>
			<div class="review-payment">
				<h2>Checkout dan Pembayaran</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Foto Barang</td>
							<td class="description">Nama Barang</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($this->cart->contents() as $items): ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url('/uploads/'). $items['image'] ?>"style="width: 150px;"></a>
							</td>
							<td class="cart_description">
								<h4><?php echo $items['name'] ?></h4>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo number_format($items['price'],0,',','.') ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $items['qty'] ?></p>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo number_format($items['subtotal'],0,',','.') ?></p>
							</td>
						</tr>
					<?php endforeach; ?>
					<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr class="cart_total">
										<td><p class="cart_total_price">Total :</p></td>
										<td><p class="cart_total_price">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></p></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="margin-bottom: 20px; margin-top: -50px;">
				<a id="buttoninvoice" class="btn btn-primary btn-2x" href="#">Pesan</a>
			</div>
	</section> <!--/#cart_items-->