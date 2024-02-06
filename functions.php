<?php

function fabyoc_setup(){
    //Imagenes Destacadas
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'fabyoc_setup');


function fabyoc_menus(){
    register_nav_menus(array(
        'menu-principal' =>  __('Menu Principal', 'fwl')
    ));
}

add_action('init', 'fabyoc_menus');

function fabyoc_scripts_styles(){
    //Añadir hojas de estilos
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(),'8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),'1.0.0');
}

add_action('wp_enqueue_scripts','fabyoc_scripts_styles');