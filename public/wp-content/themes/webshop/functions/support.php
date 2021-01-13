<?php
// custom logo and title

function addTitleTag() {
    add_theme_support('title-tag');
}


function addCustomLogo() {
    add_theme_support( 'custom-logo', array(
        'height' => 300,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description'),
        'unlink-homepage-logo ' => false,
    ));
}

// active menu item
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
add_action( 'after_setup_theme', 'addCustomLogo');
add_action( 'init', 'addTitleTag');