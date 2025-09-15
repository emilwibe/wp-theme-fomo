<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'tp/global/global-hero' ); ?>

        <section class="l-wrapper xl flex-mod flex-mod-intro flex-mod-outer">
    <div class="flex-mod-inner l-grid-global">
        <div class="intro-main">
            <div class="wysiwyg-container">

                <?php
                if (get_field('cpt_news_wysiwyg')) {
                    echo get_field('cpt_news_wysiwyg');
                }
                ?>

            </div>

        </div>

        <?php if (have_rows('cpt_news_grey_box')) : ?>

            <aside class="intro-aside">

                <?php while (have_rows('cpt_news_grey_box')) : the_row(); ?>

                    <div class="fomo-grey-box">

                        <?php if (get_sub_field('flex_intro_grey_box_heading')) : ?>

                            <h3 class="fomo-grey-box-heading"><?php the_sub_field('cpt_news_grey_box_heading'); ?></h3>

                        <?php endif; ?>

                        <?php if (get_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt')) : ?>

                            <div class="wysiwyg-container fomo-grey-box-text">

                                <?php echo get_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt'); ?>

                            </div>

                            <?php if (have_rows('cpt_news_grey_box_files')) : ?>

                                <div class="fomo-grey-box-link-container">

                                    <?php while (have_rows('cpt_news_grey_box_files')) : the_row(); ?>

                                        <?php if (get_sub_field('cpt_news_grey_box_file_name')) : ?>

                                            <?php
                                            if (get_sub_field('flex_intrflex_intro_grey_box_btn_link')) :
                                                $conditions = get_sub_field('flex_intrflex_intro_grey_box_btn_link');
                                                $conditions_title = $conditions['title'];
                                                $conditions_url = $conditions['url'];
                                                $conditions_target = $conditions['target'];

                                            ?>

                                                <div class="btn-container">
                                                    <a href="<?php echo $conditions_url; ?>" target="<?php echo $conditions_target; ?>" class="btn small bg-white c-black-blue icon-after icon-before document-purple icon-bg-coral arrow-down-purple animate-down"><?php echo $conditions_title; ?></a>
                                                </div>

                                            <?php elseif (get_sub_field('cpt_news_grey_box_file_')) : ?>

                                                <div class="btn-container">
                                                    <a href="<?php echo get_sub_field('cpt_news_grey_box_file_'); ?>" class="btn small bg-white c-black-blue icon-after icon-before document-purple icon-bg-coral arrow-down-purple animate-down" download=""><?php echo get_sub_field('cpt_news_grey_box_file_name'); ?></a>
                                                </div>

                                            <?php endif; ?>

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

    <?php endwhile; // the loop 
    ?>

<?php endif; // the loop 
?>

<?php get_footer(); ?>