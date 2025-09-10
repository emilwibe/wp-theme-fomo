<?php if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="flex-mod flex-mod-faq flex-mod-outer faq-bg-<?php echo $faq_bg[0]; ?>">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="faq-heading-text-container">

            <?php ew_print_field(true, false, '<h2 class="faq-heading">', '</h2>', 'flex_faq_heading'); ?>

            <?php ew_print_field(true, false, '<h4 class="faq-sub-heading">', '</h4>', 'flex_faq_sub_heading'); ?>

        </div>

        <?php
        if (have_rows('flex_faq_repeater')) {
            $faq_counter = 0;
            $faq_sorter = [[], []];
            while (have_rows('flex_faq_repeater')) {
                the_row();

                if ($faq_counter % 2) {
                    array_push($faq_sorter[0], [
                        get_sub_field('flex_faq_repeater_heading'),
                        get_sub_field('flex_faq_repeater_txt'),
                        get_sub_field('flex_faq_repeater_btn_url'),
                        get_sub_field('flex_faq_repeater_btn_txt')
                    ]);
                    $faq_counter++;
                } else {
                    array_push($faq_sorter[1], [
                        get_sub_field('flex_faq_repeater_heading'),
                        get_sub_field('flex_faq_repeater_txt'),
                        get_sub_field('flex_faq_repeater_btn_url'),
                        get_sub_field('flex_faq_repeater_btn_txt')
                    ]);
                    $faq_counter++;
                }
            }
        }
        ?>

        <?php if (!empty($faq_sorter[0]) || !empty($faq_sorter[1])) : ?>

            <div class="faq-accordion-container">

                <div>

                    <?php foreach ($faq_sorter[0] as $data) : ?>

                        <article class="faq-item-outer">
                            <div class="faq-item">
                                <h5 class="faq-item-heading"><?php echo $data[0]; ?></h5>
                            </div>

                            <div class="faq-item-content">

                                <div class="wysiwyg-container">
                                    
                                <?php echo $data[1]; ?>

                                </div><!--/.wysiwyg-container-->

                                <?php if (!empty($data[2]) && !empty($data[3])) : ?>

                                    <div class="btn-container">
                                        <a class="btn-rounded" href="<?php echo $data[2]; ?>"><?php echo $data[3]; ?></a>
                                    </div>

                                <?php endif; ?>

                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>
                <div>
                    <?php foreach ($faq_sorter[1] as $data) : ?>

                        <article class="faq-item-outer">
                            <div class="faq-item">
                                <h5 class="faq-item-heading"><?php echo $data[0]; ?></h5>
                            </div>

                            <div class="faq-item-content">

                                <div class="wysiwyg-container">
                                    
                                <?php echo $data[1]; ?>

                                </div><!--/.wysiwyg-container-->

                                <?php if (!empty($data[2]) && !empty($data[3])) : ?>

                                    <div class="btn-container">
                                        <a class="btn-rounded" href="<?php echo $data[2]; ?>"><?php echo $data[3]; ?></a>
                                    </div>

                                <?php endif; ?>

                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>

            </div><!--/.faq-accordion-container-->

        <?php endif; ?>

    </div>
</section>