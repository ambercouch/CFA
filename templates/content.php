<?php
/**
 * @package ac inuk
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="post__header">
    <div class="header--article">
      <h1 class="header--article__title">
        <a class="title--article" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h1>

      <?php if ('post' == get_post_type()) : ?>
        <div class="header--article__meta--header">
          <div class="meta--header" >
            <?php ac_inuk_posted_on(); ?>
          </div>
        </div><!-- /.header--article__meta--header -->
      <?php endif; ?>
    </div>
  </header><!-- /.post__header -->

  <?php if (is_search()) : // Only display Excerpts for Search ?>
    <div class="post__summary">
      <?php the_excerpt(); ?>
    </div><!-- /.post__summary -->
  <?php else : ?>
    <div class="post__content">
      <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'ac_inuk')); ?>
      <?php
      wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'ac_inuk'),
          'after' => '</div>',
      ));
      ?>
    </div><!-- /.post__content -->
  <?php endif; ?>

  <footer class="post__meta--footer">
    <div class="meta--footer" >
      <?php if ('post' == get_post_type()) : // Hide category and tag text for pages on Search ?>
        <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list(__(', ', 'ac_inuk'));
        if ($categories_list && ac_inuk_categorized_blog()) :
          ?>
          <span class="meta--footer__cat-links">
            <?php printf(__('Posted in %1$s', 'ac_inuk'), $categories_list); ?>
          </span>
        <?php endif; // End if categories ?>

        <?php
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list('', __(', ', 'ac_inuk'));
        if ($tags_list) :
          ?>
          <span class="meta--footer__tags-links">
            <?php printf(__('Tagged %1$s', 'ac_inuk'), $tags_list); ?>
          </span>
        <?php endif; // End if $tags_list ?>
      <?php endif; // End if 'post' == get_post_type() ?>

      <?php if (!post_password_required() && ( comments_open() || '0' != get_comments_number() )) : ?>

        <span class="meta--footer__comments-link"><?php comments_popup_link(__('Leave a comment', 'ac_inuk'), __('1 Comment', 'ac_inuk'), __('% Comments', 'ac_inuk')); ?></span>
      <?php endif; ?>

      <?php edit_post_link(__('Edit', 'ac_inuk'), '<span class="meta--footer__sep"> | </span><span class="meta--footer__edit-link">', '</span>'); ?>
    </div><!-- /.meta--footer -->
  </footer><!-- .post__meta--footer -->
</article><!-- #post-## -->
