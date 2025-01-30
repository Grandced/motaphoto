<?php
function mon_theme_enqueue_assets() {
    // Charger le fichier CSS compilé depuis Sass
    $css_file = get_stylesheet_directory() . '/assets/scss/style.css';
    wp_enqueue_style(
        'mon-theme-style',
        get_stylesheet_directory_uri() . '/assets/scss/style.css',
        [],
        file_exists($css_file) ? filemtime($css_file) : '1.0' // Vérifie si le fichier existe avant d'utiliser filemtime()
    );

    // Charger le JavaScript personnalisé
    wp_enqueue_script(
        'mon-theme-script',
        get_stylesheet_directory_uri() . '/assets/js/script.js',
        ['jquery'], // Dépendance à jQuery (déjà inclus par WordPress)
        null,
        true // Chargement dans le footer pour de meilleures performances
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_assets');

function mon_theme_setup() {
    // Activer la gestion des menus
    add_theme_support('menus');
    register_nav_menu('primary-menu', 'Menu Principal');

    // Activer la balise <title> dynamique
    add_theme_support('title-tag');

    // Activer les images mises en avant
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mon_theme_setup');

function mon_theme_widgets_init() {
    register_sidebar([
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'mon_theme_widgets_init');
