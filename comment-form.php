<?php

$commenter = wp_get_current_commenter();
$user = wp_get_current_user();
$user_identity = $user->exists() ? $user->display_name : '';

$args = wp_parse_args($args);
if (!isset($args['format'])) {
  $args['format'] = current_theme_supports('html5', 'comment-form') ? 'html5' : 'xhtml';
}

$req = get_option('require_name_email');
$aria_req = ( $req ? " aria-required='true'" : '' );
$html5 = 'html5' === $args['format'];
$fields = array(
    'author' => '<p class="comment-form__author">' . '<label for="author">' . __('Name') . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
    '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
    'email' => '<p class="comment-form__email"><label for="email">' . __('Email') . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
    '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>'
);

$required_text = sprintf(' ' . '<br><small>' . __('Required fields are marked %s'), '<span class="required">*</span>' . '</small>');

$ac_comment_form_args = array(
    'fields' => $fields,
    'comment_field' => '<p class="comment-form__comment"><label for="comment">' . _x('Comment', 'noun') . '</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
    'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
    'logged_in_as' => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
    'comment_notes_before' => '<p class="comment-form__notes">' . __('If you are a patient at Cathedral Dental Clinic and wish to leave a testimonial, please use the form provided below.') . ( $req ? $required_text : '' ) . '</p>',
    'comment_notes_after' => '',
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => __('Leave a Reply'),
    'title_reply_to' => __('Leave a Reply to %s'),
    'cancel_reply_link' => __('Cancel reply'),
    'label_submit' => __('Add a Testimonial'),
    'format' => 'html5',
);
comment_form($ac_comment_form_args);


