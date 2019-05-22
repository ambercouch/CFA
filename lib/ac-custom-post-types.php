<?php

/*
 * CDC CUSTOM POST TYPES
 */

function cdc_cpt() {
  //Videos
  $labels = array(
      'name' => _x('Videos', 'post type general name'),
      'singular_name' => _x('Video', 'post type singular name'),
      'add_new' => _x('Add New', 'video'),
      'add_new_item' => __('Add New Video'),
      'edit_item' => __('Edit Video'),
      'new_item' => __('New Video'),
      'all_items' => __('All Videos'),
      'view_item' => __('View Video'),
      'search_items' => __('Search Videos'),
      'not_found' => __('No videos found'),
      'not_found_in_trash' => __('No videos found in the Trash'),
      'parent_item_colon' => '',
      'menu_name' => 'Videos'
  );
  $args = array(
      'labels' => $labels,
      'description' => 'Medivision Videos',
      'public' => true,
      'menu_position' => 20,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive' => true,
  );
  register_post_type('video', $args);
}

add_action('init', 'cdc_cpt');
