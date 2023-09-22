<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rude_by_Design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="inner-wrapper">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="" /></a>

			<nav>
				<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'rude-by-design'); ?></button>

				<div id="primary-menu">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/shop">Shop</a></li>
						<li><a href="/basket"><img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-basket.svg" alt="" />Basket</a></li>
						<li><a href="/my-account"><img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-account.svg" alt="" />My account</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>