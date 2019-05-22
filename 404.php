<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ac inuk
 */
get_header();
?>

<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">

    <article id="post-0" class="post error404 not-found">
      <header class="post__header">
        <h1 class="header__title"><?php _e('Oops! That page can&rsquo;t be found.', 'ac_inuk'); ?></h1>
      </header><!-- .entry-header -->

      <div class="post__content">
        <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ac_inuk'); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget('WP_Widget_Recent_Posts'); ?>

        <?php if (ac_inuk_categorized_blog()) : // Only show the widget if site has multiple categories. ?>
          <div class="widget widget_categories">
            <h2 class="widget__title"><?php _e('Most Used Categories', 'ac_inuk'); ?></h2>
            <ul>
              <?php
              wp_list_categories(array(
                  'orderby' => 'count',
                  'order' => 'DESC',
                  'show_count' => 1,
                  'title_li' => '',
                  'number' => 10,
              ));
              ?>
            </ul>
          </div><!-- .widget -->
        <?php endif; ?>

        <?php
        /* translators: %1$s: smiley */
        $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'ac_inuk'), convert_smilies(':)')) . '</p>';
        the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
        ?>

        <?php the_widget('WP_Widget_Tag_Cloud'); ?>

      </div><!-- .entry-content -->
    </article><!-- #post-0 .post .error404 .not-found -->

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>