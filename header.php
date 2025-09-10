<?php if (!defined('ABSPATH')) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadImageonLoad ( target ) {
            target.style.animationPlayState = "running";
        }
        var wp_site_url = "<?php echo get_site_url(); ?>";
    </script>

    <!-- Playable script --> <script src="https://app.playable.com/campaign/sdk/utilities.responsive_iframe.min.js"></script>
    <!-- TrustBox script --> <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> <!-- End TrustBox script -->


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php if ( !is_front_page() ) : ?>

        <?php get_template_part( 'tp/header/header-content' ); ?>

    <?php endif; // IF FRONT PAGE ?>