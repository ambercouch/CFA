<?php

add_filter('wp_nav_menu_objects', 'ad_filter_menu', 10, 2);

function ad_filter_menu($sorted_menu_objects, $args) {
  foreach ($sorted_menu_objects as $menu_object) {
    if (substr($menu_object->description, 0, 1) === "#") {
      $menu_object->url = $menu_object->url . $menu_object->description;
    }
  }
  // check for the right menu to filter
  // here we check for the menu with name 'Posts Menu'
  // given that you call it in you theme with:
  //   wp_nav_menu( array( 'menu' => 'Posts Menu' ) );
  // if you call the menu using theme_location, eg:
  //   wp_nav_menu( array( 'theme_location' => 'top_manu' ) );
  // check for:
  //   if ($args->theme_location != 'top_menu')
  if ($args->theme_location == 'services') {
    // edit the menu objects
    foreach ($sorted_menu_objects as $menu_object) {
      // searching for menu items linking to posts or pages
      // can add as many post types to the array
      if (in_array($menu_object->object, array(' post', 'page', 'any_post_type'))) {
        // set the title to the post_thumbnail if available
        // thumbnail size is the second parameter of get_the_post_thumbnail()
        $menu_object->title = has_post_thumbnail($menu_object->object_id) ? '<span class = "menu--services__wrapper" data-posbot="-62" data-posleft="0">' . get_the_post_thumbnail($menu_object->object_id, 'service-thumb') . '<span class = "menu--services__title">' . $menu_object->title . '</span></span> ' : $menu_object->title;
      }
    }
  }
//  echo '<pre>';
//  print_r($args);die;
  if (in_array($args->menu->term_id, array(7))) {
//  if ($args->menu->term_id == 10 || $args->menu->term_id == 25) {

    foreach ($sorted_menu_objects as $menu_object) {

      $menu_object->title = $menu_object->xfn == '' ? $menu_object->title : '<svg preserveAspectRatio="none" class="icon menu__icon--old "><!--<use class="icon__use--hover-off"  xlink:href="#icon-' . $menu_object->xfn . '" />--><use class="icon__use--hover-on--old"  xlink:href="#icon-' . $menu_object->xfn . '--rgb" /></svg>';
    }
  }

  return $sorted_menu_objects;
}
