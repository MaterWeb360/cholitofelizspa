<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_legales_fields');

function cf_legales_fields() {

    $legal_pages = [
        get_page_by_path('politica-de-cambios-y-devoluciones')->ID,
        get_page_by_path('politicas-de-privacidad-y-tratamiento-de-datos')->ID,
        get_page_by_path('terminos-y-condiciones')->ID,
    ];

    Container::make('post_meta', 'Contenido Legal')
        ->where('post_id', 'IN', $legal_pages)

        ->add_tab('Banner', [

            Field::make('text', 'gl_hero_title_1', 'Título principal - Línea 1')
                ->set_width(50),

            Field::make('text', 'gl_hero_title_2', 'Título principal - Línea 2')
                ->set_width(50),

            Field::make('rich_text', 'gl_hero_description', 'Descripción')
                ->set_width(50),

            Field::make('image', 'gl_hero_main_image', 'Imagen principal')
                ->set_value_type('url')
                ->set_width(50),

        ])

        ->add_tab('Contenido', [

            Field::make('rich_text', 'gl_legal_content', 'Contenido')
                ->set_help_text('Contenido principal de la página. Puede incluir títulos, listas, enlaces, negritas y demás elementos del editor visual.')
                ->set_width(100),

        ]);

}