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

<section class="flex-mod flex-mod-img-grid flex-mod-outer img-grid-desktop">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="index-card-image-grid-outer">
            <section class="index-card-image-grid">

                <?php ew_print_field(true, false, '<h2 class="index-hero-heading-2">', '</h2>', 'flex_img_grid_heading'); ?>

                <div class="img-grid-container">

                    <div class="img-grid-col-1">

                        <div class="card bordeaux img-grid-card-1">

                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_1')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h3 class="card-heading">', '</h3>', 'flex_img_grid_heading_1'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_1'); ?>

                        </div>

                        <?php
                        $img_ID = get_sub_field('flex_img_grid_img_4');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-4"]);
                        ?>

                    </div><!--/.img-grid-col-1-->

                    <div class="img-grid-col-2">

                        <?php
                        $img_ID = get_sub_field('flex_img_grid_img_2');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-2"]);
                        ?>

                        <div class="card grey img-grid-card-5">
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_2')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_2'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_2'); ?>

                            <?php if (get_sub_field('flex_img_grid_btn_txt') && get_sub_field('flex_img_grid_btn_url')) : ?>

                                <div class="btn-container">

                                    <a href="<?php echo get_sub_field('flex_img_grid_btn_url'); ?>" class="btn bg-white c-black-blue border-grey icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php echo get_sub_field('flex_img_grid_btn_txt'); ?></a>

                                </div>

                            <?php endif; ?>
                        </div>

                    </div><!--/.img-grid-col-2-->

                    <div class="img-grid-col-3">

                        <?php
                        $img_ID = get_sub_field('flex_img_grid_img_3');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-3"]);
                        ?>

                        <div class="card purple img-grid-card-6">
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_3')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_3'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_3'); ?>

                        </div>

                    </div><!--/.img-grid-col-3-->

                    <div class="card coral img-grid-card-7">

                        <div class="cta-icon-container">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_4')]; ?>" alt="UI" class="cta card-circle">

                        </div>

                        <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_4'); ?>

                    </div>


                </div>
            </section>
        </div><!--/.index-card-image-grid-outer-->

    </div>
</section>




<section class="flex-mod flex-mod-img-grid flex-mod-outer img-grid-mobile">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="index-card-image-grid-outer">
            <section class="index-card-image-grid">

                <?php ew_print_field(true, false, '<h2 class="index-hero-heading-2">', '</h2>', 'flex_img_grid_heading'); ?>

                <div class="img-grid-container">


                        <div class="card bordeaux img-grid-card-1">

                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_1')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h3 class="card-heading">', '</h3>', 'flex_img_grid_heading_1'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_1'); ?>

                        </div>

                        <?php
                        $img_ID = get_sub_field('flex_img_grid_img_2');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-2"]);
                        ?>

                         <?php
                        $img_ID = get_sub_field('flex_img_grid_img_3');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-3"]);
                        ?>

                        <?php
                        $img_ID = get_sub_field('flex_img_grid_img_4');
                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load img-grid-card-4"]);
                        ?>


                        

                        <div class="card grey img-grid-card-5">
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_2')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_2'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_2'); ?>

                            <?php if (get_sub_field('flex_img_grid_btn_txt') && get_sub_field('flex_img_grid_btn_url')) : ?>

                                <div class="btn-container">

                                    <a href="<?php echo get_sub_field('flex_img_grid_btn_url'); ?>" class="btn bg-white c-black-blue border-grey icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php echo get_sub_field('flex_img_grid_btn_txt'); ?></a>

                                </div>

                            <?php endif; ?>
                        </div>


                       

                        <div class="card purple img-grid-card-6">
                            <div class="cta-icon-container">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_3')]; ?>" alt="UI" class="cta card-circle">

                            </div>

                            <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_3'); ?>

                            <?php ew_print_field(true, false, '<p class="card-text">', '</p>', 'flex_img_grid_txt_3'); ?>

                        </div>


                    <div class="card coral img-grid-card-7">

                        <div class="cta-icon-container">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_img_grid_icon_4')]; ?>" alt="UI" class="cta card-circle">

                        </div>

                        <?php ew_print_field(true, false, '<h4 class="card-heading">', '</h4>', 'flex_img_grid_heading_4'); ?>

                    </div>


                </div>
            </section>
        </div><!--/.index-card-image-grid-outer-->

    </div>
</section>