<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CV. Rabadi Multiguna</title>
    <link href="<?php echo base_url('') ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/user/') ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- typehead -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.typeahead.css">
    <link href="<?php echo base_url('assets/user/') ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/') ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/') ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/') ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/user/') ?>css/main.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/user/') ?>css/responsive.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url('assets/user/images/logo.jpg') ?>">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header fixed-top"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 021-290 13013</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Rabadimultiguna@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
			<!-- header middle -->
	<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="<?php echo base_url('user/dashboard') ?>">
								<img src="<?php echo base_url('assets/user/images/logo.jpg') ?>" width="30%" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url('user/account') ?>"><i class="fa fa-user"></i> Account</a></li>
								<li>
									<a><?php $cart ='<i class="fa fa-shopping-cart"> Cart : </i>  '. $this->cart->total_items(). ' Produk' ?></a>
									<?php echo anchor('user/kategori/detailcart', $cart) ?>
								</li>
								<?php if($this->session->userdata('nama')) { ?>
									<li class="ml-3">
										<div style="margin-top: 10px;"><?php echo $this->session->userdata('nama') ?></div>
									</li>
									<li><?php echo anchor('auth/logout','logout' )?>
										
									</li>
								<?php }else { ?>
									<li><?php echo anchor('auth/login','login') ?></li>
								<?php }  ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url('user/dashboard') ?>">Home</a></li>
								<li><a href="<?php echo base_url('user/about_us') ?>" >Tentang Kami</a></li>
								<li class="dropdown"><a href="#">Kategori Produk<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="<?php echo base_url('user/kategori/medical_safety') ?>">Medical Safety</a></li> 
										<li><a href="<?php echo base_url('user/kategori/electrical') ?>">Electrical</a></li> 
										<li><a href="<?php echo base_url('user/kategori/cleaning_tools') ?>">Cleaning Tools</a></li> 
										<li><a href="<?php echo base_url('user/kategori/industrial_safety') ?>">Industrial Safty</a></li>
										<li><a href="<?php echo base_url('user/kategori/equipment_horeca') ?>">Equipment HORECA</a></li> 
										<li><a href="<?php echo base_url('user/kategori/equipment_cleaning') ?>">Equipment Cleaning</a></li>
										<li><a href="<?php echo base_url('user/kategori/equipment_tools') ?>">Equipment Tools</a></li>
										<li><a href="<?php echo base_url('user/kategori/equipment_electrical_cleaning') ?>">Equipment ELectrical & Cleaning</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('user/patner') ?>">Patner Kami</a></li> 
								<li><a href="<?php echo base_url('user/contact_us') ?>">Hubungi Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input id="cari" type="text" class="typeahead"  autocomplete="off" placeholder="Pencarian Produk"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->\