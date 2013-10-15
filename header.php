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

<!--?php wp_head(); ?-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
<link rel="stylesheet/less" href="<?php bloginfo('template_directory');?>/css/main.less">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site">
	<div class="col-md-12 col-no-padding">
	<?php do_action( 'before' ); ?>

	<header class="row header">
		
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
			
			<ul class="row list-inline menu">
				<li><a href="">ABOUT</a></li>
				<li><a href="">PRODUCTS & SERVICES</a></li>
				<li class="no_effect"><a href=""><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt=""></a></li>
				<li><a href="">CAMPAIGNS</a></li>
				<li><a href="">ADVERTISERS</a></li>
			</ul>
		</div>

	</header>	

	<div id="content" class="row site-content text-center">
