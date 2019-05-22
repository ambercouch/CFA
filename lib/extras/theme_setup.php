<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width))
  $content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/lib/extras/jetpack.php' );

if (!function_exists('ac_inuk_setup')) :

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook. The init hook is too late for some features, such as indicating
   * support post thumbnails.
   */
  function ac_inuk_setup() {

    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/lib/extras/template-tags.php' );

    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/lib/extras/extras.php' );

    /**
     * Customizer additions
     */
    require( get_template_directory() . '/lib/extras/customizer.php' );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on ac inuk, use a find and replace
     * to change 'ac_inuk' to the name of your theme in all the template files
     */
    load_theme_textdomain('ac_inuk', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support('automatic-feed-links');

    /**
     * Enable support for Post Thumbnails on posts and pages
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    //add_theme_support( 'post-thumbnails' );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ac_inuk'),
        'services' => __('Services Menu', 'ac_inuk')
    ));

    /**
     * Enable support for Post Formats
     */
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

    /**
     * Enable support for Post Formats
     */
    add_theme_support('html5', array('comment-list', 'search-form', 'comment-form'));

     /**
      * Enable support for Post thumnails
      */

      add_theme_support('post-thumbnails');
      add_image_size( 'service-thumb', 400, 400, true );
  }

endif; // ac_inuk_setup
add_action('after_setup_theme', 'ac_inuk_setup');
