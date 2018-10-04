<?php
/* In WordPress wp-admin, there is a footer on the bottom. Usually there are two sections; left side and the right side */
/* This code will change the text on the left side */

function remove_footer_admin () {
    echo "When the Dawn with her red-rose fingers shown once more - Eko Hermiyanto, the Lord of the War-Cry, climbed from his bed";
}
add_filter('admin_footer_text', 'remove_footer_admin');
?>
