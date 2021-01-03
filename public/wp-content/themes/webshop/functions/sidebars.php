<?php

function NewsLetterSignup() {
    register_sidebar( array(
        'name' => __('Footer Area', 'footer_form'),
        'id' => 'footer-form',
        'description' => __('Description', 'footer_form'),
        'before_widget' => '<div class="footer-form">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
function Search() {
    register_sidebar( array(
        'name' => __('Search Area', 'search_form'),
        'id' => 'search-form',
        'description' => __('Description', 'search_form'),
        'before_widget' => '<div class="search-form">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'NewsLetterSignup');
add_action('widgets_init', 'Search');