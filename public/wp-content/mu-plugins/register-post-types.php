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

add_action('init', 'addStorePostTypes');