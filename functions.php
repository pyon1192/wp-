<?php
add_theme_support('post-thumbnails');
add_image_size('post_thumbnails', 400, 200, true);

// function titles()
// {
//     $title = wp_title();
//     if (is_home()) {
//         echo 'About Shikibuton';
//     }   else {
//             echo $title;
//         }
//     };
//タイトル
function theme_slug_setup() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'theme_slug_setup' );
