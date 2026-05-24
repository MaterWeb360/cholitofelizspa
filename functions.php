<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

// Permitir subida de archivos SVG
    function permitir_svg($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'permitir_svg');

require_once get_template_directory() . '/fields/paginas/fields-home.php';
require_once get_template_directory() . '/fields/paginas/fields-nosotros.php';
require_once get_template_directory() . '/fields/paginas/fields-contacto.php';
require_once get_template_directory() . '/fields/paginas/fields-tienda.php';
require_once get_template_directory() . '/fields/paginas/fields-legales.php';
require_once get_template_directory() . '/fields/paginas/fields-libro-de-reclamaciones.php';
require_once get_template_directory() . '/fields/paginas/opciones-generales.php';



