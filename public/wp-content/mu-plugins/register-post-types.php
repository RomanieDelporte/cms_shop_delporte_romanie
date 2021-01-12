<?php



function addStorePostTypes() {
    register_post_type('store', array(
        'label' => 'Store',
        'rewrite' => array('slug' => 'stores'),
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
        'rewrite' => array('slug' => 'events'),
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
function addTeamPostTypes() {
    register_post_type('member', array(
        'label' => 'Member',
        'rewrite' => array('slug' => 'members'),
        'labels' => array(
            'add_new_item' => 'Add new Member',
            'name_admin_bar' =>  'Member',
            'add_new' =>  'Add Member',
            'new_item'  =>  'New Member',
            'edit_item'  =>  'Edit Member',
            'view_item'  =>  'View Member',
            'update_item' =>  'View Member',
            'all_items'  =>  'All Members',
        ),
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
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
add_action('init', 'addTeamPostTypes');
