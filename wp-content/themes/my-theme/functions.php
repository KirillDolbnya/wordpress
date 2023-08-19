<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'my_style' );
function my_style() {
    // начало подключение стилей
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.css', array('main') );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/plugins/fontawesome/css/all.css', array('main') );
    wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/plugins/icofont/icofont.css', array('main') );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap') );
    // переподключение jquery
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery/jquery.min.js');
    wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'map', get_template_directory_uri() . ' /assets/plugins/google-map/map.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . ' /assets/js/script.js', array('jquery'), '1.0.0', true );
}