<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-benefits flex-mod-outer" id="section-benefits">
    <div class="l-wrapper xl flex-mod-inner">
        <div class="flex-mod-benefits-head">
            <div class="benefits-text">

                <?php ew_print_field(true, false, '<h2 class="benefits-heading">', '</h2>', 'flex_benefits_heading'); ?>

                <?php ew_print_field(true, false, '<h4 class="benefits-p">', '</h4>', 'flex_benefits_txt'); ?>

                <div class="trustpilot-container">

                    <?php get_template_part('tp/global/trustpilot-trustbox'); ?>

                </div><!--/.trustpilotcontainer-->

            </div>

            <div class="benefits-img">

                <?php
                $imgID = get_sub_field('flex_benefits_img');
                echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                ?>

            </div>
        </div><!--/.flex-mod-benefits-head-->

        <div class="flex-mod-benefits-acc-outer">

            <div class="flex-mod-benefits-acc-left">

                <?php ew_print_field(true, false, '<h3 class="flex-mod-benefits-acc-heading">', '</h3>', 'flex_benefits_heading_left'); ?>

                <?php if (have_rows('flex_benefits_acc_left')) : ?>

                    <div class="faq-accordion-container">

                        <?php while (have_rows('flex_benefits_acc_left')) : the_row(); ?>

                            <div>
                                <article class="faq-item-outer">
                                    <div class="faq-item">
                                        <h5 class="faq-item-heading"><?php echo get_sub_field('flex_benefits_acc_left_heading'); ?></h5>
                                    </div>

                                    <div class="faq-item-content">

                                        <p><?php the_sub_field('flex_benefits_acc_left_txt'); ?></p>

                                        <?php if (get_sub_field('flex_benefits_acc_left_url')) :

                                            $benefits_link_data = get_sub_field('flex_benefits_acc_left_url');
                                            $benefits_link_txt = $benefits_link_data["title"];
                                            $benefits_link_url = $benefits_link_data["url"];
                                            $benefits_link_target = $benefits_link_data["target"];
                                        ?>

                                            <div class="btn-container">
                                                <a class="btn-rounded" href="<?php echo $benefits_link_url; ?>" target="<?php echo $benefits_link_target; ?>"><?php echo $benefits_link_txt; ?></a>
                                            </div>

                                        <?php endif; ?>

                                    </div>
                                </article>
                            </div>

                        <?php endwhile; ?>

                    </div><!--/.faq-accordion-container-->

                <?php endif; ?>

                <div class="load-more-container">

                    <div class="btn load-more expand-left">Indlæs flere</div>

                </div><!--/.load-more-container-->

            </div><!--/.flex-mod-benefits-acc-left-->

            <div class="flex-mod-benefits-acc-right">

                <?php ew_print_field(true, false, '<h3 class="flex-mod-benefits-acc-heading">', '</h3>', 'flex_benefits_heading_right'); ?>


                <?php if (have_rows('flex_benefits_acc_right')) : ?>

                    <div class="faq-accordion-container">

                        <?php while (have_rows('flex_benefits_acc_right')) : the_row(); ?>

                            <div>
                                <article class="faq-item-outer">
                                    <div class="faq-item">
                                        <h5 class="faq-item-heading"><?php echo get_sub_field('flex_benefits_acc_left_heading'); ?></h5>
                                    </div>

                                    <div class="faq-item-content">

                                        <p><?php the_sub_field('flex_benefits_acc_left_txt'); ?></p>

                                        <?php if (get_sub_field('flex_benefits_acc_right_url')) :

                                            $benefits_link_data = get_sub_field('flex_benefits_acc_right_url');
                                            $benefits_link_txt = $benefits_link_data["title"];
                                            $benefits_link_url = $benefits_link_data["url"];
                                            $benefits_link_target = $benefits_link_data["target"];
                                        ?>

                                            <div class="btn-container">
                                                <a class="btn-rounded" href="<?php echo $benefits_link_url; ?>" target="<?php echo $benefits_link_target; ?>"><?php echo $benefits_link_txt; ?></a>
                                            </div>

                                        <?php endif; ?>

                                    </div>
                                </article>
                            </div>

                        <?php endwhile; ?>

                    </div><!--/.faq-accordion-container-->

                    <div class="load-more-container">

                        <div class="btn load-more expand-right">Indlæs flere</div>

                    </div><!--/.load-more-container-->

                <?php endif; ?>

            </div><!--/.flex-mod-benefits-acc-right-->

        </div>
    </div>
</section>