<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ac inuk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <link rel="apple-touch-icon" sizes="57x57" href="/content/themes/CDC2014/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/content/themes/CDC2014/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/content/themes/CDC2014/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/content/themes/CDC2014/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/content/themes/CDC2014/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/content/themes/CDC2014/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/content/themes/CDC2014/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/content/themes/CDC2014/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/content/themes/CDC2014/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/content/themes/CDC2014/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/content/themes/CDC2014/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/content/themes/CDC2014/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/content/themes/CDC2014/favicon/favicon-16x16.png">
    <link rel="manifest" href="/content/themes/CDC2014/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/content/themes/CDC2014/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
      <style>
          <?php include_once("assets/css/critical.css"); ?>
      </style>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

      <!-- WP HEAD -->
    <?php wp_head(); ?>
      <!-- END WP HEAD -->
  </head>

  <body <?php body_class(defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : ''); ?> <?php ac_body_data(); ?>>
    <div style="display:none;">
      <?php include_once("assets/images/defs.svg"); ?>
    </div>
    <a class="site__tel" href="tel:02920382671">
      <svg preserveAspectRatio="none" class="icon header--master__tel__call ">
      <use xlink:href="<?php //echo '/content/themes/ac-inuk/assets/images/defs.svg';                                    ?>#icon-call" />
      </svg>
      <span>029 2038 2671</span>
    </a>
    <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
    <div id="page" class="hfeed site remodal-bg">
      <?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <?php get_template_part('templates/snippets/sidebar-banner'); ?>
      </header><!-- /.site__header -->
      <?php get_template_part('templates/snippets/site__navigation--services'); ?>
      <div class="site__content" id="main" >
        <div class="content">
