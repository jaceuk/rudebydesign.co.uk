<?php

/**
 * Template Name: Home
 */
?>

<?php
get_header();
?>

<?php
defined('ABSPATH') || exit;
get_header('shop');
do_action('woocommerce_before_main_content');
?>

<div class="banner">
	<h1>Mugs with attitude!</h1>
	<button>View our range of mugs</button>
</div>

<h2 class="section-heading">Best sellers</h2>

<?php
echo do_shortcode('[products limit="4" columns="4" orderby="popularity" best_selling="true" ]');
?>

</main>

<?php
get_footer();
