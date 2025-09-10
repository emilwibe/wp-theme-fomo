<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-img-breaker flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

    <?php
        $imgID = get_sub_field( 'flex_img_breaker_img' );
        echo wp_get_attachment_image( $imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)'] );
    ?>

    </div>
</section>