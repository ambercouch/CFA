<?php
/**
 * Template Name: Full Width
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 *
 */
get_header();
?>
<div class="grid" >

  <div id="primary" class="content__single-page--full-width">
    <div id="content" class="single-page--full-width" role="main">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        // And we allow comments on pages.
        if ((comments_open() || '0' != get_comments_number()) && AC_PAGE_COMMENTS === TRUE) :
          ?>
          <?php comments_template(); ?>
        <?php endif; ?>
      <?php endwhile; // end of the loop.  ?>
    </div><!-- /.site-content -->
    <div id="after_content" class="content__single-page__aside sidebar" role="complementary">
      <div class="widget-area" >
        <?php do_action('before_sidebar'); ?>
        <?php if (!dynamic_sidebar('after-content-aside')) : ?><?php endif; // end sidebar widget area ?>
      </div>
    </div><!-- #secondary -->
  </div><!-- /.content__single-page -->

</div><!-- /.grid -->
<?php get_footer(); ?>
