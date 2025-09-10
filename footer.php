<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<footer class="footer-primary">
    <div class="l-wrapper xl l-grid-global inner-container ">
        <section class="footer-media-container">

            <?php if (get_field('footer-image', 'option')) : ?>

                <div class="img-gradient"></div>
                <div class="img-logo-btn-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/logo-main-white.svg" alt="">

                    <?php if (get_field('footer_btn_label', 'option') && get_field('footer_btn_url', 'option')) : ?>

                        <div class="btn-container">

                            <a href="<?php echo get_field('footer_btn_url', 'option'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_field('footer_btn_label', 'option'); ?></a>

                        </div>

                    <?php endif; ?>

                </div>
                <?php
                $imgID = get_field('footer-image', 'option');
                echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'footer-image fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                ?>
            <?php endif; ?>

        </section>

        <section class="footer-nav-content">

            <?php get_template_part('tp/footer/footer-widgets'); ?>

            <?php ew_print_field(false, 'option', '<p class="footer-p-1 desktop">', '</p>', 'footer_p_1'); ?>

            <?php ew_print_field(false, 'option', '<p class="footer-p-1 mobile">', '</p>', 'footer_colophone_mobile'); ?>

            <div class="trustpilot-container">

                <?php get_template_part('tp/global/trustpilot-trustbox'); ?>

            </div><!--/.trustpilotcontainer-->

            <div class="footer-logo-container mobile">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/skadesgarantifonden_logo_ 1.svg" alt="Skadesgarantifonden logo">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/Gjensidige_main-logo_Digital_Blue.svg" alt="Gjensidige Logo">

            </div><!--/.footer-logo-container-->
        </section>
    </div><!--/.l-wrapper-->

    <div class="l-wrapper m footer-colophone-outer">
        <div class="footer-colophone-wrapper">

            <?php ew_print_field(false, 'option', '<p class="footer-colophone">', '</p>', 'footer_colophone'); ?>

            <div class="footer-logo-container">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/skadesgarantifonden_logo_ 1.svg" alt="Skadesgarantifonden logo">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/Gjensidige_main-logo_Digital_Blue.svg" alt="Gjensidige Logo">

            </div><!--/.footer-logo-container-->
        </div><!--/.footer-colophone-wrapper-->
    </div><!--/.l-wrapper-->
</footer>

<div class="global-overlay">


</div><!--/.global-overlay-->

<?php wp_footer(); ?>
</body>

</html>