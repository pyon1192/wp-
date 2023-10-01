<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <?php wp_head(); ?>
    </head>
<body>
<header>
    <nav>
        <a href="<?php echo esc_url( get_home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri();?>/img/Shikibuton_rogo.jpeg">
        </a>
            <ul>
                <li><a href="#Top" class="scrollUpButton" onclick="scrollToTop()">Top</a></li>
                <li><a href="#Aboutme">Profile</a></li>
                <li><a href="#Works">Works</a></li>
                <li><a href="#Skills">Skills</a></li>
            </ul>
    </nav>
</header>