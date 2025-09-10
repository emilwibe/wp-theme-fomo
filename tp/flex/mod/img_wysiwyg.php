<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-img-wysiwyg flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="img-wrapper">
            <?php
            $imgID = get_sub_field('flex_img_txt_img');
            echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
            ?>
        </div>

        <div class="wysiwyg-container wysiwyg-2-col">

            <?php echo get_sub_field( 'flex_img_txt_wysiwyg' ); ?>

        </div>

    </div>
</section>