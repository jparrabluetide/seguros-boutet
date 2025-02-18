<?php

$labels = array(
  'name' => _x('Team', 'General name', 'bluetide'),
  'singular_name' => _x('Team', 'Singular name', 'bluetide'),
  'menu_name' => __('Teams', 'bluetide'),
  'name_admin_bar' => __('Team', 'bluetide'),
  'archives' => __('Item Archives', 'bluetide'),
  'attributes' => __('Item Attributes', 'bluetide'),
  'parent_item_colon' => __('Parent Item:', 'bluetide'),
  'all_items' => __('All teams', 'bluetide'),
  'add_new_item' => __('Add new team', 'bluetide'),
  'add_new' => __('Add new', 'bluetide'),
  'new_item' => __('new team', 'bluetide'),
  'edit_item' => __('Edit team', 'bluetide'),
  'update_item' => __('Update team', 'bluetide'),
  'view_item' => __('View team', 'bluetide'),
  'view_items' => __('View teams', 'bluetide'),
  'search_items' => __('Search teams', 'bluetide'),
  'not_found' => __('No teams found', 'bluetide'),
  'not_found_in_trash' => __('No teams found in the trash', 'bluetide'),
  'featured_image' => __('Featured image', 'bluetide'),
  'set_featured_image' => __('Add featured image', 'bluetide'),
  'remove_featured_image' => __('Remove featured image', 'bluetide'),
  'use_featured_image' => __('Use as featured image', 'bluetide'),
  'insert_into_item' => __('Insert to teams', 'bluetide'),
  'uploaded_to_this_item' => __('Upload to team', 'bluetide'),
  'items_list' => __('List of teams', 'bluetide'),
  'items_list_navigation' => __('Navigate to list of teams', 'bluetide'),
  'filter_items_list' => __('Filter list of teams', 'bluetide'),
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
