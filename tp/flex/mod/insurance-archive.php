<?php if (!defined('ABSPATH')) {
    exit;
}

$insurance_icons = [
    'car' => 'ikon_forsikring_bil_Purple_RGB',
    'boat' => 'ikon_forsikring_baad_Purple_RGB',
    'camping' => 'ikon_forsikring_campingvogn_Purple_RGB',
    'elcar' => 'ikon_forsikring_elbil_Purple_RGBsvg',
    'fritidshus' => 'ikon_forsikring_fritidshus_Purple_RGB',
    'hund' => 'ikon_forsikring_hund_Purple_RGB',
    'hus' => 'ikon_forsikring_hus_Purple_RGB',
    'indbo' => 'ikon_forsikring_indbo_Purple_RGB',
    'kat' => 'ikon_forsikring_kat_Purple_RGB',
    'knallert' => 'ikon_forsikring_knallert_Purple_RGB',
    'motorcykel' => 'ikon_forsikring_motorcykel_Purple_RGB',
    'rejse' => 'ikon_forsikring_rejse_Purple_RGB',
    'trailer' => 'ikon_forsikring_trailer_Purple_RGB',
    'ulykke' => 'ikon_forsikring_ulykke_Purple_RGB'
];


?>
<section class="flex-mod flex-mod-insurance-archive flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <?php if (have_rows('flex_insurance_scroll_to_repeater')) : ?>

            <div class="scroll-to-container">

                <p class="scroll-to-heading">Eksempler på måder at søge på</p>
                <div class="scroll-to-line"></div>

                <div class="scroll-to-scrollbar">

                    <?php while (have_rows('flex_insurance_scroll_to_repeater')) : the_row(); ?>

                        <?php $scrollObj = get_sub_field('flex_insurance_scroll_to_repeater_insurance'); ?>

                        <div class="btn-container">
                            <a href="#insurance-<?php echo get_field('page_insurance_icon', $scrollObj); ?>" class="btn c-black-blue icon-before border-grey" data-btn-icon="<?php echo get_field('page_insurance_icon', $scrollObj); ?>"><?php echo get_sub_field('flex_insurance_scroll_to_repeater_txt'); ?></a>
                        </div><!--/.btn-container-->

                    <?php endwhile; ?>
                    
                </div><!--/.scroll-to-scrollbar-->

            </div><!--/.scroll-to-container-->

        <?php endif; ?>

        <?php if (get_sub_field('flex_insurance_archive_heading') || get_sub_field('flex_insurance_archive_sub_heading')) : ?>

            <div class="insurance-archive-text-container">

                <?php ew_print_field(true, false, '<h2 class="insurance-archive-heading">', '</h2>', 'flex_insurance_archive_heading'); ?>

                <?php ew_print_field(true, false, '<p class="insurance-archive-p">', '</p>', 'flex_insurance_archive_sub_heading'); ?>

            </div><!--/.insurance-archive-text-container-->

        <?php endif; ?>

        <div class="insurance-archive-grid">

            <?php if (have_rows('flex_insurance_archive_repeater')) : ?>

                <?php while (have_rows('flex_insurance_archive_repeater')) : the_row(); ?>

                    <?php
                    $insurance_obj = get_sub_field('flex_insurance_archive_repeater_item');
                    ?>

                    <div class="insurance-archive-item">

                        <?php
                        if (has_post_thumbnail($insurance_obj)) {
                            $imgID = get_post_thumbnail_id($insurance_obj);
                            echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load insurance-item-img', 'onload' => 'loadImageonLoad(this)']);
                        } else {
                            echo '<img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="" class="insurance-item-img">';
                        }
                        $insurance_icon = get_field('page_insurance_icon', $insurance_obj);
                        $insurance_icon_filename = $insurance_icons[$insurance_icon];
                        ?>

                        <div class="insurance-archive-item-container" id="insurance-<?php echo $insurance_icon; ?>">

                            <div class="insurance-archive-item-inner">

                                <div class="insurance-icon-wrapper">
                                    <?php get_template_part('tp/icons/' . $insurance_icons[$insurance_icon]); ?>
                                </div>
                                <h4 class="insurance-archive-item-heading"><?php echo get_the_title($insurance_obj); ?></h4>

                            </div>

                        </div>

                        <a href="<?php echo get_the_permalink($insurance_obj); ?>" class="insurance-circle-icon icon-circle bg-white arrow-right-purple"></a>

                        <div class="img-gradient"></div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div><!--/.insurance-archive-grid-->
    </div>
</section>