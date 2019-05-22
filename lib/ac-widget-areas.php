<?php

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ac_inuk_widgets_init() {
  register_sidebar(array(
      'name' => __('Primary Sidebar', 'ac_inuk'),
      'id' => 'primary-aside',
      'before_widget' => '<aside id="%1$s" class="widget-area__widget %2$s"><div class="widget" >',
      'after_widget' => '</div></aside>',
      'before_title' => '<header class="widget__header" ><h3 class="title--widget">',
      'after_title' => '</h3></header>',
  ));
  register_sidebar(array(
      'name' => __('Below Content Sidebar', 'ac_inuk'),
      'id' => 'below-content-aside',
      'before_widget' => '<aside id="%1$s" class="widget-area__widget %2$s"><div class="widget" >',
      'after_widget' => '</div></aside>',
      'before_title' => '<header class="widget__header" ><h3 class="title--widget">',
      'after_title' => '</h3></header>',
  ));
  register_sidebar(array(
      'name' => __('Footer Sidebar', 'ac_inuk'),
      'id' => 'footer-aside',
      'before_widget' => '<aside id="%1$s" class="widget-area__widget %2$s"><div class="widget" >',
      'after_widget' => '</div></aside>',
      'before_title' => '<header class="widget__header" ><h3 class="title--widget">',
      'after_title' => '</h3></header>',
  ));
  register_sidebar(array(
      'name' => __('After Content Sidebar', 'ac_inuk'),
      'id' => 'after-content-aside',
      'before_widget' => '<aside id="%1$s" class="widget-area__widget %2$s"><div class="widget" >',
      'after_widget' => '</div></aside>',
      'before_title' => '<header class="widget__header" ><h3 class="title--widget">',
      'after_title' => '</h3></header>',
  ));
  register_sidebar(array(
      'name' => __('Banner Sidebar', 'ac_inuk'),
      'id' => 'banner-aside',
      'before_widget' => '<aside id="%1$s" class="widget-area__widget %2$s"><div class="widget" >',
      'after_widget' => '</div></aside>',
      'before_title' => '<header class="widget__header" ><h3 class="title--widget">',
      'after_title' => '</h3></header>',
  ));
}

add_action('widgets_init', 'ac_inuk_widgets_init');




