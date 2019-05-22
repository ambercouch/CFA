<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="page__header">
    <div class="header--article">
      <h1 class="header__title">
        <span class="title--article" ><?php the_title(); ?></span>
      </h1>
    </div>
  </header><!-- /.page__header -->

  <div class="page__content">
    <?php the_content(); ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page__page-links">' . __('Pages:', 'ac_inuk'),
        'after' => '</div>',
    ));
    ?>
  </div><!-- /.page__content -->

</article><!-- #post-## -->
