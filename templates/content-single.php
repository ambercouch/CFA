<?php
/**
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="post__header">
    <div class="header--article">
      <h1 class="header--article__title">
        <span class="title--article" ><?php the_title(); ?></span>
      </h1>

      <div class="header--article__meta--header">
        <div  class="meta--header">
          <?php ac_inuk_posted_on(); ?>
        </div>
      </div><!-- .entry-meta -->
    </div>
  </header><!-- .entry-header -->

  <div class="post__content">
    <?php the_content(); ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page-links">' . __('Pages:', 'ac_inuk'),
        'after' => '</div>',
    ));
    ?>
  </div><!-- .entry-content -->

  <footer class="post__meta--footer">
    <?php
    /* translators: used between list items, there is a space after the comma */
    $category_list = get_the_category_list(__(', ', 'ac_inuk'));

    /* translators: used between list items, there is a space after the comma */
    $tag_list = get_the_tag_list('', __(', ', 'ac_inuk'));

    if (!ac_inuk_categorized_blog()) {
      // This blog only has 1 category so we just need to worry about tags in the meta text
      if ('' != $tag_list) {
        $meta_text = __('This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ac_inuk');
      } else {
        $meta_text = __('Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ac_inuk');
      }
    } else {
      // But this blog has loads of categories so we should probably display them here
      if ('' != $tag_list) {
        $meta_text = __('This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ac_inuk');
      } else {
        $meta_text = __('This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ac_inuk');
      }
    } // end check for categories on this blog

    printf(
            $meta_text, $category_list, $tag_list, get_permalink(), the_title_attribute('echo=0')
    );
    ?>

    <?php edit_post_link(__('Edit', 'ac_inuk'), '<span class="edit-link">', '</span>'); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-## -->
