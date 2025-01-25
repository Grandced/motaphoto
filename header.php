<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<!-- Menu header--> 
    <div class="header-container">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
        </a>
        <!-- Menu de navigation -->
        <nav class="site-nav">
        <nav class="site-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu', // Assure-toi que l'emplacement est correct
            'menu_class' => 'nav-list',
            'container' => false, // Supprime le conteneur par défaut
        ));
        ?>
        </nav>
    </div> 
    
<!-- image du header -->
    <?php
    $image_url = get_template_directory_uri() . '/assets/images/header.png';
    ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="Header Image" class="header-image">
</header>