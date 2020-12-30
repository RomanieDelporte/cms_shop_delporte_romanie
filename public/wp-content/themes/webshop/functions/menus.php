<?php

function registerMenuLocations() {
    register_nav_menus(array(
        'main-nav' => 'Header Menu',
        'footer-nav' => 'Footer Menu'
    ));
}

add_action('init', 'registerMenuLocations');