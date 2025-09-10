<?php
if (!defined('ABSPATH')) { exit; }

/**
 * DEQUEUE global-styles-inline-css
 */
function ew_dequeue_styles() {
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
}

add_action( 'wp_enqueue_scripts', 'ew_dequeue_styles' );

/**
 * DISABLE EMOJI SCRIPTS
 */
add_action( 'init', 'ew_disable_emojis' );
function ew_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/* DISABLE CF7 SPINNER */
add_filter( 'wpcf7_load_js', '__return_false' );

// Remove <p> and <br/> from Contact Form 7
// add_filter('wpcf7_autop_or_not', '__return_false');