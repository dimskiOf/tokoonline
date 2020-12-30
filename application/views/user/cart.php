<section>
	
</section>
	<section id="cart_items">
		<div class="container">
			
			<div class="review-payment">
				<h2>Ulasan Produk & Pembayaran</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Foto</td>
							<td class="description">Produk</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($this->cart->contents() as $items): ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url('/uploads/'). $items['image'] ?>" width="100px" align="center"></a>
							</td>
							<td class="cart_description">
								<h4><?php echo $items['name'] ?></a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p><span>Rp.</span><div class="<?php echo $items['id'] ?>"><?php echo number_format($items['price'],0,',','.') ?></div></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a
										class="cart_quantity_up"
										data-id="<?php echo $items['id'] ?>" 
										data-rowid="<?php echo $items['rowid'] ?>"
									> + </a>
									<input id="<?php echo $items['id'] ?>" class="cart_quantity_input" type="text" name="quantity" value="<?php echo $items['qty'] ?>" autocomplete="off" size="2">
									<a
										class="cart_quantity_down"
										data-id="<?php echo $items['id'] ?>" 
										data-rowid="<?php echo $items['rowid'] ?>"
									> - </a>
								</div>
							</td>
							<td class="cart_total">
								<h4>Rp. <div class="<?php echo $items['rowid'] ?>"><?php echo number_format($items['subtotal'],0,',','.') ?></div></h4>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url('user/cart/hapusqty/'.$items['rowid']) ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<td><span>Rp. <div id="tot"><?php echo number_format($this->cart->total(),0,',','.') ?></div> </span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="margin-bottom: 20px;">
				<button class="btn btn-danger" href="<?php echo base_url('user/checkout/hapus') ?>">Hapus List Keranjang</button>
				<a class="btn btn-warning" href="<?php echo base_url('user/checkout/') ?>">Checkout</a>
			</div>
	</section> <!--/#cart_items-->

	<!-- javascript -->
