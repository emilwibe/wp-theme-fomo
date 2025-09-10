<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<section class="flex-mod flex-mod-case flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">
        <div class="case-outer">

            <?php if (have_rows('flex_case_repeater')) : ?>

                <div class="case-text-outer">

                    <div class="splide case-splide-text" role="group">
                        <div class="splide__track">
                            <ul class="splide__list">

                                <?php while (have_rows('flex_case_repeater')) : the_row(); ?>

                                    <li class="splide__slide">

                                        <div class="flex-case-text-wrapper">

                                            <?php ew_print_field(true, false, '<h3 class="case-heading">', '</h3>', 'flex_case_heading'); ?>

                                            <?php ew_print_field(true, false, '<p class="flex-case-text">', '</p>', 'flex_case_p'); ?>

                                            <?php ew_print_field(true, false, '<p class="case-small-text">', '</p>', 'flex_case_grey_p'); ?>

                                            <?php if (get_sub_field('flex_case_btn_p') && get_sub_field('flex_case_btn_url')) : ?>

                                                <div class="btn-container">

                                                    <a href="<?php echo get_sub_field('flex_case_btn_url'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('flex_case_btn_p'); ?></a>

                                                </div>
                                            <?php endif; ?>

                                        </div><!--/.flex-case-text-wrapper-->

                                    </li><!--/.splide__slide-->

                                <?php endwhile; ?>

                            </ul><!--/.splide__list-->
                        </div><!--/.splide__track-->
                    </div><!--/-splide-->

                </div><!--/.case-text-outer-->

            <?php endif; ?>

            <?php if (have_rows('flex_case_repeater')) : ?>

                <div class="case-card-outer">

                    <div class="splide case-splide-cards" role="group">
                        <div class="splide__track">
                            <ul class="splide__list">

                                <?php while (have_rows('flex_case_repeater')) : the_row(); ?>

                                    <li class="splide__slide">
                                        <div class="flex-case-img-wrapper">

                                            <div class="case-card">
                                                <div class="case-card-content">
                                                    <div class="case-card-content-title">

                                                        <?php ew_print_field(true, false, '<h5 class="case-card-content-name">', '</h5>', 'flex_case_card_name'); ?>

                                                        <?php ew_print_field(true, false, '<h6 class="case-card-content-subtitle">', '</h6>', 'flex_case_subtitle'); ?>

                                                    </div>

                                                    <div class="case-card-content-img">

                                                        <?php
                                                        $img_ID = get_sub_field('flex_case_card_img');
                                                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load"]);
                                                        ?>

                                                    </div>
                                                </div><!--/.case-card-content-->

                                                <div class="case-card-quote">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/quotation_mark_coral.svg" alt="Quotation Icon" class="ui-quotation-mark">

                                                    <?php ew_print_field(true, false, '<h3 class="case-card-quote">', '</h3>', 'flex_case_quote'); ?>
                                                </div>
                                            </div><!--/.case-card-->

                                        </div>
                                    </li>

                                <?php endwhile; ?>

                            </ul><!--/.splide__list-->
                        </div><!--/.splide__track-->
                    </div><!--/.splide-cards-->
                </div><!--/.case-card-outer-->

            <?php endif; ?>
        </div>
    </div>
</section>