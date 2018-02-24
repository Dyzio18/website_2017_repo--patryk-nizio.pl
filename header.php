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
	<div class="navbar__desktop">
		<div class="navbar__search">
			<?php get_search_form(); ?>
		</div>
		
			<div class="navbar__logo"><a class="link--clear" href="<?php echo get_home_url(); ?>">Patryk 
				Nizio</a>
			</div>
		
		<div class="navbar__menu">
			<ul class="list--inline">
				<li><a class="btn__full" href="<?php echo get_home_url(); ?>/blog">blog</a></li>
				<li><a class="btn__full" href="<?php echo get_home_url(); ?>/portfolio">portfolio</a></li>
				<li><a class="btn__full" href="<?php echo get_home_url(); ?>/o-mnie">o mnie</a></li>
			</ul>
		</div>
	</div>
</nav>

