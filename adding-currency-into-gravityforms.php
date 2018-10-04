<?php
/* Gravity Forms by default does not support Rupiah currency. Hence the code. */

function add_inr_currency( $currencies ) {
    $currencies['IDR'] = array(
	'name'               => __( 'Indonesian Rupiah', 'gravityforms' ),
	'symbol_left'        => '&#82;&#112;',
	'symbol_right'       => '',
	'symbol_padding'     => ' ',
	'thousand_separator' => '.',
	'decimal_separator'  => ',',
	'decimals'           => 2
    );

    return $currencies;
}
add_filter( 'gform_currencies', 'add_inr_currency' );
?>
