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

<section class="flex-mod flex-mod-cta-row flex-mod-outer">

<div class="absolute-background"></div>
    <div class="l-wrapper xl flex-mod-inner l-grid-global">

        <div class="card <?php echo get_sub_field('flex_cta_color'); ?>">

            <div class="cta-icon-container">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_cta_icon_1')]; ?>" alt="UI" class="cta card-circle">

            </div><!--/.cta-icon-container-->

            <?php ew_print_field( true, false, '<h3 class="card-heading">', '</h3>', 'flex_cta_heading_1'); ?>

                            <?php ew_print_field( true, false, '<p class="card-text">', '</p>', 'flex_cta_p_1'); ?>

                            <?php if(get_sub_field('flex_cta_btn_url_1')) : ?>

                                <?php $btn_url = get_sub_field('flex_cta_btn_url_1'); ?>

                            <div class="btn-container">

                            <a href="<?php echo $btn_url; ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php ew_print_field(true, false, '', '', 'flex_cta_btn_p_1'); ?></a>

                            </div>

                            <?php endif; ?>

        </div><!--/.card-->

    </div>
</section>