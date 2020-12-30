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
				<div class="col-sm-9 padding-right"><!--features_items-->
					<div class="features_items">
						<h2 class="title text-center">Equipment HORECA</h2>
						<?php foreach ($equipment_horeca as $m) :?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url().'/uploads/'.$m->foto_barang ?>" style="width: 300px; height:150px;" />
										<h2><?php echo $m->nama_barang ?></h2>
										<p><?php echo $m->nama_barang ?></p>
										<p><?php echo $m->harga?></p>
										<a><?php echo anchor('user/kategori/cart/'.$m->id_barang,'<div class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</div')?></a>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a><?php echo anchor('user/detail_produk/index/'.$m->id_barang,'<i class="fa fa-eye"></i>Detail Produk')?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					</div>
					<!--features_items-->
					<ul class="pagination">
						<li class="active"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div>
			</div>
		</div>
		</section>
</html>