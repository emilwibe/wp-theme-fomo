<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="global-hero-outer">
    <div class="global-hero l-wrapper xl">

        <?php get_template_part('tp/global/nav-primary'); ?>

        <div class="global-hero-inner">

            <div class="img-gradient"></div>
            
            <?php
            if (has_post_thumbnail()) {
                $img_ID = get_post_thumbnail_id();
                echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load background global-hero-image"]);
            }
            ?>

            <?php if (get_sub_field('standard_page_hero_heading')) : ?>

                <h1 class="global-page-heading"><?php echo get_sub_field('standard_page_hero_heading'); ?></h1>

            <?php else : ?>

                <h1 class="global-page-heading"><?php echo get_the_title(); ?></h1>

            <?php endif; ?>

            <div class="sub-heading-wrapper">

                <?php ew_print_field(false, false, '<p class="global-page-subheading">', '</p>', 'standard_page_hero_sub-heading'); ?>

                <?php if (get_field('global-hero-btn-text') && get_field('global-hero-btn-url')) : ?>

                    <div class="btn-container">
                        <a href="<?php echo get_field('global-hero-btn-url'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_field('global-hero-btn-text'); ?></a>
                    </div><!--/.btn-container-->

                <?php endif; ?>

            </div><!--/.sub-heading-wrapper-->

        </div><!--/.global-hero-inner-->
    </div><!--/.global-hero-->
</section><!--/.global-hero-outer-->