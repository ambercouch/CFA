<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ac inuk
 */
?>

<article id="post-0" class="post no-results not-found">
  <header class="post__header">
    <h1 class="header"><?php _e('Nothing Found', 'ac_inuk'); ?></h1>
  </header><!-- .entry-header -->

  <div class="post__content">
    <?php if (is_home() && current_user_can('publish_posts')) : ?>

      <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ac_inuk'), esc_url(admin_url('post-new.php'))); ?></p>

    <?php elseif (is_search()) : ?>

      <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ac_inuk'); ?></p>
      <?php get_search_form(); ?>

    <?php else : ?>

      <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ac_inuk'); ?></p>
      <?php get_search_form(); ?>

    <?php endif; ?>
  </div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->
