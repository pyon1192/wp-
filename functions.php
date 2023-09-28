<?php
add_theme_support('post-thumbnails');
add_image_size('post_thumbnails', 400, 200, true);

function titles()
{
    $title = wp_title();
    if (is_home()) {
        echo 'About Shikibuton';
    }   else {
            echo $title;
        }
    };