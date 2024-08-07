<?php

/**
 * @snippet       Add "Quantity:" before Add to Cart Button - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart', 10);

function bbloomer_echo_qty_front_add_cart()
{
  global $product;
  if ($product->get_min_purchase_quantity() == $product->get_max_purchase_quantity()) return;
  echo '<label>Quantity: </label>';
}

/**
 * Automatically add product details below the description
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
  $cat_id =  $categories[0]->term_id;

  // show the product description
  $content .= get_field('description_for_the_single_product_page', 'product_cat_' . $cat_id);

  // show the product bullet points
  $content .= '<h3>' . get_field('product_details_title', 'option') . '</h3>';
  $content .= get_field('bullet_points_for_the_single_product_page', 'product_cat_' . $cat_id);
  $content .= get_field('made_to_order_message', 'option');

  return $content;
}

// Show description tab even if there is no description
function woocommerce_default_description($content)
{
  $empty = empty($content) || trim($content) === '';
  if (is_product() && $empty) {
    $content = ' ';
  }
  return $content;
}
add_filter('the_content', 'woocommerce_default_description');

function rmg_woocommerce_default_product_tabs($tabs)
{
  if (empty($tabs['description'])) {
    $tabs['description'] = array(
      'title'    => __('Description', 'woocommerce'),
      'priority' => 10,
      'callback' => 'woocommerce_product_description_tab',
    );
  }
  return $tabs;
}
add_filter('woocommerce_product_tabs', 'rmg_woocommerce_default_product_tabs');

// remove additional information tab from single product page
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);
function woo_remove_product_tabs($tabs)
{
  unset($tabs['additional_information']);
  return $tabs;
}

// 'large mug' upsell message after buy button
function add_content_after_addtocart_button_func()
{
  if (has_term(array('mugs'), 'product_cat'))
    echo '<div class="upsell">Stand out from the mug crowd with our super-sized 20oz mugs!</div>';
}
add_action('woocommerce_after_add_to_cart_button', 'add_content_after_addtocart_button_func');

/********
// change variations from select list to buttons
 ********/
add_filter('woocommerce_dropdown_variation_attribute_options_html', 'rudr_radio_variations', 20, 2);
function rudr_radio_variations($html, $args)
{

  // in wc_dropdown_variation_attribute_options() they also extract all the array elements into variables
  $options   = $args['options'];
  $product   = $args['product'];
  $attribute = $args['attribute'];
  $name      = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title($attribute);
  $id        = $args['id'] ? $args['id'] : sanitize_title($attribute);
  $class     = $args['class'];

  if (empty($options) || !$product) {
    return $html;
  }

  // HTML for our radio buttons
  $radios = '<div class="variation-buttons">';

  // taxonomy-based attributes
  if (taxonomy_exists($attribute)) {

    $terms = wc_get_product_terms(
      $product->get_id(),
      $attribute,
      array(
        'fields' => 'all',
      )
    );

    foreach ($terms as $term) {
      if (in_array($term->slug, $options, true)) {
        $colour = get_field('colour', 'term_' . $term->term_id);
        $text = $colour ? '' : $term->name;
        $class = $colour ? 'colour' : '';
        $radios .= '<button class="variation-button ' . $class . '" data-name="' . $name . '" data-value="' . $term->slug . '" style="background: ' . $colour . '">' . $text;
      }
    }
    // individual product attributes
  } else {
    foreach ($options as $option) {
      // $checked = sanitize_title($args['selected']) === $args['selected'] ? checked($args['selected'], sanitize_title($option), false) : checked($args['selected'], $option, false);
      $radios .= "<button class=\"variation-button\" data-name=\"{$name}\" data-value=\"{$option}\">{$option}";
    }
  }

  $radios .= '</button>';

  return $html . $radios;
}
