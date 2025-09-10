<?php if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="flex-mod flex-mod-intro-contact flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">
        <div class="l-grid-global">
            <div class="flex-mod-intro-contact-main">

                <div class="wysiwyg-container">
                    <?php echo get_sub_field('flex_intro_contact_wysiwyg'); ?>
                </div>

                <div class="contact-form-container">

                    <?php echo do_shortcode('[contact-form-7 id="007a8be" title="Skriv til os"]'); 
                    ?>

                </div>
            </div>

            <div class="flex-mod-intro-contact-aside flex-mod-intro">

                <?php if (have_rows('flex_intro_contact_repeater')) : ?>
                    <?php while (have_rows('flex_intro_contact_repeater')) : the_row(); ?>

                        <div class="fomo-grey-box">
                            <div class="wysiwyg-container">
                                <?php echo get_sub_field('flex_intro_contact_repeater_wysiwyg'); ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>