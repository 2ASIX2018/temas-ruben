<?php

    function MeuTema_setup() {
       
     
        // Suport a thumbnails
        add_theme_support( 'post-thumbnails' );
     
        // Afig enllaços als comentaris i a l'RSS
        add_theme_support( 'automatic-feed-links' );
     
        // Deixa que Wordpress gestione el títol
        add_theme_support( 'title-tag' );
     
        // Activa el suport per a un logotipus personalitzat
        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ) );
     
        // Registrant la ubicació dels menús
        register_nav_menus(array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
     
     
   
    add_action( 'after_setup_theme', 'elMeuTema_setup' );
   

function add_MeuTema_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'add_Widget_Support' );
