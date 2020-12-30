<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>CV.</span> Rabadi Multiguna</h1>
									<h2>We Provide Your Better Needs</h2>
									<p>Ruko Piazza Mozia BSD City Blok E5 NO 6 NO.2 Jl. Raya Cisauk-Lapan Serpong-Tangerang Banten - Indonesia</p>
									<button type="button" class="btn btn-default get">Beli Sekarang</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url('assets/user/images/slider.jpg') ?>" class="girl img-responsive" width="80%"  />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>CV.</span> Rabadi Multiguna</h1>
									<h2></i>We Provide Your Better Needs</h2>
									<p>Komplek Serpong Garden, Cluster Green Studentia, Block C21/2 Jl. Raya Cisauk Lapan, Serpong - Tangerang, Banten Indonesia</p>
									<button type="button" class="btn btn-default get">Beli Sekarang</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url('assets/user/images/logo.jpg') ?>" class="girl img-responsive" width="100%" />
								</div>
							</div>
						</div>
						
							
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
									<h4 class="panel-title"><a href="<?php echo base_url('user/kategori/quipment_horeca') ?>">Equipment HORECA</a></h4>
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
						</div><!--/category-products-->
					
						<!-- shipping card -->
						<div class="shipping text-center" style="margin-bottom: 20px;"><!--shipping-->
							<img src="<?php echo base_url('assets/user/images/rabadi.png') ?>" width="95%" />
						</div>
						<!--/shipping-->
					
					</div>
				</div>
				<div class="col-sm-9 padding-right"><!--features_items-->
					<div class="features_items">
						<h2 class="title text-center">Produk Kami</h2>
						<?php foreach ($barang as $b) :?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url().'/uploads/'.$b->foto_barang ?>" style="height:150px;" />
										<h2><?php echo $b->nama_barang ?></h2>
										<p><?php echo $b->nama_barang ?></p>
										<p><?php echo $b->harga?></p>
										<a>
											<?php if($this->session->userdata('nama')) { ?>
												<?php echo anchor('user/kategori/cart/'.$b->id_barang,'<div class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</div')?>
											<?php }else { ?>
												<?php echo anchor('auth/login','<div class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</div')?>
											<?php }  ?>
										</a>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a><?php echo anchor('user/detail_produk/index/'.$b->id_barang,'<i class="fa fa-eye"></i>Detail Produk')?></a></li>
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
