<?php
/* This code will change the wp-admin footer version (on the right side of the footer */

function change_footer_version() {
    return 'Your King - Eko Hermiyanto';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );
?>
