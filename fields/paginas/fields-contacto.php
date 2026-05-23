<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_contacto_fields');

function cf_contacto_fields() {
	Container::make('post_meta', 'Contactanos')
    ->where(
        'post_id',
        '=',
        get_page_by_path('contacto')->ID
    )

    ->add_tab('Banner', [

        Field::make('text', 'con_hero_title_1', 'Título principal - Línea 1')
            ->set_width(50),

        Field::make('text', 'con_hero_title_2', 'Título principal - Línea 2')
            ->set_width(50),

        Field::make('textarea', 'con_hero_description', 'Descripción')
            ->set_width(50),

        Field::make('image', 'con_hero_main_image', 'Imagen principal')
            ->set_width(50)
            ->set_value_type('url'),

    ])

    ->add_tab('Contacto', [

		    Field::make('text', 'con_contact_tag', 'Texto de etiqueta')
		        ->set_width(100)
		        ->set_help_text('Texto pequeño mostrado encima del título principal.'),

		    Field::make('text', 'con_contact_title', 'Título principal')
		        ->set_width(100)
		        ->set_help_text('Título principal de la sección.'),

		    Field::make('textarea', 'con_contact_description', 'Descripción')
		        ->set_width(100)
		        ->set_help_text('Texto descriptivo mostrado debajo del título.'),

		    Field::make('complex', 'con_contact_methods', 'Canales de contacto')
		        ->set_layout('tabbed-horizontal')
		        ->add_fields([

		            Field::make('image', 'icon', 'Ícono')
		                ->set_width(25)
		                ->set_value_type('url'),

		            Field::make('text', 'title', 'Título')
		                ->set_width(75),

		            Field::make('textarea', 'description', 'Descripción')
		                ->set_width(100),

		            Field::make('text', 'highlight_text', 'Texto destacado')
		                ->set_width(100),
	        	])
	        	->set_help_text('Llámanos, Whatsapp, Escríbenos, Visítanos, etc.'),

		    Field::make('image', 'con_contact_social_icon', 'Ícono de redes sociales')
		        ->set_width(50)
		        ->set_value_type('url')
		        ->set_help_text('Ícono mostrado al inicio de la franja de redes sociales.'),

		    Field::make('text', 'con_contact_social_title', 'Título de redes sociales')
		        ->set_width(50)
		        ->set_help_text('Ejemplo: Síguenos en nuestras redes sociales.'),

		    Field::make('textarea', 'con_contact_social_description', 'Descripción de redes sociales')
		        ->set_width(100)
		        ->set_help_text('Texto mostrado debajo del título.'),

		    Field::make('complex', 'con_contact_social_links', 'Redes sociales')
		        ->set_layout('tabbed-horizontal')
		        ->add_fields([

		            Field::make('image', 'icon', 'Ícono')
		                ->set_width(30)
		                ->set_value_type('url'),

		            Field::make('text', 'username', 'Usuario')
		                ->set_width(35),

		            Field::make('text', 'link', 'Link')
		                ->set_width(35),
	        ]),

		    Field::make('complex', 'con_contact_features', 'Beneficios inferiores')
		        ->set_layout('tabbed-horizontal')
		        ->add_fields([

		            Field::make('image', 'icon', 'Ícono')
		                ->set_width(25)
		                ->set_value_type('url'),

		            Field::make('text', 'title', 'Título')
		                ->set_width(75),

		            Field::make('text', 'subtitle', 'Subtítulo')
		                ->set_width(100),
	        ])
	        ->set_help_text('Envíos a todo el Perú, Compra segura, Atención personalizada, Productos de calidad.'),

	])

        ->add_tab('Nuestras Tiendas', [

	    Field::make('text', 'con_stores_title_1', 'Título de la sección - Línea 1')
	        ->set_width(50)
	        ->set_help_text('Primera línea del título principal de la sección.'),

	    Field::make('text', 'con_stores_title_2', 'Título de la sección - Línea 2')
	        ->set_width(50)
	        ->set_help_text('Segunda línea del título principal de la sección.'),

	    Field::make('textarea', 'con_stores_description', 'Descripción de la sección')
	        ->set_width(100)
	        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

	    Field::make('complex', 'con_stores_locations', 'Sedes')
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

    Field::make('text', 'con_featured_products_title_1', 'Título de la sección - Línea 1')
        ->set_width(50)
        ->set_help_text('Primera línea del título principal de la sección.'),

    Field::make('text', 'con_featured_products_title_2', 'Título de la sección - Línea 2')
        ->set_width(50)
        ->set_help_text('Segunda línea del título principal de la sección.'),

    Field::make('textarea', 'con_featured_products_description', 'Descripción de la sección')
        ->set_width(100)
        ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

    Field::make('association', 'con_featured_products', 'Productos destacados')
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

        	Field::make('text', 'hm_banner_tag', 'Texto de etiqueta')
			    ->set_width(100)
			    ->set_help_text('Texto pequeño mostrado encima del título principal.'),

			Field::make('text', 'hm_banner_title_1', 'Título del banner - Línea 1')
			    ->set_width(50)
			    ->set_help_text('Primera línea del título principal del banner.'),

			Field::make('text', 'hm_banner_title_2', 'Título del banner - Línea 2')
			    ->set_width(50)
			    ->set_help_text('Segunda línea del título principal del banner.'),

			Field::make('textarea', 'hm_banner_description', 'Descripción')
			    ->set_width(100)
			    ->set_help_text('Texto descriptivo mostrado debajo del título principal.'),

			Field::make('image', 'hm_banner_models_image', 'Imagen de modelos')
			    ->set_width(50)
			    ->set_value_type('url')
			    ->set_help_text('Imagen de modelos. Tamaño recomendado: 782 × 541 px.'),

			Field::make('image', 'hm_banner_background_image', 'Fondo del banner')
			    ->set_width(50)
			    ->set_value_type('url')
			    ->set_help_text('Imagen de fondo del banner. Tamaño recomendado: 1920 × 650 px.'),

			Field::make('association', 'hm_banner_products', 'Productos destacados')
			    ->set_width(100)
			    ->set_help_text('Seleccione los productos de WooCommerce que se mostrarán en este banner.')
			    ->set_types([
			        [
			            'type'      => 'post',
			            'post_type' => 'product',
			        ],
			    ]),

        ])
	;

}