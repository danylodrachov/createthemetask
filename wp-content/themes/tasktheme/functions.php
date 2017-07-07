<?php
function tasktheme_all_style(){
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
}
function tasktheme_all_js($in_footer = true){
    wp_enqueue_script('all_js', get_stylesheet_directory_uri() . '/assets/public/js/main.js');
}


add_action ('wp_enqueue_scripts', 'tasktheme_all_style');
add_action('wp_enqueue_scripts', 'tasktheme_all_js');