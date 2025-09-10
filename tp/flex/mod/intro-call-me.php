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

<section class="flex-mod flex-mod-intro-contact flex-mod-intro-call-me flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="flex-mod-intro-contact-main">

            <div class="wysiwyg-container">
                <?php echo get_sub_field('flex_intro_contact_wysiwyg'); ?>
            </div>

            <div class="contact-form-container call-me-iframe-wrapper">

                <iframe title="2025 Formular på fomo.dk FOMO 2.0 design - Puzzel webcallback" src="https://www.spil.fomo.dk/2025-formular-pa-fomodk-fomo-20-design-puzzel-webcallback?iframe=dontbreakout" style="border:none;width:100%;height:500px;" scrolling="no" allow="autoplay; fullscreen"></iframe>

            </div>
        </div>

        <div class="flex-mod-intro-contact-aside flex-mod-intro">

            <div class="card blue">

                <div class="cta-icon-container">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/fomo-ikoner/<?php echo $CTA_icons[get_sub_field('flex_cta_icon_2')]; ?>" alt="UI" class="cta card-circle">

                </div>
                <?php ew_print_field(true, false, '<h5 class="card-heading" style="font-weight: 400;">', '</h5>', 'flex_cta_heading_2'); ?>

                <?php ew_print_field(true, false, '<h4 class="call-me-card-text">', '</h4>', 'flex_cta_p_2'); ?>

            </div>

        </div>

    </div>
</section>