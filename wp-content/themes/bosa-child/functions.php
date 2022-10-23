<?php
function bosa_child_styles() {
$parent_style = 'parent-style';
wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');
wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array($parent_style), '1.00');
//wp_enqueue_script('main', get_stylesheet_directory_uri().'/includes/js/main.js', array('jquery'), '3.1.1', true);
}
add_action('wp_enqueue_scripts', 'bosa_child_styles');