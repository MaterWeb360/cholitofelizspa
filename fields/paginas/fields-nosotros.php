<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_nosotros_fields');

function cf_nosotros_fields() {
	Container::make('post_meta', 'Nosotros')
    ->where(
        'post_id',
        '=',
        get_page_by_path('nosotros')->ID
    )

    ->add_tab('Banner', [

        Field::make('text', 'ab_hero_title_1', 'Título principal - Línea 1')
            ->set_width(50),

        Field::make('text', 'ab_hero_title_2', 'Título principal - Línea 2')
            ->set_width(50),

        Field::make('textarea', 'ab_hero_description', 'Descripción')
            ->set_width(50),

        Field::make('image', 'ab_hero_main_image', 'Imagen principal')
            ->set_width(50)
            ->set_value_type('url'),

    ])
    ->add_tab('Nuestra Historia', [

	    Field::make('text', 'ab_history_section_title_1', 'Título de la sección - Línea 1')
	        ->set_width(50)
	        ->set_help_text('Primera línea del título principal de la sección.'),

	    Field::make('text', 'ab_history_section_title_2', 'Título de la sección - Línea 2')
	        ->set_width(50)
	        ->set_help_text('Segunda línea del título principal de la sección.'),

	    Field::make('textarea', 'ab_history_section_description', 'Descripción de la sección')
	        ->set_width(100)
	        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

	    Field::make('text', 'ab_history_title_1', 'Título principal - Línea 1')
	        ->set_width(50)
	        ->set_help_text('Primera línea del bloque principal.'),

	    Field::make('text', 'ab_history_title_2', 'Título principal - Línea 2')
	        ->set_width(50)
	        ->set_help_text('Segunda línea destacada del bloque principal.'),

	    Field::make('textarea', 'ab_history_description', 'Descripción principal')
	        ->set_width(100)
	        ->set_help_text('Texto descriptivo de la historia de la empresa.'),

	    Field::make('text', 'ab_history_featured_text', 'Texto destacado')
	        ->set_width(100)
	        ->set_help_text('Frase destacada mostrada debajo de la descripción.'),

	    Field::make('image', 'ab_history_main_image', 'Imagen principal')
	        ->set_width(100)
	        ->set_value_type('url')
	        ->set_help_text('Imagen grande mostrada en el bloque principal.'),

	    Field::make('complex', 'ab_history_cards', 'Tarjetas de historia')
	        ->set_layout('tabbed-horizontal')
	        ->add_fields([

	            Field::make('image', 'icon', 'Ícono')
	                ->set_width(30)
	                ->set_value_type('url')
	                ->set_help_text('Ícono mostrado junto al título.'),

	            Field::make('text', 'title_1', 'Título - Línea 1')
	                ->set_width(30)
	                ->set_help_text('Primera línea del título.'),

	            Field::make('text', 'title_2', 'Título - Línea 2')
	                ->set_width(30)
	                ->set_help_text('Segunda línea destacada del título.'),

	            Field::make('textarea', 'description', 'Descripción')
	                ->set_width(50)
	                ->set_help_text('Descripción de la tarjeta.'),

	            Field::make('image', 'image', 'Imagen')
	                ->set_width(50)
	                ->set_value_type('url')
	                ->set_help_text('Imagen mostrada en la parte inferior de la tarjeta.'),

	        ])
	        ->set_help_text('Agregue las tarjetas mostradas en la columna derecha.'),

	])
    ->add_tab('Nuestras Tiendas', [

	    Field::make('text', 'ab_stores_title_1', 'Título de la sección - Línea 1')
	        ->set_width(50)
	        ->set_help_text('Primera línea del título principal de la sección.'),

	    Field::make('text', 'ab_stores_title_2', 'Título de la sección - Línea 2')
	        ->set_width(50)
	        ->set_help_text('Segunda línea del título principal de la sección.'),

	    Field::make('textarea', 'ab_stores_description', 'Descripción de la sección')
	        ->set_width(100)
	        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

	    Field::make('complex', 'ab_stores_locations', 'Sedes')
	        ->set_layout('tabbed-horizontal')
	        ->add_fields([

	            Field::make('text', 'tab_title', 'Pestaña: Nombre de sede')
	                ->set_width(50)
	                ->set_help_text('Ejemplo: SEDE ROSASPATA.'),

	            Field::make('text', 'branch_name', 'Título: Nombre de la sede')
	                ->set_width(50)
	                ->set_help_text('Ejemplo: Rosaspata.'),

	            Field::make('textarea', 'map_embed', 'Código iframe de Google Maps')
	                ->set_width(50)
	                ->set_help_text('Pegue aquí el iframe completo proporcionado por Google Maps.'),

	            Field::make('image', 'store_image', 'Imagen de la sede')
	                ->set_width(50)
	                ->set_value_type('url')
	                ->set_help_text('Fotografía principal de la sede.'),

	            Field::make('textarea', 'reference_text', 'Referencia')
	                ->set_width(50)
	                ->set_help_text('Referencia para ubicar fácilmente la sede.'),

	            Field::make('text', 'address', 'Dirección')
	                ->set_width(33)
	                ->set_help_text('Dirección completa de la sede.'),

	            Field::make('text', 'phone', 'Teléfono')
	                ->set_width(33)
	                ->set_help_text('Número telefónico de contacto.'),

	            Field::make('text', 'schedule', 'Horario de atención')
	                ->set_width(33)
	                ->set_help_text('Horario de atención de la sede.'),

	            Field::make('text', 'button_text', 'Texto del botón')
	                ->set_width(50)
	                ->set_help_text('Ejemplo: CÓMO LLEGAR.'),

	            Field::make('text', 'button_link', 'Link del botón')
	                ->set_width(50)
	                ->set_help_text('URL de Google Maps o enlace para llegar a la sede.'),

	        ])
	        ->set_help_text('Agregue una sede por cada pestaña mostrada en la sección.'),

	])
	->add_tab('Productos de Interés', [

    Field::make('text', 'ab_featured_products_title_1', 'Título de la sección - Línea 1')
        ->set_width(50)
        ->set_help_text('Primera línea del título principal de la sección.'),

    Field::make('text', 'ab_featured_products_title_2', 'Título de la sección - Línea 2')
        ->set_width(50)
        ->set_help_text('Segunda línea del título principal de la sección.'),

    Field::make('textarea', 'ab_featured_products_description', 'Descripción de la sección')
        ->set_width(100)
        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

    Field::make('association', 'ab_featured_products', 'Productos destacados')
        ->set_width(100)
        ->set_help_text('Seleccione los productos de WooCommerce que aparecerán en el slider.')
        ->set_types([
            [
                'type'      => 'post',
                'post_type' => 'product',
            ],
        ]),

	]);
}