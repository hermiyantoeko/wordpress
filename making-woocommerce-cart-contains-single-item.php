<?php
/*
 * Sometime we need to make sure that WooCommerce cart only contains a single product
 */

function eko_only_one_in_cart( $passed, $added_product_id ) {
    // empty cart first: new item will replace previous
    wc_empty_cart();

    // display a message if you like
    //wc_add_notice( 'New product added to cart!', 'notice' );

    return $passed;
}
add_filter( 'woocommerce_add_to_cart_validation', 'eko_only_one_in_cart', 99, 2 );
?>
