<?php

function nail_salon_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;700&display=swap', array(), null );

    // Swiper CSS
    wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), 'null' );

    // テーマのメインCSS
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), 'null', true );

    // テーマのメインJS
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.js', array('swiper-js'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'nail_salon_scripts' );

?>