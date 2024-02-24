<?php

// Obtener el ID del menú por su nombre
$menu_name = 'menu-principal';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);

// Obtener los elementos del menú
$menu_items = wp_get_nav_menu_items($menu->term_id);

// Comprobar si hay elementos en el menú
if ($menu_items) {
    // Iterar sobre los elementos del menú
    foreach ($menu_items as $menu_item) {
        // Imprimir el título y el enlace
        echo '<div class="img-menu-container">
        <a href="' . $menu_item->url . '">
          <span class="img-menu-title">' . $menu_item->title . '</span>
          <img src="https://img.freepik.com/foto-gratis/coleccion-productos-maquillaje-belleza_23-2148620012.jpg" class="img-menu">
        </a>
      </div>';
    }
}