<?php if (!defined('ABSPATH')) {
    exit;
}
$CTA_icons = [
    'patch' => 'ikon_CTA_anmeld_skade_Purple_RGB.svg',
    'calc_price' => 'ikon_CTA_beregn_din_pris_Purple_RGB.svg',
    'call' => 'ikon_CTA_bliv_ringet_op_Purple_RGB.svg',
    'community' => 'ikon_CTA_faellesskab_Purple_RGB.svg',
    'faq' => 'ikon_CTA_FAQ_Purple_RGB.svg',
    'gjensidige' => 'ikon_CTA_Gjensidige_Purple_RGB.svg',
    'advices' => 'ikon_CTA_gode_raad_Purple_RGB.svg',
    'contact' => 'ikon_CTA_kontakt_os_Purple_RGB.svg',
    'my_site' => 'ikon_CTA_min_side__Purple_RGB.svg'
];
?>
<div class="index-hero-outer">
    <section class="index-hero l-wrapper xl l-grid-global">

        <?php get_template_part('tp/global/nav-primary'); ?>

        <div class="index-hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/logo-main-black-blue.svg" alt="FOMO Logo" class="index-hero-logo">

            <?php ew_print_field(false, false, '<h1 class="index-hero-heading">', '</h1>', 'index_hero_heading'); ?>

            <?php ew_print_field(false, false, '<p class="index-hero-subheading">', '</p>', 'hero_tekst'); ?>

            <div class="featured-insurances">
                <h6>Udvalgte forsikringer</h6>

                <?php if (have_rows('index_hero_featured_repeater')) : ?>

                    <div class="featured-insurances-repeater btn-container">

                        <?php while (have_rows('index_hero_featured_repeater')) : the_row(); ?>

                            <?php

                            $insurance_obj = get_sub_field('index_hero_featured_repeater_insurance');

                            ?>

                            <?php if (get_field('page_insurance_icon', $insurance_obj)) : ?>

                                <?php
                                $icon_field = get_field('page_insurance_icon', $insurance_obj);
                                ?>

                                <a href="<?php echo get_the_permalink($insurance_obj); ?>" data-btn-icon="<?php echo $icon_field; ?>" class="btn c-black-blue icon-after icon-before icon-bg-coral arrow-right-black-blue border-grey animate-right"><?php echo get_sub_field('index_hero_featured_repeater_text'); ?></a>

                            <?php else : ?>

                                <a href="<?php echo get_the_permalink($insurance_obj); ?>" data-btn-icon="<?php echo $icon_field; ?>" class="btn c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('index_hero_featured_repeater_text'); ?></a>

                            <?php endif; ?>

                        <?php endwhile; ?>

                    </div><!--/.featured-insurances-repeater-->

                <?php endif; ?>
            </div>



            <div class="splide" id="index-hero-cards" role="group">

                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card blue">

                                <div class="cta-icon-container cta-index-hero-icon">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_field('index_cta_icon_1')]; ?>" alt="UI" class="cta card-circle">

                                </div>

                                <?php ew_print_field(false, false, '<h4 class="card-heading">', '</h4>', 'index-hero-card-1-heading'); ?>

                                <?php ew_print_field(false, false, '<p class="card-text">', '</p>', 'index-hero-card-1-p'); ?>

                                <div class="btn-container">

                                    <a href="<?php ew_print_field(false, false, '', '', 'index-hero-card-1-btn-URL'); ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(false, false, '', '', 'index-hero-card-1-btn-p'); ?></a>

                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card ghost">

                                <div class="cta-icon-container cta-index-hero-icon">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_field('index_cta_icon_2')]; ?>" alt="UI" class="cta card-circle">

                                </div>

                                <?php ew_print_field(false, false, '<h4 class="card-heading">', '</h4>', 'index-hero-card-2-heading'); ?>

                                <?php ew_print_field(false, false, '<p class="card-text">', '</p>', 'index-hero-card-1-p'); ?>

                                <div class="btn-container">

                                    <a href="<?php ew_print_field(false, false, '', '', 'index-hero-card-2-btn-URL'); ?>" class="btn bg-white c-black-blue border-grey icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(false, false, '', '', 'index-hero-card-2-btn-p'); ?></a>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="index-hero-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">

            <div class="trustpilot-container">

                <?php get_template_part('tp/global/trustpilot-trustbox'); ?>

            </div><!--/.trustpilotcontainer-->

        </div>
    </section>
</div><!--/.index-hero-outer-->

<?php get_template_part('tp/front-page/index-grid-desktop'); ?>

<?php get_template_part('tp/front-page/index-grid-mobile'); ?>