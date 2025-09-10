<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php get_template_part( 'tp/global/global-hero' ); ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php
            $ew_post_parent = get_post_parent();
            $ew_post_parent_ID = $ew_post_parent->ID;

            if( get_field('is_insurance_parent_page', $ew_post_parent_ID)[0] == 'true' ) {
                get_template_part( 'tp/insurance/insurance-content' );

                
            }

        ?>

        <?php get_template_part('tp/flex/flex-entry'); ?>

    <?php endwhile; // the loop 
    ?>

<?php endif; // the loop 
?>

<?php get_footer(); ?>