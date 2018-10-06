<?php
/* Set WooCommerce booking to send remainder email at certain day before event */

function four_days_before_event() {
    return 4; // 4 days before event
}
add_filter('woocommerce_bookings_remind_before_days', 'four_days_before_event');

?>
