<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Rude_by_Design
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */

function rude_by_design_woocommerce_setup()
{
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 300,
			'single_image_width'    => 800,
			'gallery_thumbnail_image_width' => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'rude_by_design_woocommerce_setup');

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function rude_by_design_woocommerce_scripts()
{
	wp_enqueue_style('rude-by-design-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION);

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style('rude-by-design-woocommerce-style', $inline_font);
}
add_action('wp_enqueue_scripts', 'rude_by_design_woocommerce_scripts');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function rude_by_design_woocommerce_active_body_class($classes)
{
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter('body_class', 'rude_by_design_woocommerce_active_body_class');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function rude_by_design_woocommerce_related_products_args($args)
{
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args($defaults, $args);

	return $args;
}
add_filter('woocommerce_output_related_products_args', 'rude_by_design_woocommerce_related_products_args');

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if (!function_exists('rude_by_design_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function rude_by_design_woocommerce_wrapper_before()
	{
?>
		<main id="primary" class="inner-wrapper">
		<?php
	}
}
add_action('woocommerce_before_main_content', 'rude_by_design_woocommerce_wrapper_before');

if (!function_exists('rude_by_design_woocommerce_wrapper_after')) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function rude_by_design_woocommerce_wrapper_after()
	{
		?>
		</main><!-- #main -->
<?php
	}
}
add_action('woocommerce_after_main_content', 'rude_by_design_woocommerce_wrapper_after');

// disable sidebar
function disable_woo_commerce_sidebar()
{
	remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}
add_action('init', 'disable_woo_commerce_sidebar');

// remove additional information tab from single product page
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);
function woo_remove_product_tabs($tabs)
{
	unset($tabs['additional_information']);
	return $tabs;
}

// hide downloads link in the account section
function custom_my_account_menu_items($items)
{
	unset($items['downloads']);
	return $items;
}
add_filter('woocommerce_account_menu_items', 'custom_my_account_menu_items');

// 'large mug' upsell message after buy button
function add_content_after_addtocart_button_func()
{
	if (has_term(array('mugs'), 'product_cat'))
		echo '<div class="callout">Stand out from the mug crowd with our super-sized 20oz mug!</div>';
}
add_action('woocommerce_after_add_to_cart_button', 'add_content_after_addtocart_button_func');


/**
 * Customize product data tabs
 */
add_filter('the_content', 'woocommerce_custom_product_description', 20, 1);
function woocommerce_custom_product_description($content)
{
	// Only for woocommerce single product pages
	if (!is_product())
		return $content;

	// get parent category
	global $post;
	$categories = get_the_terms($post->ID, 'product_cat');

	foreach ($categories as $category) {
		if ($category->parent == 0) {
			$product_parent_cat_name =  $category->name;
		}
	}

	if (strtolower($product_parent_cat_name) === 'funny mugs') {
		$content .= '<h3>Details</h3><p>This sturdy, glossy, ceramic mug comes in the following sizes:</p>
		<ul>
			<li>
				11 oz mug dimensions: 3.8″ (9.6 cm) in height, 3.2″ (8.2 cm) in diameter
			</li>
			<li>
				15 oz mug dimensions: 4.7″ (11.9 cm) in height, 3.3″ (8.5 cm) in diameter
			</li>
			<li>
				20 oz mug dimensions: 4.3″ (10.9 cm) in height, 3.7″ (9.3 cm) in diameter
			</li>
		</ul>
		<p>This mug features a vivid print and is dishwasher and microwave safe.</p>
		';
	}

	if (strtolower($product_parent_cat_name) === 'funny coasters') {
		$content .= '<h3>Details</h3><p>The coaster is waterproof and heat-resistant, designed to last a long time. Features:</p>
		<p>Size:</p>
		<ul>
			<li>Hardboard MDF 0.12″ (3 mm)</li>
			<li>Cork 0.04″ (1 mm)</li>
			<li>Size: 3.74″ × 3.74″ × 0.16″ (95 × 95 × 4 mm)</li>
		</ul>
		<p>Features:</p>
		<ul>
		<li>High-gloss coating on top</li>
		<li>Rounded corners</li>
		<li>Water-repellent, heat-resistant, and non-slip</li>
		<li>Easy to clean</li>
	</ul>
		';
	}

	if (strtolower($product_parent_cat_name) === 'funny t-shirts') {
		$content .= '<h3>Details</h3><p>This design is printed on a Bella + Canvas 3001 unisex shirt. It feels soft and lightweight, with the right amount of stretch. It\'s comfortable and flattering for both men and women:</p>
		<ul>
			<li>
			100% combed and ring-spun cotton (Heather colors contain polyester)
			</li>
			<li>
			Fabric weight: 4.2 oz./yd.² (142 g/m²)
			</li>
			<li>
			Pre-shrunk fabric
			</li>
			<li>Side-seamed construction</li>
			<li>Shoulder-to-shoulder taping</li>
			<li>Runs true to size</li>
		</ul>
		';
	}

	return $content;
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter('loop_shop_per_page', 'new_loop_shop_per_page', 20);

function new_loop_shop_per_page($cols)
{
	// $cols contains the current number of products per page based on the value stored on Options –> Reading
	// Return the number of products you wanna show per page.
	$cols = 16;
	return $cols;
}


/**
 * @snippet       Add "Quantity:" before Add to Cart Button - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart');

function bbloomer_echo_qty_front_add_cart()
{
	global $product;
	if ($product->get_min_purchase_quantity() == $product->get_max_purchase_quantity()) return;
	echo '<label>Quantity: </label>';
}

// Show the regular price in product card if item is on sale
function custom_template_loop_price()
{
	global $product;

	if (is_a($product, 'WC_Product')) {
		echo '<span class="price">';

		if ($product->is_type('variable')) {
			$regular_price = $product->get_variation_regular_price('min');

			echo '<span class="price-prefix">From </span><span class="woocommerce-Price-amount amount">';

			if ($product->is_on_sale()) {
				$sale_price = $product->get_variation_sale_price('min');
				echo '<bdi><del><span class="woocommerce-Price-currencySymbol">£</span>' . $regular_price . '</del></bdi> <bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $sale_price . '</bdi>';
			} else {
				echo '<bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $regular_price . '</bdi>';
			}

			echo '</span>';
		} else {
			$regular_price = $product->get_regular_price('min');

			echo '<span class="woocommerce-Price-amount amount">';

			if ($product->is_on_sale()) {
				$sale_price = $product->get_sale_price();
				echo '<bdi><del><span class="woocommerce-Price-currencySymbol">£</span>' . $regular_price . '</del></bdi> <bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $sale_price . '</bdi>';
			} else {
				echo '<bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $regular_price . '</bdi>';
			}

			echo '</span>';
		}

		echo '</span>';
	}

	remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
}
add_action('woocommerce_after_shop_loop_item_title', 'custom_template_loop_price', 5);

// replace single product price with new snippet
add_action('woocommerce_single_product_summary', 'custom_template_loop_price', 6);


// add personalisation section to the order confirmation page
add_action('woocommerce_thankyou', 'personalisation', 10, 2);

function personalisation($order_id)
{
	echo "<section class='woocommerce-personalisation'>
	<p>If your order contains a personalised item that requires a photo please email it, along with your order number, to <a href='mailto:info@rudebydesign.co.uk'>info@rudebydesign.co.uk</a>. Please make sure your order number is in the email title and that the photo is of good quality and resolution. If your order contains more than one item that requires a photo please make it clear in the email which item each photo belongs to.</p>
</section>";
}

// change default product sort order
add_filter('woocommerce_default_catalog_orderby', 'default_catalog_orderby');

function default_catalog_orderby($sort_by)
{
	return 'popularity';
}
