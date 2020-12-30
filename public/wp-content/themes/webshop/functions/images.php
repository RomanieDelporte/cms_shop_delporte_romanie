<?php



function registerThemeSupport() {
    // images

    add_theme_support('post-thumbnails');
    // dit spreek je aan in components/hero.php
    add_image_size('large-thumbnail', 300, 300);
}



add_action( 'init', 'registerThemeSupport');
