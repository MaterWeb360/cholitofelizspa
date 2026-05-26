<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_libro_fields');

function cf_libro_fields() {
	Container::make('post_meta', 'Libro de reclamaciones')
    ->where(
        'post_id',
        '=',
        get_page_by_path('libro-de-reclamaciones')->ID
    )

    ->add_tab('Banner', [

        Field::make('text', 'li_hero_title_1', 'Título principal - Línea 1')
            ->set_width(50),

        Field::make('text', 'li_hero_title_2', 'Título principal - Línea 2')
            ->set_width(50),

        Field::make('rich_text', 'li_hero_description', 'Descripción')
            ->set_width(50),

        Field::make('image', 'li_hero_main_image', 'Imagen principal')
            ->set_width(50)
            ->set_value_type('url'),



    ])

	->add_tab('Descripciónes del libro', [

	    Field::make('rich_text', 'li_desp_products_1', 'Descripción arriba del formulario')
	        ->set_width(50)
	        ->set_help_text('Primera línea del título principal de la sección.'),

	    Field::make('rich_text', 'li_desp_products_2', 'Mensaje abajo del formulario')
	        ->set_width(50)
	        ->set_help_text('Segunda línea del título principal de la sección.'),


	]);

}