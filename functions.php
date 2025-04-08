<?php

// Registrar el menú
if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'principal' => __('Menú Principal'),
    ));
}

// Agrega la clase nav-link a cada <a>
add_filter('nav_menu_link_attributes', 'clase_link_menu', 10, 3);
function clase_link_menu($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}

// Agrega la clase nav-item a cada <li>
add_filter('nav_menu_css_class', 'clase_item_menu', 10, 4);
function clase_item_menu($classes, $item, $args, $depth) {
    $classes[] = 'nav-item text-end w-100'; // Alinea a la derecha cada item en colapsado
    return $classes;
}

?>