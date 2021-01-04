<?php



function registerThemeSupport() {
    // images
    add_theme_support('post-thumbnails');
    // dit spreek je aan in components/hero.php
    add_image_size('large-thumbnail', 300, 350);
    add_image_size('medium-thumbnail', 200, 350);
}



add_action( 'init', 'registerThemeSupport');
