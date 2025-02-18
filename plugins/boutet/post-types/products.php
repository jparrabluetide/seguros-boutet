<?php

$labels = array(
  'name' => _x('Products', 'General name', 'bluetide'),
  'singular_name' => _x('Product', 'Singular name', 'bluetide'),
  'menu_name' => __('Products', 'bluetide'),
  'name_admin_bar' => __('Product', 'bluetide'),
  'archives' => __('Item Archives', 'bluetide'),
  'attributes' => __('Item Attributes', 'bluetide'),
  'parent_item_colon' => __('Parent Item', 'bluetide'),
  'all_items' => __('All products', 'bluetide'),
  'add_new_item' => __('Add new product', 'bluetide'),
  'add_new' => __('Add new', 'bluetide'),
  'new_item' => __('New product', 'bluetide'),
  'edit_item' => __('Edit product', 'bluetide'),
  'update_item' => __('Update product', 'bluetide'),
  'view_item' => __('View product', 'bluetide'),
  'view_items' => __('View products', 'bluetide'),
  'search_items' => __('Search products', 'bluetide'),
  'not_found' => __('No products found', 'bluetide'),
  'not_found_in_trash' => __('No products found in the trash', 'bluetide'),
  'featured_image' => __('Featured image', 'bluetide'),
  'set_featured_image' => __('Add featured image', 'bluetide'),
  'remove_featured_image' => __('Remove featured image', 'bluetide'),
  'use_featured_image' => __('Use as featured image', 'bluetide'),
  'insert_into_item' => __('Insert to products', 'bluetide'),
  'uploaded_to_this_item' => __('Upload to product', 'bluetide'),
  'items_list' => __('List of products', 'bluetide'),
  'items_list_navigation' => __('Navigate to list of products', 'bluetide'),
  'filter_items_list' => __('Filter list of products', 'bluetide'),
);
$args = array(
  'label' => __('Product', 'bluetide'),
  'description' => __('Product description', 'bluetide'),
  'labels' => $labels,
  'supports' => array('title'),
  'taxonomies' => array('product-category'),
  'hierarchical' => false,
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'menu_position' => 6,
  'can_export' => true,
  'has_archive' => true,
  'exclude_from_search' => false,
  'publicly_queryable' => true,
  'map_meta_cap' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'product'),
  'menu_icon' => 'dashicons-products',
  'show_in_rest' => false,
  'rest_base' => 'product'
);
register_post_type('product', $args);

/**
 * Images
 */

add_image_size('product-icon', 110, 110, true);
add_image_size('product-card', 480, 330, true);
add_image_size('product-banner', 1920, 360, true);
