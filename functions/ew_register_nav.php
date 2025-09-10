<?php
if (!defined('ABSPATH')) { exit; }

if (!function_exists('borch_register_nav_menu')) {

    function ew_register_nav_menu() {
        register_nav_menus(array(
            'primary'  => __('Primær Menu', 'fomo'),
            'insurance'  => __('Primær forsikringer-menu', 'fomo'),
            //'off-canvas-secondary' => __('Mobil Menu sekundær','borch_advokater'),
            //'location_menu' => __('Locations', 'borch_advokater'),
        ));
    }
    add_action('after_setup_theme', 'ew_register_nav_menu', 0);
}