<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to ac_inuk_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package ac inuk
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required())
  return;
?>

<div id="comments" class="comments">

  <?php // You can start editing here -- including this comment!  ?>

  <?php if (have_comments()) : ?>


    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through  ?>
      <nav class="comment__nav--above" id="comment-nav-above"  role="navigation">
        <h1 class="nav--above__title"><?php _e('Comment navigation', 'ac_inuk'); ?></h1>
        <div class="nav--above__link--previous"><?php previous_comments_link(__('&larr; Older Comments', 'ac_inuk')); ?></div>
        <div class="nav--above__link--next"><?php next_comments_link(__('Newer Comments &rarr;', 'ac_inuk')); ?></div>
      </nav><!-- #comment-nav-before -->
    <?php endif; // check for comment navigation  ?>
    <div class="testimonials">
      <ol class="comments__list testimonials__year testimonials__this-year">
        <?php
        /* Loop through and list the comments. Tell wp_list_comments()
         * to use ac_inuk_comment() to format the comments.
         * If you want to overload this in a child theme then you can
         * define ac_inuk_comment() and that will be used instead.
         * See ac_inuk_comment() in inc/template-tags.php for more.
         */
        wp_list_comments(array('callback' => 'ac_inuk_comment', 'reverse_top_level' => true));
        ?>
      </ol><!-- .comment-list -->
    </div>
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through  ?>
      <nav class="comment__nav--below" id="comment-nav-below"  role="navigation">
        <h1 class="nav--below__title"><?php _e('Comment navigation', 'ac_inuk'); ?></h1>
        <div class="nav--below__link--previous"><?php previous_comments_link(__('&larr; Older Comments', 'ac_inuk')); ?></div>
        <div class="nav--below__link--next"><?php next_comments_link(__('Newer Comments &rarr;', 'ac_inuk')); ?></div>
      </nav><!-- #comment-nav-below -->
    <?php endif; // check for comment navigation  ?>

  <?php endif; // have_comments() ?>

  <?php
  // If comments are closed and there are comments, let's leave a little note, shall we?
  if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
    <p class="no-comments"><?php _e('Comments are closed.', 'ac_inuk'); ?></p>
  <?php endif; ?>

  <?php require( get_template_directory() . '/comment-form.php' ); ?>

</div><!-- #comments -->
