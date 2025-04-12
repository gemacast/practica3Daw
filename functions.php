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

//Agregando imagenes destacadas

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

// Agregando sidebar

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'menulateral' sidebar. */
	register_sidebar(
		array(
			'id'            => 'menu-lateral',
			'name'          => __( 'Menu lateral' ),
			'description'   => __( 'Sidebar lateral izquierdo de las entradas.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
?>


