<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<section class="flex-mod flex-mod-latest-news accordion-variant flex-mod-outer">
    <div class="l-wrapper l flex-mod-inner">

        <div class="latest-news-text">
            <div class="latest-news-heading">

                <?php ew_print_field(true, false, '<h2 class="latest-news-heading-h3">', '</h2>', 'flex_accordion_heading'); ?>

            </div><!--/.latest-news-heading-->

            <div class="latest-news-subheading">

                <?php ew_print_field(true, false, '<h4 class="latest-news-subheading-h4">', '</h4>', 'flex_accordion_p'); ?>

            </div><!--/.latest-news-subheading-->
        </div><!--/.latest-news-text-->



        <?php if (have_rows('flex_accordion_repeater')) : ?>

            <div class="flex-latest-news-post-list">

                <?php while (have_rows('flex_accordion_repeater')) : the_row(); ?>

                    <div class="flex-latest-news-post-item post-is-closed">
                        <?php
                        $imgID = get_sub_field('flex_accordion_list_img');
                        echo wp_get_attachment_image( $imgID, 'full', false, ['class' => 'fade-on-load latest-news-thumbnail', 'onload' => 'loadImageonLoad(this)'] );
                        ?>

                        <h3 class="latest-news-item-heading"><?php ew_print_field(true, false, '', '', 'flex_accordion_list_heading'); ?></h3>

                        <div class="post-item-btn-wrapper">
                                <a href="#" class="btn btn-ghost-plus">Læs mere</a>
                        </div>
                    </div><!--/.flex-latest-news-post-item-->

                    <div class="flex-latest-news-post-content post-content-hidden">

                            <div class="flex-latest-news-post-content-primary">

                                <?php echo get_sub_field('flex_accordion_list_content'); ?>

                                <?php if (get_sub_field('flex_accordion_list_content_btn_txt') && get_sub_field('flex_accordion_list_content_btn_url')) : ?>

                                    <div class="btn-container">

                                        <a href="<?php echo get_sub_field('flex_accordion_list_content_btn_url'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('flex_accordion_list_content_btn_txt'); ?></a>

                                    </div><!--/.btn-container-->

                                <?php elseif(get_sub_field('flex_accordion_list_content_btn_txt') && get_sub_field('flex_accordion_list_content_btn_url_x')) : ?>

                                    <div class="btn-container">

                                        <a href="<?php echo get_sub_field('flex_accordion_list_content_btn_url_x'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('flex_accordion_list_content_btn_txt'); ?></a>

                                    </div><!--/.btn-container-->

                                <?php endif; ?>

                            </div>

                            <?php
                            $imgID = get_sub_field('flex_accordion_list_content_img');
                            echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load accordion-content-img', 'onload' => 'loadImageonLoad(this)']);

                            ?>

                    </div>

                <?php endwhile; // Accordion 
                ?>

            </div><!--/.accordion-list-->

        <?php endif; // Accordion 
        ?>
    </div>
</section>