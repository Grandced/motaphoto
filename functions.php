<?php
function mon_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primary-menu', 'Menu Principal' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mon_theme_setup' );

function mon_theme_assets() {
    wp_enqueue_style( 'mon-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'mon-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_assets' );

function mon_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mon_theme_widgets_init' );
?>