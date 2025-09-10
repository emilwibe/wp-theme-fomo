<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<section class="flex-mod flex-mod-vision flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner vision-grid">

        <div class="flex-vision-img-container">
            <div class="img-gradient"></div>

            <?php
            $img_ID = get_sub_field('flex_vision_img_1');
            echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load"]);
            ?>

        </div>
        <div class="flex-vision-img-container">
            <div class="img-gradient"></div>

            <?php
            $img_ID = get_sub_field('flex_vision_img_2');
            echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load"]);
            ?>

            <?php ew_print_field( true, false, '<h2 class="flex-vision-text">', '</h2>', 'flex_vision_text' ); ?>
        </div>

    </div>
</section><!--/.flex-mod-->