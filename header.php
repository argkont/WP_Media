<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mediatrends
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site hide">
	<div class="col-md-12 col-no-padding">
	<?php do_action( 'before' ); ?>

	<header id="header" class="row header affix">
		
		<div class="col-md-12 text-center">
			<div class="row">
				
				<div class="col-md-6">
					<ul class="list-inline text-center redes">
						<li><a href=""><img src="<?php bloginfo('template_directory');?>/img/icon_fb.gif" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_directory');?>/img/icon_tw.gif" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_directory');?>/img/icon_pi.gif" alt=""></a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="btn_camp text-center">
						<span>VIEW LAST CAMPAING</span>
						<img src="<?php bloginfo('template_directory');?>/img/icon_dep.gif" alt="">
					</div>
				</div>

			</div>
			<!--div class="cont_nav"></div-->
			<nav class="scroll-nav">
				<div class="scroll-nav__wrapper">
					<span class="scroll-nav__heading">
						<ol class="row list-inline menu scroll-nav__list">
							<li class="scroll-nav__item"><a class="scroll-nav__link" href="#secc-2">ABOUT</a></li>
							<li class="scroll-nav__item"><a class="scroll-nav__link" href="#secc-3">PRODUCTS & SERVICES</a></li>
							<li class="no_effect scroll-nav__item"><a class="scroll-nav__link" href="#secc-1"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt=""></a></li>
							<li class="scroll-nav__item"><a class="scroll-nav__link" href="#secc-4">CAMPAIGNS</a></li>
							<li class="scroll-nav__item"><a class="scroll-nav__link" href="#secc-5">ADVERTISERS</a></li>
						</ol>
					</span>
				</div>
			</nav>
		</div>

	</header>	

	<div id="content" class="row site-content text-center">
