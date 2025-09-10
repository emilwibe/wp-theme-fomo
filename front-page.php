<?php if (!defined('ABSPATH')) { exit; } ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

<div class="front-page-top">

    <?php get_template_part( 'tp/header/header-content' ); ?>

    <?php get_template_part( 'tp/front-page/hero' ); ?>

</div><!--/.front-page-top-->

<?php get_template_part( 'tp/flex/flex-entry' ); ?>

    <?php endwhile; // the loop ?>

<?php endif; // the loop ?>

<?php get_footer(); ?>