<?php

function blog_site_files(){
    wp_enqueue_style('blog_site_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blog_site_files');

?>