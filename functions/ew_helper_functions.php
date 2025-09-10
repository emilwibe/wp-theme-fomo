<?php
if (!defined('ABSPATH')) { exit; }

function ew_print_field( $sub_field = false, $option_field = false, $before = '', $after = '', $field_name ) {
    if( !$sub_field && get_field( $field_name, $option_field ) ) {
        
        echo $before . get_field( $field_name, $option_field ) . $after;
    
    } elseif( $sub_field && get_sub_field( $field_name, $option_field ) ) {
    
        echo $before . get_sub_field( $field_name, $option_field ) . $after;
    
    }
}