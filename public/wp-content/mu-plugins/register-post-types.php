<?php



function addStorePostTypes() {
    register_post_type('store', array(
        'label' => 'Store',
        'labels' => array(
            'add_new_item' => 'Add new Store',
            'name_admin_bar' =>  'Store',
            'add_new' =>  'Add Store',
            'new_item'  =>  'New Store',
            'edit_item'  =>  'Edit Store',
            'view_item'  =>  'View Store',
            'update_item' =>  'View Store',
            'all_items'  =>  'All Stores',
        ),
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-location',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest' => true,
    ));
}
function addEventPostTypes() {
    register_post_type('event', array(
        'label' => 'Event',
        'labels' => array(
            'add_new_item' => 'Add new Event',
            'name_admin_bar' =>  'Event',
            'add_new' =>  'Add Event',
            'new_item'  =>  'New Event',
            'edit_item'  =>  'Edit Event',
            'view_item'  =>  'View Event',
            'update_item' =>  'View Event',
            'all_items'  =>  'All Events',
        ),
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest' => true,
    ));
}

add_action('init', 'addStorePostTypes');
add_action('init', 'addEventPostTypes');