<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php

$emp_args = [
    'post_type'         =>  'ew_person',
    'orderby'           =>  'name',
    'posts_per_page'    => -1,
    'tax_query'         => array(
        array(
            'taxonomy'  =>  'emp_job_function',
            'field'     =>  'slug',
            'terms'     =>  'assurandoer'
        )
    )
];

$emp_query = new WP_Query($emp_args);

?>
<section class="flex-mod flex-mod-emp-map flex-mod-outer">
    <div class="l-wrapper xl flex-mod-inner">

        <div class="emp-map-head">
            <div class="emp-map-heading">
                <h3>Du kan også kontakte vores assurandører direkte</h3>

                <p class="emp-count">Viser <span class="emp-count-visible"></span> af <span><?php echo $emp_query->found_posts; ?></span> aktive rådgivere</p>
            </div>

        </div>

        <div class="emp-map-content-outer">
            <div class="emp-map-content-map">

                <?php get_template_part('tp/global/fyn-map'); ?>

                <input type="number" placeholder="Indtast dit post nr." class="emp-search-by-postal" max="9999">

            </div>

            <div class="emp-map-content-emp">
                <div class="white-gradient"></div>

                <div class="emp-map-content-emp-inner">

                    <?php if ($emp_query->have_posts()) : ?>

                        <ul class="emp-map-list">

                            <?php while ($emp_query->have_posts()) : $emp_query->the_post(); ?>
                                <?php
                                $emp_postals = get_field('cpt_person_postal_codes');
                                $emp_postals_format = "";
                                if (!empty($emp_postals)) {
                                    foreach ($emp_postals as $postal) {
                                        $emp_postals_format .= $postal["cpt_person_postal_code_r"] . ", ";
                                    }
                                }
                                ?>


                                <li class="emp-list-item" data-postalCode="<?php echo $emp_postals_format; ?>">
                                    <div class="emp-img">
                                        <?php
                                        $imgID = get_field('cpt_person_profile_img');
                                        echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                                        ?>

                                        <div class="btn-overlay">
                                            <span>Læs mere</span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ui/icons/circle_plus_small.svg" alt="Icon" class="icon-circle-plus-small">
                                        </div>
                                    </div>

                                    <div class="emp-text">
                                        <div class="emp-text-inner">
                                            <h4 class="emp-title"><?php the_title(); ?></h4>
                                            <p class="emp-rank"><?php echo get_field('cpt_person_title'); ?></p>

                                            <div class="emp-contact">
                                                <?php if (get_field('cpt_person_email')) : ?>

                                                    <p class="emp-contact-mail"><a href="mailto:<?php echo get_field('cpt_person_email'); ?>"><?php echo get_field('cpt_person_email'); ?></a></p>

                                                <?php endif; ?>

                                                <?php if (get_field('cpt_person_phone')) : ?>

                                                    <p class="emp-contact-phone"><a href="tel:<?php echo get_field('cpt_person_phone'); ?>"><?php echo get_field('cpt_person_phone'); ?></a></p>

                                                <?php endif; ?>

                                            </div>
                                        </div><!--/.emp-text-inner-->
                                    </div><!--/.emp-text-->

                                    <div class="global-modal">
                                        <div class="global-modal-inner">

                                        
                                        <button class="close-modal">Luk vinduet</button>

                                        <div class="emp-modal-upper">

                                            <div class="emp-modal-text">
                                                <h2 class="emp-modal-heading"><?php echo get_field('cpt_person_presentation_heading'); ?></h2>

                                                <div class="emp-modal-wys wysiwyg-container">
                                                    <?php echo get_field('cpt_person_wysiwyg'); ?>
                                                </div>

                                                <div class="emp-modal-contact-container">
                                                    <h4 class="emp-modal-contact-container-heading"><?php the_title(); ?></h4>
                                                    <p class="emp-modal-rank"><?php echo get_field('cpt_person_title'); ?></p>

                                                    <div class="emp-modal-container-mail-phone">

                                                        <?php if (get_field('cpt_person_email')) : ?>

                                                            <p class="emp-modal-contact-mail"><a href="mailto:<?php echo get_field('cpt_person_email'); ?>"><?php echo get_field('cpt_person_email'); ?></a></p>

                                                        <?php endif; ?>

                                                        <?php if (get_field('cpt_person_phone')) : ?>

                                                            <p class="emp-modal-contact-phone"><a href="tel:<?php echo get_field('cpt_person_phone'); ?>"><?php echo get_field('cpt_person_phone'); ?></a></p>

                                                        <?php endif; ?>

                                                        </div>

                                                </div>
                                            </div><!--/.emp-modal-text-->

                                            <div class="emp-modal-img">

                                                <?php
                                                $imgID = get_field('cpt_person_profile_img');
                                                echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                                                ?>

                                            </div><!--/.emp-modal-img-->



                                        </div><!--/.emp-modal-upper-->
                                        </div><!--/.global-modal-inner-->
                                    </div>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>