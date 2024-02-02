<?php

function fabyoc_menus(){
    register_nav_menus(array(
        'menu-principal' =>  __('Menu Principal', 'withlovefaby')
    ));
}

add_action('init', 'fabyoc_menus');