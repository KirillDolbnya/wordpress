<?php

if (! function_exists('promodise_setup')){
    //добавление ползовательского логотипа
    function promodise_setup(){
        add_theme_support('custom-logo',[
            'height' => 50,
            'width' => 130,

        ]);
    }
    add_action('after_setup_theme','promodise_setup');
}

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

//ругистрация сразу несколько областей меню
function promodise_menus()
{
    $menus = [
        'header' => __('Header menu','promodise'),
        'footer' => __('Footer menu','promodise'),
    ];
    //ругистрируем меню
    register_nav_menus($menus);
}
add_action('init','promodise_menus');

// свой класс построения меню:
class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {

    function start_lvl( &$output, $depth = 0, $args = NULL ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span

        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';

        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }

}