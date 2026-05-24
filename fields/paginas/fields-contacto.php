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

        Field::make('rich_text', 'con_hero_description', 'Descripción')
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

		    Field::make('rich_text', 'con_contact_description', 'Descripción')
		        ->set_width(100)
		        ->set_help_text('Texto descriptivo mostrado debajo del título.'),

		    Field::make('complex', 'con_contact_methods', 'Canales de contacto')
		        ->set_layout('tabbed-horizontal')
		        ->add_fields([

		            Field::make('image', 'icon', 'Ícono')
		                ->set_width(25),

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
		                ->set_width(30),

		            Field::make('text', 'username', 'Usuario')
		                ->set_width(35),

		            Field::make('text', 'link', 'Link')
		                ->set_width(35),
	        ]),

		    Field::make('complex', 'con_contact_features', 'Beneficios inferiores')
		        ->set_layout('tabbed-horizontal')
		        ->add_fields([

		            Field::make('image', 'icon', 'Ícono')
		                ->set_width(25),

		            Field::make('text', 'title', 'Título')
		                ->set_width(75),

		            Field::make('text', 'subtitle', 'Subtítulo')
		                ->set_width(100),
	        ])
	        ->set_help_text('Envíos a todo el Perú, Compra segura, Atención personalizada, Productos de calidad.'),

	])


    	->add_tab('Productos de Interés', [

    Field::make('text', 'con_featured_products_title_1', 'Título de la sección - Línea 1')
        ->set_width(50)
        ->set_help_text('Primera línea del título principal de la sección.'),

    Field::make('text', 'con_featured_products_title_2', 'Título de la sección - Línea 2')
        ->set_width(50)
        ->set_help_text('Segunda línea del título principal de la sección.'),

    Field::make('rich_text', 'con_featured_products_description', 'Descripción de la sección')
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

			    Field::make('image', 'hm_banner_image', 'Imagen')
			        ->set_width(50)
			        ->set_value_type('url')
			        ->set_help_text('Imagen principal mostrada en la columna izquierda.'),

			    Field::make('text', 'hm_banner_title', 'Título')
			        ->set_width(50)
			        ->set_help_text('Título principal de la sección.'),

			    Field::make('textarea', 'hm_banner_description', 'Descripción')
			        ->set_width(100)
			        ->set_help_text('Texto descriptivo mostrado debajo del título.'),

			    Field::make('text', 'hm_banner_button_text', 'Texto del botón')
			        ->set_width(50)
			        ->set_help_text('Texto visible dentro del botón.'),

			    Field::make('text', 'hm_banner_button_link', 'Link del botón')
			        ->set_width(50)
			        ->set_help_text('URL a la que dirigirá el botón.'),

			    Field::make('association', 'hm_banner_products', 'Productos destacados')
			        ->set_width(100)
			        ->set_help_text('Seleccione los productos de WooCommerce que se mostrarán en esta sección.')
			        ->set_types([
			            [
			                'type'      => 'post',
			                'post_type' => 'product',
			            ],
			        ]),
			]);

}