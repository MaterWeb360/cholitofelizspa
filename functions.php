<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

require_once get_template_directory() . '/fields/paginas/fields-home.php';
require_once get_template_directory() . '/fields/paginas/fields-nosotros.php';
require_once get_template_directory() . '/fields/paginas/fields-contacto.php';
require_once get_template_directory() . '/fields/paginas/fields-tienda.php';
require_once get_template_directory() . '/fields/paginas/fields-legales.php';
require_once get_template_directory() . '/fields/paginas/fields-libro-de-reclamaciones.php';



