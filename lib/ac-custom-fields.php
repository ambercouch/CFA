<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_page-extras',
        'title' => 'Page Extras',
        'fields' => array (
            array (
                'key' => 'field_51dd48c8bc8ef',
                'label' => 'Video IDs',
                'name' => 'video_ids',
                'type' => 'text',
                'instructions' => 'A commerlist of the video ids for this page eg 10,23,4,293',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_51dd797b03000',
                'label' => 'Thumbnail 1',
                'name' => 'thumbnail_1',
                'type' => 'image',
                'instructions' => 'The thumbnail for video 1',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51dd79cc03001',
                'label' => 'Thumbnail 2',
                'name' => 'thumbnail_2',
                'type' => 'image',
                'instructions' => 'The thumbnail for video 2',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51dd79ed03002',
                'label' => 'Thumbnail 3',
                'name' => 'thumbnail_3',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51dd7a0303003',
                'label' => 'Thumbnail 4',
                'name' => 'thumbnail_4',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51e3bf1b07f38',
                'label' => 'Videos',
                'name' => 'videos',
                'type' => 'post_object',
                'instructions' => 'Select A video',
                'post_type' => array (
                    0 => 'video',
                ),
                'taxonomy' => array (
                    0 => 'all',
                ),
                'allow_null' => 1,
                'multiple' => 1,
            ),
            array (
                'key' => 'field_58ac1bc200707',
                'label' => 'Scripts',
                'name' => 'scripts',
                'type' => 'textarea',
                'instructions' => 'Added any scripts',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'html',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_video',
        'title' => 'Video',
        'fields' => array (
            array (
                'key' => 'field_51dd494c6d217',
                'label' => 'Video ID',
                'name' => 'video_id',
                'type' => 'text',
                'instructions' => 'the ID of the video',
                'required' => 1,
                'default_value' => 1,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_51e3ffd83b935',
                'label' => 'SWF Video',
                'name' => 'swf_video',
                'type' => 'file',
                'instructions' => 'Or upload a video',
                'save_format' => 'url',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51dd4b74a5791',
                'label' => 'Video Title',
                'name' => 'video_title',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_51e404ef86b04',
                'label' => 'SWF Height',
                'name' => 'swf_height',
                'type' => 'text',
                'instructions' => 'height of the uploaded video',
                'default_value' => 220,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_51e4052c86b05',
                'label' => 'SWF Width',
                'name' => 'swf_width',
                'type' => 'text',
                'instructions' => 'Width of the uploaded video (max 400)',
                'default_value' => 400,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'video',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
            ),
        ),
        'menu_order' => 0,
    ));
}
