<?php
/*
 * Redirecting customer into custom thank you page based on the status of the current order
 * It also supports WooCommerce Deposit as well
 */

function eko_redirect_thank_you_page($order_id) {
    //create an order instance
    $order = wc_get_order($order_id); //<--check this line

    $current_order_status = $order->get_status();

    $pending_url = 'url';
    $partial_payment_url = 'url';
    $completed_url = 'url';

    if ($current_order_status == 'pending') {
	wp_redirect($pending_url);
	exit;
    } elseif(($current_order_status == 'wc-partial-payment') or ($current_order_status == 'partial-payment') or ($current_order_status == 'partially-paid')) {
	wp_redirect($partial_payment_url);
	exit;
    } elseif ($current_order_status == 'completed') {
	wp_redirect($completed_url);
	exit;
    }
}
add_action('woocommerce_thankyou', 'eko_redirect_thank_you_page', 10, 1);
?>
