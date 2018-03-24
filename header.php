<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dyzio_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="navbar">
	<!-- MOBILE -->
	<div class="navbar__mobile ">
		<div id="navbar__icon">
			<i class="fas fa-bars fa-3x "></i>
		</div>
		<div class="navbar__logo"><a class="link--clear" href="<?php echo get_home_url(); ?>">Patryk 
				Nizio</a>
		</div>
		
		<div class="navbar__side navbar__mobile--hidden">
			<div class="navbar__search">
				<?php get_search_form(); ?>
			</div>
			<ul class="list__menu">
				<li><a href="<?php echo get_home_url(); ?>/blog"><i class="fas fa-pencil-alt "> </i>  blog</a></li>
				<li><a href="<?php echo get_home_url(); ?>/portfolio"><i class="fas fa-briefcase"> </i>  portfolio</a></li>
				<li><a href="<?php echo get_home_url(); ?>/o-mnie"><i class="far fa-address-card"> </i>  o mnie</a></li>
			</ul>
			<ul class="list__menu">
				<li> Social: </li>
				<li><a href="https://www.linkedin.com/in/patryk-nizio/"><i class="fab fa-linkedin"> </i> Linkedin</a></li>
				<li><a href="https://github.com/Dyzio18"><i class="fab fa-github-square"> </i> Github</a></li>
			</ul>
			
		</div>


	</div>
	
	<!-- DESKTOP -->
	<div class="navbar__desktop">
		<div class="navbar__search">
			<?php get_search_form(); ?>
		</div>
		
			<div class="navbar__logo"><a class="link--clear" href="<?php echo get_home_url(); ?>">Patryk 
				Nizio</a>
			</div>
		
		<div class="navbar__menu">
			<ul class="list--inline">
				<li><a class="navbar__link" href="<?php echo get_home_url(); ?>/blog">blog</a></li>
				<li><a class="navbar__link" href="<?php echo get_home_url(); ?>/portfolio">portfolio</a></li>
				<li><a class="navbar__link" href="<?php echo get_home_url(); ?>/o-mnie">o mnie</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="site-main"> 

