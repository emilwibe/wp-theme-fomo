<?php if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="flex-mod flex-mod-table flex-mod-outer faq-bg-<?php echo $faq_bg[0]; ?>">
    <div class="l-wrapper xl flex-mod-inner">


        <?php if (get_sub_field('flex_table_heading') || get_sub_field('flex_table_sub_heading')) : ?>

            <div class="flex-table-text">

                <?php ew_print_field(true, false, '<h2 class="flex-table-heading">', '</h2>', 'flex_table_heading'); ?>

                <?php ew_print_field(true, false, '<p class="flex-table-sub-heading">', '</p>', 'flex_table_sub_heading'); ?>

            </div>

        <?php endif; ?>

        <div class="flex-table-switch">

            <div class="flex-table-switch-btn flex-table-switch-btn-1 is-marked"><?php the_sub_field('flex_table_btn_switch_1'); ?></div>

            <?php if(get_sub_field('flex_table_btn_switch_2')) : ?>

            <div class="flex-table-switch-btn flex-table-switch-btn-2"><?php the_sub_field('flex_table_btn_switch_2'); ?></div>

            <?php endif; ?>

        </div>

        <div class="flex-table-one">

            <?php if (have_rows('flex_table_flex')) : ?>
                <?php while (have_rows('flex_table_flex')) : the_row(); ?>

                    <?php if (get_row_layout() == 'flex_table_flex_3_col_headings') : ?>

                        <div class="table-row table-headings table-headings-3-col l-table-grid">

                            <h3 class="table-primary-heading"><?php the_sub_field('flex_table_flex_tab_1_th_1'); ?></h3>
                            <h5 class="table-col-heading-1"><?php the_sub_field('flex_table_flex_tab_1_th_2'); ?></h5>
                            <h5 class="table-col-heading-2"><?php the_sub_field('flex_table_flex_tab_1_th_3'); ?></h5>
                            <h5 class="table-col-heading-3"><?php the_sub_field('flex_table_flex_tab_1_th_4'); ?></h5>
                        </div><!--/.table-row-->

                    <?php elseif (get_row_layout() == 'flex_table_flex_4_col_headings') : ?>

                        <div class="table-row table-headings table-headings-4-col l-table-grid">

                            <h4 class="table-primary-heading"><?php the_sub_field('flex_table_flex_tab_1_th_1'); ?></h4>
                            <h5 class="table-col-heading-1"><?php the_sub_field('flex_table_flex_tab_1_th_2'); ?></h5>
                            <h5 class="table-col-heading-2"><?php the_sub_field('flex_table_flex_tab_1_th_3'); ?></h5>
                            <h5 class="table-col-heading-3"><?php the_sub_field('flex_table_flex_tab_1_th_4'); ?></h5>
                            <h5 class="table-col-heading-4"><?php the_sub_field('flex_table_flex_tab_1_th_5'); ?></h5>
                        </div><!--/.table-row-->
                    <?php elseif (get_row_layout() == 'flex_table_flex_4_col') : ?>

                        <?php
                        $row_color = get_sub_field('flex_table_flex_color');
                        ?>

                        <div class="table-row table-row-4-cols l-table-grid row-color-<?php echo $row_color[0]; ?>">
                            <div class="table-cell trigger"><?php the_sub_field('flex_table_flex_heading'); ?></div>

                            <?php if (get_sub_field('flex_table_flex_check_1') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>
                            <?php if (get_sub_field('flex_table_flex_check_2') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>
                            <?php if (get_sub_field('flex_table_flex_check_3') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>
                            <?php if (get_sub_field('flex_table_flex_check_4') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>

                        </div><!--/.table-row-->

                        <div class="table-row table-row-wysiwyg l-table-grid">

                            <div class="table-wysiwyg wysiwyg-container">

                                <?php the_sub_field('flex_table_flex_wysiwyg'); ?>

                            </div>

                        </div><!--/.table-row-->

                    <?php elseif (get_row_layout() == 'flex_table_flex_3_col') : ?>
                        <?php
                        $row_color = get_sub_field('flex_table_flex_color');
                        ?>

                        <div class="table-row table-row-3-cols l-table-grid row-color-<?php echo $row_color[0]; ?>">
                            <div class="table-cell trigger"><?php the_sub_field('flex_table_flex_heading'); ?></div>

                            <?php if (get_sub_field('flex_table_flex_check_1') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>
                            <?php if (get_sub_field('flex_table_flex_check_2') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>
                            <?php if (get_sub_field('flex_table_flex_check_3') == true) : ?>

                                <div class="table-cell checked"></div>

                            <?php else : ?>

                                <div class="table-cell unchecked"></div>

                            <?php endif; ?>

                        </div><!--/.table-row-->

                        <div class="table-row table-row-wysiwyg l-table-grid">

                            <div class="table-wysiwyg wysiwyg-container">

                                <?php the_sub_field('flex_table_flex_wysiwyg'); ?>

                            </div>

                        </div><!--/.table-row-->

                    <?php elseif (get_row_layout() == 'flex_table_flex_heading') : ?>

                        <?php
                        $row_color = get_sub_field('flex_table_flex_heading_color'); ?>

                        <div class="table-row table-flex-heading row-color-<?php echo $row_color[0]; ?>">

                            <h3 class="table-row-heading"><?php the_sub_field('flex_table_flex_heading_heading'); ?> <span><?php the_sub_field('flex_table_flex_heading_sub_heading'); ?></span></h3>

                        </div><!--/.table-row-->

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

            <div class="table-row table-row-ending">

                <div class="table-socket-left">
                    Forsikringen tilbydes I samarbejde med Gjensidige
                </div>

                <div class="table-socket-right">
                    <p>Vi hjælper dig gerne i gang med dine forsikringer</p>
                    <div class="btn-container"><a href="<?php the_sub_field('flex_table_contact_link'); ?>" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right">Kontakt os for pris</a></div>
                </div>

            </div><!--/.table-row-ending-->

        </div><!--/.flex-table-one-->

        <?php if (get_sub_field('flex_table_btn_switch_2')) : ?>

            <div class="flex-table-two">
                <?php if (have_rows('flex_table_flex_2')) : ?>
                    <?php while (have_rows('flex_table_flex_2')) : the_row(); ?>

                        <?php if (get_row_layout() == 'flex_table_flex_3_col_headings') : ?>

                            <div class="table-row table-headings table-headings-3-col l-table-grid">

                                <h4 class="table-primary-heading"><?php the_sub_field('flex_table_flex_tab_1_th_1'); ?></h4>
                                <h5 class="table-col-heading-1"><?php the_sub_field('flex_table_flex_tab_1_th_2'); ?></h5>
                                <h5 class="table-col-heading-2"><?php the_sub_field('flex_table_flex_tab_1_th_3'); ?></h5>
                                <h5 class="table-col-heading-3"><?php the_sub_field('flex_table_flex_tab_1_th_4'); ?></h5>
                            </div><!--/.table-row-->

                        <?php elseif (get_row_layout() == 'flex_table_flex_4_col_headings') : ?>

                            <div class="table-row table-headings table-headings-4-col l-table-grid">

                                <h4 class="table-primary-heading"><?php the_sub_field('flex_table_flex_tab_1_th_1'); ?></h4>
                                <h5 class="table-col-heading-1"><?php the_sub_field('flex_table_flex_tab_1_th_2'); ?></h5>
                                <h5 class="table-col-heading-2"><?php the_sub_field('flex_table_flex_tab_1_th_3'); ?></h5>
                                <h5 class="table-col-heading-3"><?php the_sub_field('flex_table_flex_tab_1_th_4'); ?></h5>
                                <h5 class="table-col-heading-4"><?php the_sub_field('flex_table_flex_tab_1_th_5'); ?></h5>
                            </div><!--/.table-row-->
                        <?php elseif (get_row_layout() == 'flex_table_flex_4_col') : ?>

                            <?php
                            $row_color = get_sub_field('flex_table_flex_color');
                            ?>

                            <div class="table-row table-row-4-cols l-table-grid row-color-<?php echo $row_color[0]; ?>">
                                <div class="table-cell trigger"><?php the_sub_field('flex_table_flex_heading'); ?></div>

                                <?php if (get_sub_field('flex_table_flex_check_1') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>
                                <?php if (get_sub_field('flex_table_flex_check_2') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>
                                <?php if (get_sub_field('flex_table_flex_check_3') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>
                                <?php if (get_sub_field('flex_table_flex_check_4') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>

                            </div><!--/.table-row-->

                            <div class="table-row table-row-wysiwyg l-table-grid">

                                <div class="table-wysiwyg wysiwyg-container">

                                    <?php the_sub_field('flex_table_flex_wysiwyg'); ?>

                                </div>

                            </div><!--/.table-row-->

                        <?php elseif (get_row_layout() == 'flex_table_flex_3_col') : ?>
                            <?php
                            $row_color = get_sub_field('flex_table_flex_color');
                            ?>

                            <div class="table-row table-row-3-cols l-table-grid row-color-<?php echo $row_color[0]; ?>">
                                <div class="table-cell trigger"><?php the_sub_field('flex_table_flex_heading'); ?></div>

                                <?php if (get_sub_field('flex_table_flex_check_1') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>
                                <?php if (get_sub_field('flex_table_flex_check_2') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>
                                <?php if (get_sub_field('flex_table_flex_check_3') == true) : ?>

                                    <div class="table-cell checked"></div>

                                <?php else : ?>

                                    <div class="table-cell unchecked"></div>

                                <?php endif; ?>

                            </div><!--/.table-row-->

                            <div class="table-row table-row-wysiwyg l-table-grid">

                                <div class="table-wysiwyg wysiwyg-container">

                                    <?php the_sub_field('flex_table_flex_wysiwyg'); ?>

                                </div>

                            </div><!--/.table-row-->

                        <?php elseif (get_row_layout() == 'flex_table_flex_heading') : ?>

                            <?php
                            $row_color = get_sub_field('flex_table_flex_heading_color'); ?>

                            <div class="table-row table-flex-heading row-color-<?php echo $row_color[0]; ?>">

                                <h3 class="table-row-heading"><?php the_sub_field('flex_table_flex_heading_heading'); ?> <span><?php the_sub_field('flex_table_flex_heading_sub_heading'); ?></span></h3>

                            </div><!--/.table-row-->

                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="table-row table-row-ending">

                    <div class="table-socket-left">
                        Forsikringen tilbydes I samarbejde med Gjensidige
                    </div>

                    <div class="table-socket-right">
                        <p>Vi hjælper dig gerne i gang med dine forsikringer</p>
                        <div class="btn-container btn-container-rose"><a href="<?php the_sub_field('flex_table_contact_link'); ?>" class="btn-rose">Kontakt os for pris <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/arrow_right_coral.svg" alt="Icon" class="btn-arrow"></a></div>
                    </div>

                </div><!--/.table-row-ending-->

            </div><!--/.flex-table-two-->

        <?php endif; ?>

    </div>
</section>