<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php
$post_amount = get_sub_field('flex_latest_news_amount');

$news_sticky_args = [
    'post_type' => 'fomo_news',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'news_sticky',
            'field' => 'slug',
            'terms' => 'sticky',
        )
    )
];
$news_sticky_query = new WP_Query($news_sticky_args);

$post_amount -= $news_sticky_query->found_posts;
?>

<?php
$query_arguments = [
    'post_type' => 'fomo_news',
    'posts_per_page' => $post_amount,
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'news_sticky',
            'field' => 'slug',
            'terms' => 'sticky',
            'operator'  => 'NOT IN'
        )
    )
];

$theQ = new WP_Query($query_arguments);

?>
<section class="flex-mod flex-mod-latest-news flex-mod-outer" id="section-latest-news">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="latest-news-text">
            <div class="latest-news-heading">

                <?php ew_print_field(true, false, '<h3 class="latest-news-heading-h3">', '</h3>', 'flex_latest_news_heading'); ?>

            </div>

            <div class="latest-news-subheading">

                <?php ew_print_field(true, false, '<h4 class="latest-news-subheading-h4">', '</h4>', 'flex_latest_news_p'); ?>

                <?php if (get_sub_field('flex_latest_news_btn_p')) : ?>

                    <div class="btn-container">
                        <a href="<?php the_sub_field('flex_latest_news_btn_url'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right"><?php echo get_sub_field('flex_latest_news_btn_p'); ?></a>
                    </div>

                <?php endif; ?>

            </div>
        </div>

        <div class="flex-latest-news-post-list">

        <?php // STICKY NEWS ?>

        <?php if ($news_sticky_query->have_posts()) : ?>
            
                <?php while ($news_sticky_query->have_posts()) : $news_sticky_query->the_post(); ?>

                    <div class="flex-latest-news-post-item post-is-closed">

                        <?php
                        if (has_post_thumbnail()) {
                            echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load latest-news-thumbnail"]);
                        }
                        ?>

                        <h3 class="latest-news-item-heading"><?php the_title(); ?></h3>

                        <div class="post-item-date-wrapper">
                            <time datetime="<?php echo get_the_date("Y-m-j"); ?>"><?php echo get_the_date("j/n/Y"); ?></time>
                        </div>

                        <div class="post-item-btn-wrapper">
                            <a href="#" class="btn btn-ghost-plus">Læs mere</a>
                        </div>

                    </div><!--/.flex-latest-news-post-item-->

                    <div class="flex-latest-news-post-content post-content-hidden">
                        
                        <div class="flex-latest-news-post-content-primary">
                            <?php the_field('cpt_news_wysiwyg') ?>
                        </div>

                        <div class="flex-latest-news-post-content-secondary">

                            <?php if (have_rows('cpt_news_grey_box')) : ?>

                                <div class="fomo-grey-box-container">

                                    <?php while (have_rows('cpt_news_grey_box')) : the_row(); ?>

                                        <div class="fomo-grey-box">

                                            <?php if (get_sub_field('cpt_news_grey_box_heading')) : ?>

                                                <h3 class="fomo-grey-box-heading"><?php the_sub_field('cpt_news_grey_box_heading'); ?></h3>

                                            <?php endif; ?>

                                            <?php if (get_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt')) : ?>

                                                <div class="fomo-grey-box-text">
                                                    <?php the_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt'); ?>
                                                </div><!--/.fomo-grey-box-text-->

                                                <?php if (have_rows('cpt_news_grey_box_files')) : ?>

                                                    <div class="fomo-grey-box-link-container">

                                                        <?php while (have_rows('cpt_news_grey_box_files')) : the_row(); ?>

                                                            <div class="btn-container">
                                                                <a href="<?php echo get_sub_field('cpt_news_grey_box_file_'); ?>" class="btn small bg-white c-black-blue icon-after icon-before document-purple icon-bg-coral arrow-down-purple animate-down" download=""><?php echo get_sub_field('cpt_news_grey_box_file_name'); ?></a>
                                                            </div>

                                                        <?php endwhile; ?>

                                                    </div><!--/.fomo-grey-box-link-container-->

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        </div><!--/.fomo-grey-box-->

                                    <?php endwhile; ?>

                                </div><!--/.fomo-grey-box-container-->

                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
            
        <?php // REGULAR NEWS ?>

        <?php if ($theQ->have_posts()) : ?>

            

                <?php while ($theQ->have_posts()) : $theQ->the_post(); ?>

                    <div class="flex-latest-news-post-item post-is-closed">

                        <?php
                        if (has_post_thumbnail()) {
                            echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load latest-news-thumbnail"]);
                        }
                        ?>

                        <h3 class="latest-news-item-heading"><?php the_title(); ?></h3>

                        <div class="post-item-date-wrapper">
                            <time datetime="<?php echo get_the_date("Y-m-j"); ?>"><?php echo get_the_date("j/n/Y"); ?></time>
                        </div>

                        <div class="post-item-btn-wrapper">
                            <a href="#" class="btn btn-ghost-plus">Læs mere</a>
                        </div>

                    </div><!--/.flex-latest-news-post-item-->

                    <div class="flex-latest-news-post-content post-content-hidden">
                        
                        <div class="flex-latest-news-post-content-primary">
                            <?php the_field('cpt_news_wysiwyg') ?>
                        </div>

                        <div class="flex-latest-news-post-content-secondary">

                            <?php if (have_rows('cpt_news_grey_box')) : ?>

                                <div class="fomo-grey-box-container">

                                    <?php while (have_rows('cpt_news_grey_box')) : the_row(); ?>

                                        <div class="fomo-grey-box">

                                            <?php if (get_sub_field('cpt_news_grey_box_heading')) : ?>

                                                <h3 class="fomo-grey-box-heading"><?php the_sub_field('cpt_news_grey_box_heading'); ?></h3>

                                            <?php endif; ?>

                                            <?php if (get_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt')) : ?>

                                                <div class="fomo-grey-box-text">
                                                    <?php the_sub_field('tekst_i_gra_bokscpt_news_grey_box_txt'); ?>
                                                </div><!--/.fomo-grey-box-text-->

                                                <?php if (have_rows('cpt_news_grey_box_files')) : ?>

                                                    <div class="fomo-grey-box-link-container">

                                                        <?php while (have_rows('cpt_news_grey_box_files')) : the_row(); ?>

                                                            <div class="btn-container">
                                                                <a href="<?php echo get_sub_field('cpt_news_grey_box_file_'); ?>" class="btn small bg-white c-black-blue icon-after icon-before document-purple icon-bg-coral arrow-down-purple animate-down" download=""><?php echo get_sub_field('cpt_news_grey_box_file_name'); ?></a>
                                                            </div>

                                                        <?php endwhile; ?>

                                                    </div><!--/.fomo-grey-box-link-container-->

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        </div><!--/.fomo-grey-box-->

                                    <?php endwhile; ?>

                                </div><!--/.fomo-grey-box-container-->

                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!--/.flex-latest-news-post-list-->

    </div>
</section>