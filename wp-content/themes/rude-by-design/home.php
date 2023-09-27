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

get_template_part('components/banner');
?>



<h2 class="section-heading">Best sellers</h2>

<?php
echo do_shortcode('[products limit="4" columns="4" orderby="popularity" best_selling="true" ]');
?>

</main>

<?php
get_footer();
