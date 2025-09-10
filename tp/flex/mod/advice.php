<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-advice flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <?php if (have_rows('flex_advice_repeater')) : ?>

            <?php while (have_rows('flex_advice_repeater')) : the_row(); ?>

                <div class="flex-mod-advice-inner">
                    <div class="advice-text">
                        <div class="wysiwyg-container">
                            <?php the_sub_field('flex_advice_wysiwyg'); ?>
                        </div>

                        <?php if (have_rows('flex_advice_nested_repeater')) : ?>

                            <ul class="advice-list">

                                <?php while (have_rows('flex_advice_nested_repeater')) : the_row(); ?>

                                    <li class="advice-list-item"><a href="<?php echo get_sub_field('flex_advice_nested_repeater_link'); ?>"><?php echo get_sub_field('flex_advice_nested_repeater_txt'); ?></a></li>

                                <?php endwhile; ?>

                            </ul><!--/.advice-list-->
                        <?php endif; ?>
                    </div>

                    <div class="advice-img">
                        <?php
                        $imgID = get_sub_field('flex_advice_img');
                        echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                        ?>
                    </div>
                </div>

<?php endwhile; ?>


<?php endif; ?>
</div>
</section>