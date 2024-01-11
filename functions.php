<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    
}
add_action ('wp_enqueue_scripts' , 'load_stylesheets');



function include_jquery()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3-6-0.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts' , 'include_jquery');


function loadjs()
{
    wp_register_script('js', get_template_directory_uri() . '/assets/js/main.js', '', 1, true);
    wp_enqueue_script('js');
}
add_action ('wp_enqueue_scripts', 'loadjs');

// Theme Options
add_theme_support('menus');


//Menus
register_nav_menus(

    array(

        'top-menu' =>__('Top Menu', 'theme'),
        'mobile-menu' =>__('mobile Menu', 'theme'),
        'footer-menu' =>__('Footer Menu', 'theme'),
    )
    );



    //logo
    add_theme_support('custom_logo');

    function themename_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults );
    }
     
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

    
