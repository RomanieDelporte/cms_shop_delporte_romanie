<?php
// translate some words
function loadTextdomain() {
    load_theme_textdomain('webshop', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'loadTextdomain');

