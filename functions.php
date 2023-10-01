<?php
add_theme_support('post-thumbnails');
add_image_size('post_thumbnails', 400, 200, true);

function theme_slug_setup() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'theme_slug_setup' );
