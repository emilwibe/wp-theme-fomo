<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<header class="header-primary">

    <?php if (is_front_page() && get_field('fomo_notification_txt', 'option')) : ?>

        <div class="l-wrapper xl notification-bar <?php the_field('fomo_notification_color', 'option'); ?>">

            <p><?php echo get_field('fomo_notification_txt', 'option'); ?></p>

            <?php if(get_field('fomo_notification_banner_link_txt', 'option') && get_field('fomo_notification_banner_link', 'option')) : ?>

                <div class="btn-container"><a href="<?php the_field('fomo_notification_banner_link', 'option'); ?>" class="btn font-tiny c-black-blue icon-after arrow-right-coral animate-right"><?php the_field('fomo_notification_banner_link_txt', 'option'); ?></a></div>

            <?php endif; ?>

            <button class="dismiss-button" id="dismiss-notification"></button>

        </div><!--/.notification-->

    <?php endif; ?>

    <div class="l-wrapper xl default-header">

        <p class="header-socket header-socket-left">

            <span class="desktop-view"><?php echo get_field('header-socket-left', 'option'); ?></span>

            <span class="mobile-view"><?php echo get_field('header-socket-left-mobile', 'option'); ?></span>
        </p>

        <a href="<?php echo get_site_url(); ?>" class="logo-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/graphic/logo-horizontal.svg" alt="FOMO Logo">
        </a>

        <p class="header-socket-right">
            <a href="<?php echo get_field('header-socket-right-URL', 'option'); ?>" class="header-socket" target="_blank"><?php echo get_field('header-socket-right', 'option'); ?></a>
        </p>

    </div><!--/.l-wrapper-->
</header>