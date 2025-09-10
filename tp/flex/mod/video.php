<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-video flex-mod-outer">
    <div class="l-wrapper s flex-mod-inner">
        <div class="video-wrapper">

        <?php
        $video_meta = wp_get_attachment_metadata(get_sub_field('flex_video_file'));
        //var_dump($video_meta);
        $video_length = $video_meta['length_formatted'];
        ?>

        <video src="<?php echo wp_get_attachment_url(get_sub_field('flex_video_file')); ?>" class="paused" poster="<?php the_sub_field('flex_video_thumbnail'); ?>">
            <source src="movie.mp4" type="video/mp4">
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
    </div>
</section>