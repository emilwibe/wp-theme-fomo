<?php
if (!defined('ABSPATH')) { exit; }

$redirect_url = get_field('fomo_404_redirect_url', 'option');

header("location:".$redirect_url);