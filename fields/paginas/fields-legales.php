<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_legales_fields');

function cf_legales_fields() {

    $legal_pages = [
        get_page_by_path('politicas-de-envio', OBJECT, 'page')->ID,
        get_page_by_path('politicas-de-privacidad-y-tratamiento-de-datos', OBJECT, 'page')->ID,
        get_page_by_path('terminos-y-condiciones', OBJECT, 'page')->ID,
    ];

    Container::make('post_meta', 'Contenido Legal')
        ->where('post_id', 'IN', $legal_pages)
        ->add_fields([

            Field::make('rich_text', 'gl_legal_content', 'Contenido')
                ->set_help_text('Contenido principal de la página. Puede incluir títulos, listas, enlaces, negritas y demás elementos del editor visual.'),

        ]);

}