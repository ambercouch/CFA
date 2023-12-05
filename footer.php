<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ac inuk
 */
?>
</div><!-- .content -->
</div><!-- .site__content-->
<div class="site__below-content">
  <?php get_template_part('templates/sidebar-below-content'); ?>
</div>
<div class="site__footer-content">
  <?php get_template_part('templates/snippets/sidebar-footer-content'); ?>
</div>
<footer class="site__footer" id="colophon"  role="contentinfo">
  <div class="footer--master" >
    <div class="grid">
      <div class="footer--master__site-info" >
        <div class="site-info">
			<div style="">


			<svg role="img" aria-label="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> <?php echo esc_attr(get_bloginfo('description', 'display')); ?>" preserveAspectRatio="none" class="icon site-title__icon" style="width: 167px;height: 57px;">
                    <title><?php echo esc_attr(get_bloginfo('name', 'display')); ?></title>
                    <desc><?php echo esc_attr(get_bloginfo('description', 'display')); ?></desc>
                    <use xlink:href="#icon-cfa-logo-white-2017" />
                    </svg><br>
          <small><?php _e('is the cosmetic team of', 'ac_inuk'); ?></small><br>

          <a href="https://cathedraldentalclinic.com" target="_blank">
            <img class="parent-logo" src="/wp-content/uploads/2018/02/CDC-logo-300.png" alt="Cathedral Dental Clinic">
          </a>
				</div>
			          <small><?php _e('© 2015 - <script>document.write(new Date().getFullYear())</script> Cathedral Facial Aesthetics', 'ac_inuk'); ?></small><br/>
          <small><?php _e('Website design by <a href="http://ambercouch.co.uk"><strong>Ambercouch', 'ac_inuk'); ?></strong></a></small>
        </div><!-- .site-info -->
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<link type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>?v=1.5" rel="stylesheet" >
<?php wp_footer(); ?>

<?php if(is_page() && get_field('scripts') != '') : ?>
    <!-- Page Scripts -->
    <?php the_field('scripts'); ?>
    <?php else : ?>
    <!-- No Page Script -->
<?php endif; ?>
</body>
</html>
