<?php if (!defined('ABSPATH')) { exit; } ?>

<?php if( have_rows( 'flex_content_main' ) ) : ?>

<main class="fomo-flex">

    <?php
    
    while( have_rows( 'flex_content_main' ) ) {
        the_row();

        if( get_row_layout() == 'flex_tabs' ) {
            get_template_part( 'tp/flex/mod/tabs' );
        } elseif ( get_row_layout() == 'flex_insurance_grid' ) {
            get_template_part( 'tp/flex/mod/insurance-grid' );
        } elseif ( get_row_layout() == 'flex_case' ) {
            get_template_part( 'tp/flex/mod/case' );
        } elseif ( get_row_layout() == 'flex_vision' ) {
            get_template_part( 'tp/flex/mod/vision' );
        } elseif ( get_row_layout() == 'flex_cta' ) {
            get_template_part( 'tp/flex/mod/cta' );
        } elseif ( get_row_layout() == 'flex_latest_news' ) {
            get_template_part( 'tp/flex/mod/latest-news' );
        } elseif ( get_row_layout() == 'flex_stacking_cards' ) {
            get_template_part( 'tp/flex/mod/stacking-cards' );
        } elseif ( get_row_layout() == 'flex_wysiwyg' ) {
            get_template_part( 'tp/flex/mod/wysiwyg' );
        } elseif ( get_row_layout() == 'flex_video' ) {
            get_template_part( 'tp/flex/mod/video' );
        } elseif ( get_row_layout() == 'flex_img' ) {
            get_template_part( 'tp/flex/mod/img' );
        } elseif ( get_row_layout() == 'flex_img_txt' ) {
            get_template_part( 'tp/flex/mod/img_wysiwyg' );
        } elseif ( get_row_layout() == 'flex_intro' ) {
            get_template_part( 'tp/flex/mod/intro' );
        } elseif ( get_row_layout() == 'flex_accordion' ) {
            get_template_part( 'tp/flex/mod/accordion' );
        } elseif ( get_row_layout() == 'flex_emp_map' ) {
            get_template_part( 'tp/flex/mod/emp-map' );
        } elseif ( get_row_layout() == 'flex_faq' ) {
            get_template_part( 'tp/flex/mod/faq' );
        } elseif ( get_row_layout() == 'flex_table' ) {
            get_template_part( 'tp/flex/mod/table' );
        } elseif ( get_row_layout() == 'flex_insurance_archive' ) {
            get_template_part( 'tp/flex/mod/insurance-archive' );
        } elseif ( get_row_layout() == 'flex_benefits' ) {
            get_template_part( 'tp/flex/mod/benefits' );
        } elseif( get_row_layout() == 'flex_team' ) {
            get_template_part( 'tp/flex/mod/team' );
        } elseif ( get_row_layout() == 'flex_advice' ) {
            get_template_part('tp/flex/mod/advice');
        } elseif ( get_row_layout() == 'flex_intro_contact' ) {
            get_template_part('tp/flex/mod/intro-contact');
        } elseif ( get_row_layout() == 'flex_cta_row' ) {
            get_template_part( 'tp/flex/mod/cta-row' );
        } elseif( get_row_layout() == 'flex_img_breaker' ) {
            get_template_part( 'tp/flex/mod/img-breaker' );
        } elseif ( get_row_layout() == 'flex_img_grid' ) {
            get_template_part( 'tp/flex/mod/img-grid' );
        } elseif ( get_row_layout() == 'flex_intro_call_me' ) {
            get_template_part( 'tp/flex/mod/intro-call-me' );
        } elseif ( get_row_layout() == 'flex_trustpilot_widget' ) {
            get_template_part( 'tp/flex/mod/tp-widget' );
        }
    }

    ?>

</main>

<?php endif; ?>