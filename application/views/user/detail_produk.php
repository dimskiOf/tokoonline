
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori Produk</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/medical_safety') ?>">Medical Safety</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/electrical') ?>">Electrical</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/cleaning_tools') ?>">Cleaning Tools</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/industrial_safety') ?>">Industrial Safety</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/equipment_horeca') ?>">Equipment HORECA</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/equipment_cleaning') ?>">Equipment Cleaning</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/equipment_tools') ?>">Equipment Tools</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/equipment_electrical_cleaning') ?>">Equipment Electrical & Cleaning</a></h4>
								</div>
							</div>
						</div><!--/category-productsr-->
					</div>
				</div>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<?php foreach ($barang as $b): ?>
								<img src="<?php echo base_url().'/uploads/'. $b->foto_barang ?>" class="card-img-top" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $b->nama_barang ?></h2>
								<p><b>Kategori :</b> <?php echo $b->kategori ?></p>
								<span>
									<span>Rp. <?php echo number_format($b->harga,0,',','.')?></span>
									<div>
									<?php echo anchor('user/kategori/cart/'.$b->id_barang,'<div class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</div')?>
									</div>
								</span>
								<p><b>Stok Barang :</b> <?php echo $b->stok ?></p><br>
								<p><b>Keterangan :</b> <?php echo $b->keterangan ?></p><br><br>
								<p><button class="btn btn-info"><i class="fas fa-mobile-alt mr-3"> Call Marketing</i></button></p>
							</div><!--/product-information-->
						<?php endforeach; ?>
						</div>
					</div><!--/product-details-->
				</div>
			</div>
		</div>
	</section>