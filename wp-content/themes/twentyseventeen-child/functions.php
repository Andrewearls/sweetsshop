<?php
//* Code goes here

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}