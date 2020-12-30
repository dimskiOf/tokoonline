<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1" class="active"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>CV.</span> Rabadi Multiguna</h1>
									<h2>We Provide Your Better Needs</h2>
									<p>Komplek Serpong Garden, Cluster Green Studentia, Block C21/2 Jl. Raya Cisauk Lapan, Serpong - Tangerang, Banten Indonesia </p>
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
	 <div id="contact-page mb-4" class="container">
		<div class="bg">
			<div class="row">    		
				<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong>Patner Kami</strong></h2>
					<?php foreach ($patner as $p) : ?>  
					<div class="col-md-4">
					<div class="card ml-3 mb-3" style="width: 30rem; margin-bottom: 20px;">
					  <img src="<?php echo base_url().'/uploads/'. $p->logo ?>" style="width: 100%; height: 250px;">
						  <div class="card-body">
						  	<h2 class="text-center text-primary"><?php echo $p->nama_perusahaan ?></h2>
						    <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. </p><br>
						    <a class="text-center" href="#" class="card-link">Lihat lebih lanjut</a>
						  </div>
					</div>
			</div>	
			<?php endforeach; ?>		 		
		</div> 
	</section>
