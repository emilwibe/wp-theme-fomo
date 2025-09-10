<section class="flex-mod flex-mod-tabs flex-mod-outer" id="section-tabs">

    <?php if( get_sub_field( 'flex_tabs_heading' ) || get_sub_field( 'tabs_grid_p' ) ) : ?>

        <div class="tabs-text-container">

            <?php ew_print_field( true, false, '<h2 class="tabs-heading">', '</h2>', 'flex_tabs_heading'); ?>

            <?php ew_print_field(true, false, '<p class="flex-tabs-sub-heading">', '</p>', 'flex_tabs_sub_heading'); ?>
        </div>

    <?php endif; ?>

    <div class="l-wrapper xl l-grid-global">
        <div class="flex-tabs-img">
            <?php
            if ( get_sub_field( 'flex_tabs_img' ) ) {
                $img_ID = get_sub_field( 'flex_tabs_img' );
                echo wp_get_attachment_image( $img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load"] );
            }
            ?>
        </div>
        <div class="flex-tabs-accordion">

            <?php if ( have_rows( 'flex_tabs_repeater' ) ) : ?>

                <div class="tabs-accordion">

                    <?php while( have_rows( 'flex_tabs_repeater' ) ) : the_row(); ?>

                        <div class="tabs-accordion-item">
                            <h2 class="accordion-trigger is-closed"><?php echo get_sub_field( 'flex_tabs_repeater_heading' ); ?></h2>
                            <h4 class="accordion-p">
                                <?php echo get_sub_field( 'flex_tabs_repeater_content' ); ?>
                            </h4>
                        </div>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

        </div>
    </div>
</section>