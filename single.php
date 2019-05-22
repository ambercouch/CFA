<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <div id="primary" class="content__single-post">
    <div id="content" class="single-post" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/content', 'single'); ?>

        <?php ac_inuk_content_nav('nav-below'); ?>

        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if (comments_open() || '0' != get_comments_number()) :
          ?>
          <?php comments_template(); ?>
        <?php endif; ?>

<?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>

</div><!-- /.grid -->
<?php get_footer(); ?>