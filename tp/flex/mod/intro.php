<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="l-wrapper xl flex-mod flex-mod-intro flex-mod-outer">
    <div class="flex-mod-inner l-grid-global">
        <div class="intro-main">
            <div class="wysiwyg-container">

                <?php
                if (get_sub_field('flex_intro_wysiwyg')) {
                    echo get_sub_field('flex_intro_wysiwyg');
                }
                ?>

                <?php ew_print_field(true, false, '<span class="socket-text-shield">', '</span>', 'flex_intro_socket_left'); ?>
            </div>

            <?php if (have_rows('nb-boks')) : ?>

                <div class="nb-box-container">

                    <?php while (have_rows('nb-boks')) : the_row(); ?>

                        <div class="nb-box">
                            <?php ew_print_field(true, false, '<p>', '</p>', 'flex_intro_nb_txt'); ?>

                            <?php if (get_sub_field('flex_intro_nb_url')) : ?>

                                <div class="btn-container">

                                    <a href="<?php echo get_sub_field('flex_intro_nb_url'); ?>" class="btn c-black-blue icon-after icon-bg-black-blue arrow-right-white animate-right">Se mere her</a>

                                </div>

                            <?php endif; ?>

                        </div>

                    <?php endwhile; // nb-box 
                    ?>

                </div>

            <?php endif; //nb-boks 
            ?>
        </div>

        <?php if (have_rows('flex_intro_grey_box')) : ?>

            <aside class="intro-aside">

                <?php while (have_rows('flex_intro_grey_box')) : the_row(); ?>

                    <div class="fomo-grey-box">

                        <?php if (get_sub_field('flex_intro_grey_box_heading')) : ?>

                            <h3 class="fomo-grey-box-heading"><?php the_sub_field('flex_intro_grey_box_heading'); ?></h3>

                        <?php endif; ?>

                        <?php if (get_sub_field('flex_intro_grey_box_wysiwyg')) : ?>

                            <div class="wysiwyg-container fomo-grey-box-text">

                                <?php echo get_sub_field('flex_intro_grey_box_wysiwyg'); ?>

                            </div>

                            <?php if (have_rows('flex_intrflex_intro_grey_box_btn')) : ?>

                                <div class="fomo-grey-box-link-container">

                                    <?php while (have_rows('flex_intrflex_intro_grey_box_btn')) : the_row(); ?>

                                        <?php if (get_sub_field('flex_intrflex_intro_grey_box_btn_file') && get_sub_field('flex_intrflex_intro_grey_box_btn_txt')) : ?>

                                            <div class="btn-container">
                                                <a href="<?php echo get_sub_field('flex_intrflex_intro_grey_box_btn_file'); ?>" class="btn small bg-white c-black-blue icon-after icon-before document-purple icon-bg-coral arrow-down-purple animate-down" download=""><?php echo get_sub_field('flex_intrflex_intro_grey_box_btn_txt'); ?></a>
                                            </div>

                                        <?php endif; ?>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; //FILES 
                            ?>
                        <?php endif; //WYSIWYG 
                        ?>
                    </div>

                <?php endwhile; //HAVE ROWS 
                ?>
            </aside>

        <?php endif; //HAVE ROWS 
        ?>
    </div>
</section>