<?php

// forms widgets
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

function Contact() {
    register_sidebar( array(
        'name' => __('Contact Area', 'contact_form'),
        'id' => 'contact-form',
        'description' => __('Description', 'contact_form'),
        'before_widget' => '<div class="contact-form">',
        'after_widget' => '</div>',
    ));
}
function FooterInfo() {
    register_sidebar( array(
        'name' => __('FooterInfo Area', 'footer_info'),
        'id' => 'footer-info',
        'description' => __('Description', 'footer_info'),
        'before_widget' => '<div class="footer-info">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'NewsLetterSignup');
add_action('widgets_init', 'FooterInfo');
add_action('widgets_init', 'Contact');