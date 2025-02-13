<?php

$labels = array(
  'name' => __('Categories', 'bluetide'),
  'singular_name' => __('Category', 'bluetide'),
  'search_items' => __('Search categories', 'bluetide'),
  'all_items' => __('All categories', 'bluetide'),
  'parent_item' => __('Parent category', 'bluetide'),
  'parent_item_colon' => __('Parent category:', 'bluetide'),
  'edit_item' => __('Edit category', 'bluetide'),
  'update_item' => __('Update category', 'bluetide'),
  'add_new_item' => __('Add new category', 'bluetide'),
  'new_item_name' => __('New category name', 'bluetide'),
  'menu_name' => __('Categories', 'bluetide'),
);

$args = array(
  // Hierarchical taxonomy (like categories)
  'hierarchical' => true,
  // This array of options controls the labels displayed in the WordPress Admin UI
  'labels' => $labels,
  // Control the slugs used for this taxonomy
  'rewrite' => array(
    'slug' => 'product-category', // This controls the base slug that will display before each term
  ),
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'show_in_rest' => false,
  'rest-base' => 'product-category'
);

register_taxonomy('product-category', array('product'), $args);
