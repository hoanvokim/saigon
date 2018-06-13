<!DOCTYPE html>
<html lang="en">
<head>
	<title>iamsaigon | Home</title>

	<meta charset="utf-8">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic'
		  rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/revolution/css/settings.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/rev-slider.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sliders.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/spacings.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color.css"/>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/img/apple-touch-icon-114x114.png">

</head>

<body data-spy="scroll" data-offset="61" data-target=".navbar-fixed-top">

<!-- Preloader -->
<div class="loader-mask">
	<div class="loader">
		"Loading..."
	</div>
</div>


<!-- header
================================================== -->
<header class="s-header">
	<nav class="header-nav">

		<a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

		<div class="header-nav__content">
			<h3>Navigation</h3>

			<ul class="header-nav__list">
                <li <?php if($active_tab=='home') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url(); ?>" title="Homepage">Homepage</a></li>
                <li <?php if($active_tab=='hello') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url() . 'hello'; ?>" title="Xin Chào">"Xin Chào"</a></li>
				<li <?php if($active_tab=='rooms') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url() . 'rooms'; ?>" title="Your home's style">Your home's style</a></li>
				<li <?php if($active_tab=='facilities') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url() . 'facilities'; ?>" title="Full facilities">Full facilities</a></li>
				<li <?php if($active_tab=='belocal') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url() . 'belocal'; ?>" title="Be local">Be local</a></li>
				<li <?php if($active_tab=='contact') { echo 'class="current"'; } ?> ><a class="smoothscroll" href="<?php echo base_url() . 'contact'; ?>" title="contact">Get in touch</a></li>
			</ul>

			<ul class="header-nav__social">
				<li>
					<a href="https://www.facebook.com/iamsaigon.vn"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="https://www.instagram.com/iamsaigon.vn"><i class="fa fa-instagram"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</li>
			</ul>

		</div> <!-- end header-nav__content -->

	</nav>  <!-- end header-nav -->

	<a class="header-menu-toggle opaque" href="#0">
		<span class="header-menu-icon"></span>
	</a>

</header> <!-- end s-header -->

<div class="main-wrapper-onepage main oh">
