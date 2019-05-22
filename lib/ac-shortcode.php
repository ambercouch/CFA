<?php

function cdc_shortcode_video_block($atts) {

  $output = '<div class="video-preview sc ">';
  if (empty($atts)) {
    if (get_field('videos')) {
      global $shortvids;
      $shortvids = TRUE;

      foreach (get_field('videos') as $post) {
        setup_postdata($post);
        $output .= '<div class="video-preview__video-thumb get_field">';
        $output .= '<div class="video-thumb">';
        $output .= '<a class="video-link cdc_ajax" href="' . get_permalink($post->ID) . '">';
        //$output .= '<a class="video-link cdc_ajax" href="#modal">';
        if (has_post_thumbnail($post->ID)) {
          $output .= get_the_post_thumbnail($post->ID);
        } else {


          $output .= '<img class="video-link__icon" src="' . get_bloginfo('stylesheet_directory') . '/library/images/play.png" alt="Play Video" />';
          $output .= '<small class="video-link__play-text">Play</small>';
        }
        $output .='</a>';

        $output .= '</div>';
        $output .= '<h6 class="video-preview__video-title">' . get_field('video_title', $post->ID) . '</h6>';
        $output .= '</div>';
      }
      wp_reset_postdata();
    }
  } else {
    foreach ($atts as $vid_id) {
      $args = array(
          'post_type' => 'video',
          'showposts' => 1,
          'meta_query' => array(
              array(
                  'key' => 'video_id',
                  'value' => $vid_id,
                  'compare' => '=',
                  'type' => 'CHAR'
              )
          )
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
          $output .= '<div class="video-preview__video-thumb with atts">';
          $output .= '<div class="video-thumb">';
          $output .= '<a class="video-link " href="#modal-'.$vid_id.'">';
          //$output .= '<a class="video-link cdc_ajax" href="#modal">';
          if (has_post_thumbnail($post->ID)) {
            $output .= get_the_post_thumbnail($post->ID);
          } else {

            $output .= '<svg preserveAspectRatio="none" class="icon video-link__icon--play ">';
            $output .= '<use xlink:href = "#icon-play" />';
            $output .= '</svg>';
            $output .= '<small class="video-link__play-text">Play</small>';
          }
            $output .='</a>';



            $output .= '</div>';
            $output .= '<h6 class="video-preview__video-title">' . get_field('video_title', $post->ID) . '</h6>';
            $output .= '</div>';
            $output .= (is_user_logged_in() == false)? '<div class="remodal" data-remodal-id="modal-'.$vid_id.'">' : '<div class="remodal" data-remodal-id="modal-'.$vid_id.'">';
            $output .= '<div id="ajax-box"  class="iframe video ">';
            $output .= '<h1 class="video__title">';

            $output .= '<span class="title" >'. get_field('video_title') .'</span>';
            $output .= '</h1>';

            if(get_field('swf_video', $post->ID)){
                $output .= '';
                $output .= '<object type="application/x-shockwave-flash"';
                $output .= 'data="'.get_field('swf_video', $post->ID).'"';
                $output .= 'width="'.get_field('swf_width', $post->ID).'" height="'.get_field('swf_height', $post->ID).'">';
                $output .= '<param name="movie" value="'.get_field('swf_video', $post->ID).'" />';
                $output .= '<param name="quality" value="high"/>';
                $output .= '<param name="wmode" value="opaque" />';

                $output .= '</object>';
            }else{
                $output .= '<iframe class="medivision post__content--video__iframe" style="margin:0 auto; width: 398px; height:223px; display: block" src="http://www.medivision.co.uk/Dental/webpakonline.php?id='.$vid_id.'" frameborder="0" marginwidth="1" marginheight="1" scrolling="no" ></iframe>';
            }



            $output .= '</div>';
            $output .= (is_user_logged_in() == false)? '</div>' : '</div>';
        endwhile;
      endif;
      wp_reset_postdata();
    }
  }
  $output .='</div>';
  return $output;
}

add_shortcode('video-block', 'cdc_shortcode_video_block');
