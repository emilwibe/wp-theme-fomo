<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'tp/global/global-hero' ); ?>

    <?php endwhile; // the loop 
    ?>

<?php endif; // the loop 
?>

<?php get_footer(); ?>