<?php

function yith_is_checked_html( $options, $value ) {
	echo isset( $options[ $value ] ) ? checked( $options[ $value ] ) : '';
}

function yith_is_option_selected_html( $id, $carrier_name ) {
	echo ( $id === $carrier_name ) ? selected( 1 ) : '';
}