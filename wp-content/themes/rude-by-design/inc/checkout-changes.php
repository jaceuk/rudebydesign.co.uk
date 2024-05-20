<?php
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
add_action('woocommerce_review_order_after_cart_subtotal', 'woocommerce_checkout_coupon_form_custom');
function woocommerce_checkout_coupon_form_custom()
{
  echo '<tr class="coupon-form">
  <td colspan="2">';

  wc_get_template(
    'checkout/form-coupon.php',
    array(
      'checkout' => WC()->checkout(),
    )
  );
  echo '
</tr>
</td>';
}
