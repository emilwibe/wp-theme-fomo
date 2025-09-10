<div class="index-card-image-grid-outer index-grid-mobile">
    <section class="l-wrapper xl index-card-image-grid">

        <?php ew_print_field(false, false, '<h2 class="index-hero-heading-2">', '</h2>', 'index_hero_heading_2'); ?>

        <div class="index-grid-container">

                <div class="card bordeaux index-grid-card-1">


                    <?php ew_print_field(false, false, '<h3 class="card-heading">', '</h3>', 'index-hero-grid-card-1-heading'); ?>

                    <?php ew_print_field(false, false, '<p class="card-text">', '</p>', 'index-hero-grid-card-1-p'); ?>


                    <?php if (get_field('index-hero-grid-card-1-p') && get_field('index-hero-grid-card-1-btn-URL')) : ?>

                        <div class="btn-container">

                            <a href="<?php echo get_field('index-hero-grid-card-1-btn-URL'); ?>" class="btn bg-white c-black-blue icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php echo get_field('index-hero-grid-card-1-btn-p'); ?></a>

                        </div>

                    <?php endif; ?>

                </div>

                <?php
                $img_ID = get_field('index-hero-card-2-img');
                echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load index-grid-card-2"]);
                ?>

                <?php
                $img_ID = get_field('index-hero-card-4-img');
                echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load index-grid-card-4"]);
                ?>

                

                <?php


                $img_ID = get_field('index-hero-card-5-img');
                echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load index-grid-card-5"]);

                ?>

                <div class="card coral index-grid-card-3">
                    <?php ew_print_field(false, false, '<h4 class="card-heading">', '</h4>', 'index-hero-grid-card-3-heading'); ?>

                    <?php ew_print_field(false, false, '<p class="card-text">', '</p>', 'index-hero-grid-card-3-p'); ?>

                    <?php if (get_field('index-hero-grid-card-3-p') && get_field('index-hero-grid-card-3-btn-URL')) : ?>

                        <div class="btn-container">

                            <a href="<?php echo get_field('index-hero-grid-card-3-btn-URL'); ?>" class="btn bg-white c-black-blue border-grey icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php echo get_field('index-hero-grid-card-3-btn-p'); ?></a>

                        </div>

                    <?php endif; ?>
                </div>

                <?php
                $img_ID = get_field('index-hero-card-6-img');
                echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load index-grid-card-6"]);
                ?>

            <div class="card light-blue index-grid-card-7">

                <?php ew_print_field(false, false, '<h4 class="card-heading">', '</h4>', 'index-hero-grid-card-7-heading'); ?>

                <?php ew_print_field(false, false, '<p class="card-text">', '</p>', 'index-hero-grid-card-7-p'); ?>

                <?php if (get_field('index-hero-grid-card-7-p') && get_field('index-hero-grid-card-7-btn-URL')) : ?>

                    <div class="btn-container">

                        <a href="<?php echo get_field('index-hero-grid-card-7-btn-URL'); ?>" class="btn bg-white c-black-blue border-grey icon-after icon-bg-bordeaux arrow-right-white animate-right"><?php echo get_field('index-hero-grid-card-7-btn-p'); ?></a>

                    </div>

                <?php endif; ?>
            </div>

            <?php
            $img_ID = get_field('index-hero-card-8-img');
            echo wp_get_attachment_image($img_ID, 'full', false, ["onload" => "loadImageonLoad(this)", "class" => "fade-on-load index-grid-card-8"]);
            ?>

        </div>
    </section>
</div><!--/.index-card-image-grid-outer-->