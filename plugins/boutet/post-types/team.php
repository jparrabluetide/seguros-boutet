<?php

$labels = array(
  'name' => _x('Team', 'General name', 'bluetide'),
  'singular_name' => _x('Team', 'Singular name', 'bluetide'),
  'menu_name' => __('Teams', 'bluetide'),
  'name_admin_bar' => __('Team', 'bluetide'),
  'archives' => __('Item Archives', 'bluetide'),
  'attributes' => __('Item Attributes', 'bluetide'),
  'parent_item_colon' => __('Parent Item:', 'bluetide'),
  'all_items' => __('All Teams', 'bluetide'),
  'add_new_item' => __('Add new Team', 'bluetide'),
  'add_new' => __('Add new', 'bluetide'),
  'new_item' => __('new Team', 'bluetide'),
  'edit_item' => __('Edit Team', 'bluetide'),
  'update_item' => __('Update Team', 'bluetide'),
  'view_item' => __('View Team', 'bluetide'),
  'view_items' => __('View Teams', 'bluetide'),
  'search_items' => __('Search Teams', 'bluetide'),
  'not_found' => __('No Teams found', 'bluetide'),
  'not_found_in_trash' => __('No Teams found in the trash', 'bluetide'),
  'featured_image' => __('Featured image', 'bluetide'),
  'set_featured_image' => __('Add featured image', 'bluetide'),
  'remove_featured_image' => __('Remove featured image', 'bluetide'),
  'use_featured_image' => __('Use as featured image', 'bluetide'),
  'insert_into_item' => __('Insert to Teams', 'bluetide'),
  'uploaded_to_this_item' => __('Upload to Team', 'bluetide'),
  'items_list' => __('List of Teams', 'bluetide'),
  'items_list_navigation' => __('Navigate to list of Teams', 'bluetide'),
  'filter_items_list' => __('Filter list of Teams', 'bluetide'),
);
$args = array(
  'label' => __('Team', 'bluetide'),
  'description' => __('Team description', 'bluetide'),
  'labels' => $labels,
  'supports' => array('title'),
  'hierarchical' => false,
  'public' => false,
  'show_ui' => true,
  'show_in_menu' => true,
  'menu_position' => 7,
  'can_export' => true,
  'has_archive' => true,
  'exclude_from_search' => false,
  'publicly_queryable' => true,
  'map_meta_cap' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'team'),
  'menu_icon' => 'dashicons-businessman',
  'show_in_rest' => false,
  'rest_base' => 'team'
);
register_post_type('team', $args);

/**
 * Images
 */

add_image_size('team-card', 300, 330, true);
