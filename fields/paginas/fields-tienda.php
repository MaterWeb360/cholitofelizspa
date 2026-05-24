<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_tienda_fields');

function cf_tienda_fields() {
	Container::make('post_meta', 'Tienda')
    ->where(
        'post_id',
        '=',
        get_page_by_path('tienda')->ID
    )

    ->add_tab('Banner', [

        Field::make('text', 'ti_hero_title_1', 'Título principal - Línea 1')
            ->set_width(50),

        Field::make('text', 'ti_hero_title_2', 'Título principal - Línea 2')
            ->set_width(50),

        Field::make('textarea', 'ti_hero_description', 'Descripción')
            ->set_width(50),

        Field::make('image', 'ti_hero_main_image', 'Imagen principal')
            ->set_width(50)
            ->set_value_type('url'),

    ])

	->add_tab('Productos de Interés', [

	    Field::make('text', 'ti_featured_products_title_1', 'Título de la sección - Línea 1')
	        ->set_width(50)
	        ->set_help_text('Primera línea del título principal de la sección.'),

	    Field::make('text', 'ti_featured_products_title_2', 'Título de la sección - Línea 2')
	        ->set_width(50)
	        ->set_help_text('Segunda línea del título principal de la sección.'),

	    Field::make('textarea', 'ti_featured_products_description', 'Descripción de la sección')
	        ->set_width(100)
	        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

	    Field::make('association', 'ti_featured_products', 'Productos destacados')
	        ->set_width(100)
	        ->set_help_text('Seleccione los productos de WooCommerce que aparecerán en el slider.')
	        ->set_types([
	            [
	                'type'      => 'post',
	                'post_type' => 'product',
	            ],
	        ]),

	])
    	
    ->add_tab('Productos favoritos', [   

    	Field::make('text', 'ti_banner_tag', 'Texto de etiqueta')
		    ->set_width(100)
		    ->set_help_text('Texto pequeño mostrado encima del título principal.'),

		Field::make('text', 'ti_banner_title_1', 'Título del banner - Línea 1')
		    ->set_width(50)
		    ->set_help_text('Primera línea del título principal del banner.'),

		Field::make('text', 'ti_banner_title_2', 'Título del banner - Línea 2')
		    ->set_width(50)
		    ->set_help_text('Segunda línea del título principal del banner.'),

		Field::make('textarea', 'ti_banner_description', 'Descripción')
		    ->set_width(100)
		    ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

		Field::make('image', 'ti_banner_models_image', 'Imagen de modelos')
		    ->set_width(50)
		    ->set_value_type('url')
		    ->set_help_text('Imagen de modelos. Tamaño recomendado: 782 × 541 px.'),

		Field::make('image', 'ti_banner_background_image', 'Fondo del banner')
		    ->set_width(50)
		    ->set_value_type('url')
		    ->set_help_text('Imagen de fondo del banner. Tamaño recomendado: 1920 × 650 px.'),

		Field::make('association', 'ti_banner_products', 'Productos destacados')
		    ->set_width(100)
		    ->set_help_text('Seleccione los productos de WooCommerce que se mostrarán en este banner.')
		    ->set_types([
		        [
		            'type'      => 'post',
		            'post_type' => 'product',
		        ],
		    ]),

    ]);

}