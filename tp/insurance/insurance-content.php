<?php if (!defined('ABSPATH')) { exit; } ?>
<?php
    $ew_parent = get_post_parent();
    $ew_post_parent_ID = $ew_parent->ID;
?>

<section class="l-wrapper xl insurance">
    <div class="insurance-inner">
        <div class="link-back-2-insurance-parent-container">
            <a href="<?php echo get_the_permalink($ew_post_parent_ID); ?>" class="link-back-2-insurance-parent">Til oversigten</a>
        </div>
    </div>
</section>