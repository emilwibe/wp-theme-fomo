<?php if (!defined('ABSPATH')) {
    exit;
} ?> 

<section class="flex-mod flex-mod-stacking-cards flex-mod-outer">


            <div class="video-wrapper stacking-card-video">

                <?php
                $video_meta = wp_get_attachment_metadata(get_sub_field('flex_stacking_cards_video'));
                $video_length = $video_meta['length_formatted'];
                ?>

                <video src="<?php echo wp_get_attachment_url(get_sub_field('flex_stacking_cards_video')); ?>" class="paused" poster="<?php the_sub_field('flex_video_thumbnail'); ?>">
                    <source src="<?php echo wp_get_attachment_url(get_sub_field('flex_stacking_cards_video')); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="video-btn-container-play">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/play_btn_white.svg" alt="Video button play" class="flex-video-mod-play-btn">
                </div>

                <div class="hover-layer">

                    <div class="video-btn-container-paused">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/btn_white_pause.svg" alt="Video button pause" class="flex-video-mod-pause-btn">
                    </div>

                    <div class="flex-video-text-container">
                        <?php ew_print_field(true, false, '<h6 class="flex-video-title">', '</h6>', 'flex_video_title'); ?>
                        <?php ew_print_field(true, false, '<h6 class="flex-video-subtitle">', '</h6>', 'flex_video_subtitle'); ?>
                    </div>

                    <progress class="video-progress" value="0" max="100"></progress>

                    <div class="img-gradient"></div>

                </div><!--/.hover-layer-->

                <span class="video-time"><?php echo $video_meta["length_formatted"]; ?></span>

            </div><!--/.video-wrapper-->

            <?php if (have_rows('flex_stacking_cards_repeater')) : ?>
                <?php while (have_rows('flex_stacking_cards_repeater')) : the_row(); ?>

                    <div class="stacking-card">
                        <?php ew_print_field(true, false, '<h2 class="stacking-card-heading">', '</h2>', 'flex_stacking_cards_repeater_heading'); ?>

                        <div class="stacking-card-text-container">
                            <div class="stacking-card-text-left">
                                <?php ew_print_field(true, false, '<h5 class="stacking-card-text-heading">', '</h5>', 'flex_stacking_cards_repeater_heading_left'); ?>

                                <?php ew_print_field(true, false, '<h4 class="stacking-card-text-sub-heading">', '</h4>', 'flex_stacking_cards_repeater_txt_left'); ?>
                            </div>

                            <div class="stacking-card-text-right">
                                <?php ew_print_field(true, false, '<h5 class="stacking-card-text-heading">', '</h5>', 'flex_stacking_cards_repeater_heading_right'); ?>

                                <?php ew_print_field(true, false, '<h4 class="stacking-card-text-sub-heading">', '</h4>', 'flex_stacking_cards_repeater_txt_right'); ?>
                            </div>
                        </div><!--/.stacking-card-text-container-->
                    </div><!--/.stacking-card-->

                <?php endwhile; ?>
            <?php endif; ?>
            
</section>