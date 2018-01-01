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
			<div class="search__bar">
				<input class="search__input" placeholder="" type="search" name="search" id="">
			</div>
		</div>
		
			<div class="navbar__logo"><a class="link--clear" href="<?php echo get_home_url(); ?>">Patryk 
				Nizio</a>
			</div>
		
		<div class="navbar__menu">
			<ul class="list--inline">
				<li><a href="#">blog</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">o mnie</a></li>
			</ul>
		</div>
	</div>
</nav>

