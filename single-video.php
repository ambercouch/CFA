<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <div id="primary" class="content__single-post--video">
    <div id="content" class="single-post" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/content', 'single-video'); ?>

        <?php //ac_inuk_content_nav('nav-below'); ?>

      <?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>

</div><!-- /.grid -->
<?php get_footer(); ?>