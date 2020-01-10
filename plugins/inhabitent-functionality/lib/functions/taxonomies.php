<?php

/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function products_taxonomy()
{

    $labels = array(
        'name'                       => _x('Product Types', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Product Type', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Product Type', 'text_domain'),
        'all_items'                  => __('All Product Type', 'text_domain'),
        'parent_item'                => __('Parent Product Item', 'text_domain'),
        'parent_item_colon'          => __('Parent Product Item:', 'text_domain'),
        'new_item_name'              => __('New Product Item Name', 'text_domain'),
        'add_new_item'               => __('Add New Product Item', 'text_domain'),
        'edit_item'                  => __('Edit Product Item', 'text_domain'),
        'update_item'                => __('Update Product Item', 'text_domain'),
        'view_item'                  => __('View Product Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate Product Items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove Product Items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Product Items', 'text_domain'),
        'search_items'               => __('Search Product Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No Product Items', 'text_domain'),
        'items_list'                 => __('Product Items list', 'text_domain'),
        'items_list_navigation'      => __('Product Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy('product_type', array('Products_Types'), $args);
}
add_action('init', 'products_taxonomy', 0);
