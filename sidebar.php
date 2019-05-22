<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ac inuk
 */
?>
<div id="secondary" class="content__widget-area--main sidebar" role="complementary">
  <div class="widget-area" >
    <?php do_action('before_sidebar'); ?>
    <?php if (!dynamic_sidebar('primary-aside')) : ?><?php endif; // end sidebar widget area ?>
  </div>
</div><!-- #secondary -->
