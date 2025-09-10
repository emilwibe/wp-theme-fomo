<?php
if (!defined('ABSPATH')) { exit; }

get_template_part( 'functions/ew_disables' );

get_template_part( 'functions/ew_enqueues' );

get_template_part( 'functions/ew_theme_supports' );

get_template_part( 'functions/ew_widgets' );

get_template_part( 'functions/ew_helper_functions' );

get_template_part( 'functions/ew_cpt_person' );
get_template_part( 'functions/ew_cpt_news' );

get_template_part( 'functions/ew_tax_emp_function' );
get_template_part( 'functions/ew_tax_news_sticky' );

get_template_part( 'functions/ew_acf_tinyMCE_toolbar' );

get_template_part( 'functions/ew_register_nav' );