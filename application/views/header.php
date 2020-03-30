<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Segimaba, Mahasiswa, Mahasiswa Baru, 2016, Kost, Rumah Kost, Kampus, Kost Bagus, Indo Kost, UNSOED, Teknik, Fakultas, Fakultas Teknik">
	
	<title>Segimaba | <?php echo $title; ?></title>
	<meta name="description" content="<?php echo $desc; ?>">
	<meta name="author" content="Segimaba">
	<meta name="google-site-verification" content="o_FCTgcBB7SnhH7ahPlZqcout4lbVEPEN9gu6gOdxvY" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png'); ?>">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/blocks.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/line-icons/line-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl-carousel2/assets/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/master-slider/masterslider/style/masterslider.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/master-slider/u-styles/testimonials-1.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/master-slider/u-styles/promo-1.css'); ?>">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	
	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

	<!-- JS Global Compulsory -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/ckeditor/styles.js'); ?>"></script>
	<?php if ($title == 'Sign In') printf("<script src='https://www.google.com/recaptcha/api.js'></script>"); ?>
	
</head>
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
<main class="wrapper">
	<?php if (strstr($title, 'Segala')) : ?>
	<nav class="one-page-header navbar navbar-default transparent-bg navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
	<?php else : ?>
	<nav class="navbar-has-bg one-page-header navbar navbar-default one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
	<?php endif; ?>
		<div class="container">
			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(''); ?>">
					<img src="<?php echo base_url('assets/img/logo-light.png'); ?>" alt="ALT">
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li class="page-scroll"><a href="#kost-all"><span data-hover="Rumah Kost">Rumah Kost</span></a></li>
						<li class="page-scroll"><a href="#berita"><span data-hover="Berita">Berita</span></a></li>
						<li><a href="<?php echo site_url('contact'); ?>"><span data-hover="Kontak">Kontak</span></a></li>
						<li><a href="<?php echo site_url('about'); ?>"><span data-hover="Tentang">Tentang</span></a></li>
						
						<?php if ($this->session->userdata('islogin') != 1) : ?>
						<li class="<?php echo ($title == 'Sign In' ? 'active' : '') ?>">
							<a href="signin"><span data-hover="Sign In">Sign In</span></a>
						</li>
						<li class="<?php echo ($title == 'Sign Up' ? 'active' : '') ?>">
							<a href="signup"><span data-hover="Sign Up">Sign Up</span></a>
						</li>
						<?php else : ?>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $this->session->userdata('username'); ?></span> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(($this->session->userdata('userlevel') == 1 ? 'admin' : ($this->session->userdata('userlevel') == 2 ? 'mod' : 'users'))); ?>">Control Panel</a></li>
						        <li><a href="<?php echo site_url('signout'); ?>">Sign Out</a></li>
							</ul>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
