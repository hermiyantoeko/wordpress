<?php
/* Remove admin bar on the frontend for non-administrator */
/* Please put this snippet in functions.php */

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
	show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');
?>
