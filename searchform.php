<?php
/**
 * The template for displaying search forms in ac inuk
 *
 * @package ac inuk
 */
?>
<form class="searchform" method="get" id="searchform"  action="<?php echo esc_url(home_url('/')); ?>" role="search">
  <input type="search" class="searchform__search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'ac_inuk'); ?>" />
</form>
