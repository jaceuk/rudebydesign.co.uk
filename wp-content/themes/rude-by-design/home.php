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
	<h1>Mugs, they're awesome!</h1>
	<button>View our range of mugs</button>
</div>

<h2 class="section-heading">Best sellers</h2>

<?php
if (!function_exists('wc_get_products')) {
	return;
}
echo '<div class="woocommerce">'; // needed for default styles
$top_selling_products = wc_get_products(array(
	'meta_key' => 'total_sales', // our custom query meta_key
	'return'   => 'ids', // needed to pass to $post_object
	'orderby'  => array('meta_value_num' => 'DESC', 'title' => 'ASC'), // order from highest to lowest of top sellers
	'limit' => 4,
));
if ($top_selling_products) {
	do_action('woocommerce_before_shop_loop');
	woocommerce_product_loop_start();
	foreach ($top_selling_products as $top_selling_product) {
		$post_object = get_post($top_selling_product);
		setup_postdata($GLOBALS['post'] = &$post_object);
		do_action('woocommerce_shop_loop');
		wc_get_template_part('content', 'product');
	}
	wp_reset_postdata();
	woocommerce_product_loop_end();
	do_action('woocommerce_after_shop_loop');
} else {
	do_action('woocommerce_no_products_found');
}
echo '</div><!-- .woocommerce -->';

do_action('woocommerce_after_main_content');
do_action('woocommerce_sidebar');
get_footer('shop');
?>

<?php
get_footer();
