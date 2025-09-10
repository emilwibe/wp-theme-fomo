<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<section class="flex-mod flex-mod-team flex-mod-outer" id="section-team">
    <div class="l-wrapper xl flex-mod-inner">

        <?php if (get_sub_field('flex_team_heading') || get_sub_field('flex_team_sub_heading')) : ?>

            <div class="team-text-container">

                <?php ew_print_field(true, false, '<h2 class="team-heading">', '</h2>', 'flex_team_heading'); ?>

                <?php ew_print_field(true, false, '<h4 class="team-sub-heading">', '</h4>', 'flex_team_sub_heading'); ?>

            </div>

        <?php endif; ?>

        <?php if (have_rows('flex_team_repeater')) : ?>

            <div class="team-repeater-container" data-persons-visible="1">

                <?php while (have_rows('flex_team_repeater')) : the_row(); ?>
                    <?php
                    $team_member = get_sub_field('flex_team_repeater_person');
                    ?>

                    <article class="flex-mod-team-member">

                        <?php
                        $imgID = get_field('cpt_person_profile_img', $team_member->ID);
                        echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                        ?>

                        <h4 class="team-member-title"><?php echo get_the_title($team_member->ID); ?></h4>
                        <p class="team-member-position"><?php echo get_field('cpt_person_title', $team_member->ID); ?></p>

                        <div class="team-member-contact-container">

                            <a href="mailto:<?php echo get_field('cpt_person_email', $team_member->ID); ?>" class="team-member-contact-mail"><?php echo get_field('cpt_person_email', $team_member->ID); ?></a>
                            <a href="tel:<?php echo get_field('cpt_person_phone', $team_member->ID); ?>" class="team-member-contact-phone"><?php echo get_field('cpt_person_phone', $team_member->ID); ?></a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div><!--/.team-repeater-container-->

            <div class="btn-container btn-center read-more-container">
                <a href="#" class="btn bg-white c-black-blue border-grey" id="person-read-more">Indlæs flere medarbejdere</a>
            </div>

        <?php endif; // REPEATER 
        ?>

        <?php if (have_rows('flex_team_board_repeater')) : ?>

            <div id="board-container" style="display: none;">

                <div class="team-text-container">

                    <h2 class="team-heading">Bestyrelsen</h2>

                </div><!--/.team-text-container-->

                <div class="team-repeater-container">

                    <?php while (have_rows('flex_team_board_repeater')) : the_row(); ?>

                        <?php
                        $team_member = get_sub_field('flex_team_repeater_person');
                        ?>

                        <article class="flex-mod-team-member">

                            <?php
                            $imgID = get_field('cpt_person_profile_img', $team_member->ID);
                            echo wp_get_attachment_image($imgID, 'full', false, ['class' => 'fade-on-load', 'onload' => 'loadImageonLoad(this)']);
                            ?>

                            <h4 class="team-member-title"><?php echo get_the_title($team_member->ID); ?></h4>
                            <p class="team-member-position"><?php echo get_field('cpt_person_title', $team_member->ID); ?></p>

                            <div class="team-member-contact-container">

                                <a href="mailto:<?php echo get_field('cpt_person_email', $team_member->ID); ?>" class="team-member-contact-mail"><?php echo get_field('cpt_person_email', $team_member->ID); ?></a>
                                <a href="tel:<?php echo get_field('cpt_person_phone', $team_member->ID); ?>" class="team-member-contact-phone"><?php echo get_field('cpt_person_phone', $team_member->ID); ?></a>

                            </div>

                        </article>

                    <?php endwhile; // BOARD 
                    ?>

                </div>

            </div><!--/.board-container-->

        <?php endif; // BOARD 
        ?>

    </div>

</section>