<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <?php get_sidebar(); ?>
  <div id="primary" class="content__single-page">
    <div id="content" class="single-page" role="main">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <!-- above comments -->
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        // And we allow comments on pages.
        if ((comments_open() || '0' != get_comments_number()) && AC_PAGE_COMMENTS === TRUE) :
          ?>
          <?php comments_template(); ?>
        <?php endif; ?>
      <?php endwhile; // end of the loop.  ?>
    </div><!-- /.site-content -->
  </div><!-- /.content__single-page -->

</div><!-- /.grid -->
<?php get_footer(); ?>
