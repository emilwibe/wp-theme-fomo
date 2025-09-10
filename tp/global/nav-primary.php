<?php
if (!defined('ABSPATH')) {
    exit;
}
$forsikringer_page_ID = get_field('header_insurance_link', 'option');

?>
<div class="sticky nav-global-wrapper">
    <div class="nav-global-wrapper-inner">
        <button id="global-nav-trigger">Menu</button>

        <button id="close-search">Luk søgning</button>

        <div class="fomo-search-results-mobile">

        </div><!--/.fomo-search-results-mobile-->



        <div class="nav-left">
            <div class="nav-btn-container" id="nav-btn-forsikringer">
                <a href="<?php echo $forsikringer_page_ID; ?>" class="nav-btn bg-purple c-white has-btn-secondary">Forsikringer <div class="btn-secondary bg-white icon-tick-down-black-blue animation-rotate-180" id="insurance-trigger"></div></a>

                <?php
                wp_nav_menu(array(
                    'container_id' => 'nav-primary-insurance',
                    'container_class' => 'nav primary-insurance',
                    'theme_location' => 'insurance',
                    'container' => 'nav',
                    'items_wrap' => '<ul>%3$s</ul>'
                ));
                ?>

            </div>
            <div class="fomo-search-container">
                <input type="text" id="fomo-search-input" class="hide-results not-in-focus" placeholder="Søg frit her">
                
                <div class="fomo-search-results">

                </div><!--/.fomo-search-results-->
            </div><!--/.fomo-search-container-->
        </div><!--/.nav-left-->
    </div>

    <div class="nav-right">

        <?php
        if (!defined('ABSPATH')) {
            exit;
        }

        wp_nav_menu(array(
            'container_id' => 'nav-primary',
            'container_class' => 'nav primary',
            'theme_location' => 'primary',
            'container' => 'nav',
            'items_wrap' => '<ul>%3$s<li class="fomo-mobile-search-input-container"><form class="fomo-mobile-search-form"><input type="text" class="fomo-mobile-search-input" id="fomo-mobile-search-input" placeholder="Søg frit her..." autocomplete="off"></form></li></ul>'
        ));
        ?>

    </div><!--/.nav-right-->
</div>