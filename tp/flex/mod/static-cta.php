<?php if (!defined('ABSPATH')) { exit; } ?>
<?php

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
<section class="flex-mod flex-mod-cta flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="splide splide-cta" role="group">

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card blue">

                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_field('flex_cta_icon_1', 'option')]; ?>" alt="UI" class="cta card-circle">
                            
                            </div>
                            <?php ew_print_field( false, 'option', '<h4 class="card-heading">', '</h4>', 'flex_cta_heading_1'); ?>

                            <?php ew_print_field( false, 'option', '<p class="card-text">', '</p>', 'flex_cta_p_1'); ?>

                            <div class="btn-container">

                            <a href="<?php ew_print_field(false, 'option', '', '', 'flex_cta_btn_url_1'); ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(true, 'option', '', '', 'flex_cta_btn_p_1'); ?></a>

                            </div>
                        </div>
                    </li>

                     <li class="splide__slide">
                        <div class="card grey">
                            
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_field('flex_cta_icon_2', 'option')]; ?>" alt="UI" class="cta card-circle">
                            
                            </div>

                            <?php ew_print_field( false, 'option', '<h4 class="card-heading">', '</h4>', 'flex_cta_heading_2'); ?>

                            <?php ew_print_field( false, 'option', '<p class="card-text">', '</p>', 'flex_cta_p_2'); ?>

                            <div class="btn-container">

                            <a href="<?php ew_print_field(false, 'option', '', '', 'flex_cta_btn_url_2'); ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(false, 'option', '', '', 'flex_cta_btn_p_2'); ?></a>

                            </div>
                        </div>
                    </li>

                     <li class="splide__slide">
                        <div class="card rose">
                            
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_field('flex_cta_icon_3', 'options')]; ?>" alt="UI" class="cta card-circle">
                            
                            </div>

                            <?php ew_print_field( false, 'option', '<h4 class="card-heading">', '</h4>', 'flex_cta_heading_3'); ?>

                            <?php ew_print_field( false, 'option', '<p class="card-text">', '</p>', 'flex_cta_p_3'); ?>

                            <div class="btn-container">

                            <a href="<?php ew_print_field(false, 'option', '', '', 'flex_cta_btn_url_3'); ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(false, 'option', '', '', 'flex_cta_btn_p_3'); ?></a>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
</section>