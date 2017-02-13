<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Exomatik.Com</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url()?>sets/img/exo/Logo.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url()?>sets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>sets/css/theme.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/css/theme-elements.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/css/theme-shop.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="<?=base_url()?>sets/vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>sets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>sets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=base_url()?>sets/vendor/modernizr/modernizr.min.js"></script>
		<script src="<?=base_url()?>sets/vendor/jquery/jquery.min.js"></script>

	</head>
	<body>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body" style="top: -57px;">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?=base_url()?>">
										<img alt="Porto" data-sticky-width="120" data-sticky-height="30" data-sticky-top="33" src="<?=base_url()?>sets/img/exo/Logo.png" style="" width="180" height="50">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Pencarian..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="<?=base_url('about-us')?>"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="<?=base_url('contact-us')?>"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/exomatik.sc/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="<?=base_url()?>sets/http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li <?php if($navbar=='beranda')echo "class='active'"?>>
														<a href="<?=base_url()?>">
															Beranda
														</a>
													</li>
													<li class="dropdown <?php if($navbar=='profil')echo 'active'?>">
														<a class="dropdown-toggle" href="">
															Profil
														</a>
															<ul class="dropdown-menu">
															<li>
																<a href="<?=base_url('sejarah')?>">Sejarah</a>
															</li>
															<li >
																<a href="<?=base_url('visi-misi')?>">Visi - Misi</a>
															</li>
															<li >
																<a href="<?=base_url('struktur-organisasi')?>">Struktur Organisasi</a>
															</li>
															<li >
																<a href="<?=base_url('program-kerja')?>">Program Kerja</a>
															</li>
															<li >
																<a href="<?=base_url('keanggotaan')?>">Anggota</a>
															</li>
														</ul>
													</li>
													<li <?php if($navbar=='portofolio')echo "class='active'"?>>
														<a  href="<?=base_url('portofolio')?>">
															Portofolio
														</a>
													</li>
													<li <?php if($navbar=='tutorial')echo "class='active'"?>>
														<a href="<?=base_url('tutorial')?>">
															Tutorial
														</a>
													</li>
													<li <?php if($navbar=='download')echo "class='active'"?>>
														<a  href="<?=base_url('download')?>">
															Download
														</a>
													</li>
													<li <?php if($navbar=='donatur')echo "class='active'"?>>
														<a  href="<?=base_url('donatur')?>">
															Donatur
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>