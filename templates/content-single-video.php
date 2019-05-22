<?php
/**
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="post__header">
    <div class="header--article">
      <h1 class="header--article__title">
        <span class="title--article" ><?php the_field('video_title'); ?></span>
      </h1>

      <div class="header--article__meta--header">
        <div  class="meta--header">

        </div>
      </div><!-- .entry-meta -->
    </div>
  </header><!-- .entry-header -->
  <div class="post__content--video">
    <?php if (get_field('swf_video')) : ?>
      <div class="swf swf__video " id="ajax-box" data-url="<?php the_field('swf_video'); ?>">
        <?php if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
          <h1 class="video__title">
            <span class="title" ><?php the_field('video_title'); ?></span>
          </h1>
        <?php endif; ?>
        <object type="application/x-shockwave-flash"
                data="<?php the_field('swf_video'); ?>"
                width="<?php the_field('swf_width') ?>" height="<?php the_field('swf_height') ?>">
          <param name="movie" value="<?php the_field('swf_video'); ?>" />
          <param name="quality" value="high"/>
          <param name="wmode" value="opaque" />

        </object>
      </div>
    <?php else : ?>
      <?php if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
        <div id="ajax-box"  class="iframe video " >
          <h1 class="video__title">
            <span class="title" ><?php the_field('video_title'); ?></span>
          </h1>
        <?php endif; ?>
        <iframe class="medivision post__content--video__iframe" style="margin:0 auto; width: 398px; height:223px; display: block" src="http://www.medivision.co.uk/Dental/webpakonline.php?id=<?php the_field('video_id'); ?>" frameborder="0" marginwidth="1" marginheight="1" scrolling="no" ></iframe>
      <?php endif; ?>
    </div>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
