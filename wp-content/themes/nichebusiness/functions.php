<?php
function resources() {
    wp_enqueue_style( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


    wp_enqueue_script( 'tailwind', "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4", [], null, false );
    wp_enqueue_script( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js", [], null, true );
    wp_enqueue_script( 'nichebusiness', get_template_directory_uri() . "/assets/js/script.js", [], time(), true );
}
add_action( 'wp_enqueue_scripts', 'resources' );