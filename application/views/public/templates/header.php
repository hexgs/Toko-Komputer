<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $judul; ?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/bootstrap.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/font-awesome.min.css">
	<!-- login -->
	<!-- <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/login.css" /> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/front/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a><i class="fa fa-envelope-o"></i> tokokomputer@gmail.com</a></li>
					<li><a><i class="fa fa-map-marker"></i> Jalan Sawojajar</a></li>
				</ul>
				<ul class="header-links pull-right">
					<?php if (isset($_SESSION['email_pelanggan'])) { ?>
						<li><a style="color:white;">Hi, <?= ($_SESSION['nama_pelanggan']) ?></a></li>
						<li><a href="<?= base_url(); ?>login/logout"><i class="fa fa-user-o"></i> Logout </a></li>
					<?php } else { ?>
						<li><a href="<?= base_url(); ?>login"><i class="fa fa-user-o"></i> Log In </a></li>
						<li><a href="<?= base_url(); ?>daftar"><i class="fa fa-user-o"></i> Sign Up</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="<?= base_url(); ?>" class="logo">
								<img src="<?= base_url(); ?>assets/front/img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<?php echo form_open("home/cari") ?>
							<input class="input" name="keyword" placeholder="Search here">
							<button class="search-btn" value="search">Search</button>
							<?php echo form_close(); ?>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->

							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="<?= base_url(); ?>cart"><i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span></a>
									<!-- <div class="qty">1</div> -->
								</a>
								<!-- <div class="cart-dropdown">
									<div class="cart-btns">
										<a href="<?= base_url(); ?>cart">View Cart</a>
										<a href="<?= base_url(); ?>checkout">Checkout<i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div> -->
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li><a href="<?= base_url(); ?>home">Home</a></li>
					<li><a href="<?= base_url(); ?>vga">VGA</a></li>
					<li><a href="<?= base_url(); ?>hardisk">Harddisk</a></li>
					<li><a href="<?= base_url(); ?>processor">Processor</a></li>
					<li><a href="<?= base_url(); ?>monitor">Monitor</a></li>
					<li><a href="<?= base_url(); ?>ram">RAM</a></li>
					<li><a href="<?= base_url(); ?>ssd">SSD</a></li>
					<li><a href="<?= base_url(); ?>motherboard">Motherboard</a></li>
					<li><a href="<?= base_url(); ?>cpu">CPU</a></li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->
