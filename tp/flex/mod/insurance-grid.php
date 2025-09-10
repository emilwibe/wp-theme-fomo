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

<section class="flex-mod flex-mod-insurance-grid flex-mod-outer">

    <div class="l-wrapper xl">

        <div class="insurance-grid-text-container">

            <?php if (get_sub_field('flex_insurance_grid_heading')) : ?>

                <h2 class="insurance-grid-heading"><?php echo get_sub_field('flex_insurance_grid_heading'); ?></h2>

            <?php endif; ?>

            <?php if (get_sub_field('flex_insurance_grid_p')) : ?>

                <h4 class="insurance-grid-p"><?php echo get_sub_field('flex_insurance_grid_p'); ?></h4>

            <?php endif; ?>

        </div><!--/.insurance-grid-text-container-->

    </div>

    <div class="l-wrapper xl fw-splide">

        <?php if (have_rows('flex_insurance_grid_repeater')) : ?>

            <div class="insurance-grid-grid">

                <div class="splide flex_insurance_grid" role="group">

                    <div class="splide__track">
                        <ul class="splide__list">

                            <?php while (have_rows('flex_insurance_grid_repeater')) : the_row(); ?>

                                <li class="splide__slide">
                                    <div class="insurance-grid-item">

                                        <?php
                                        $img_ID = get_sub_field('flex_insurance_grid_repeater_img');
                                        echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load background"]);
                                        ?>

                                        <div class="insurance-grid-item-inner">

                                            <?php
                                            $item_icon = get_sub_field('flex_insurance_grid_repeater_icon');
                                            get_template_part('tp/icons/' . $insurance_icons[$item_icon]);

                                            if (get_sub_field('flex_insurance_grid_repeater_wysiwyg')) {
                                                echo get_sub_field('flex_insurance_grid_repeater_wysiwyg');
                                            }
                                            ?>

                                        </div><!--/.insurance-grid-item-inner-->

                                        <?php if (get_sub_field('flex_insurance_grid_repeater_link')) : ?>

                                            <a href="<?php echo get_sub_field('flex_insurance_grid_repeater_link'); ?>" class="icon-circle bg-white arrow-right-purple"></a>

                                        <?php endif; ?>

                                    </div>
                                </li>

                            <?php endwhile; ?>


                        </ul><!--/.splide__list-->
                    </div><!--/.splide__track-->

                </div><!--/.insurance-grid-grid-->

            <?php endif; // GRID
            ?>

            </div>

            <div class="l-wrapper xl">

                <div class="insurance-grid-text-container">

                    <?php if (get_sub_field('flex_insurance_grid_p_2')) : ?>

                        <h4 class="insurance-grid-p"><?php echo get_sub_field('flex_insurance_grid_p_2'); ?></h4>

                    <?php endif; ?>

                </div><!--/.insurance-grid-text-container-->

                <?php if (get_sub_field('flex_insurance_btn_txt') && get_sub_field('flex_insurance_btn_url')) : ?>

                    <div class="btn-container btn-center">

                        <a href="<?php echo get_sub_field('flex_insurance_btn_url'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('flex_insurance_btn_txt'); ?></a>

                    </div><!--/.flex-insurance-btn-container-->

                <?php endif; // BTN 
                ?>

            </div><!--/.l-wrapper-->

</section>