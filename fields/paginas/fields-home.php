<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_home_fields');

function cf_home_fields() {

    Container::make('post_meta', 'Página de Inicio')
        ->where('post_id', '=', get_option('page_on_front'))

        ->add_tab('Banner', [

            Field::make('complex', 'hm_hero_slider', 'Carrusel de banners')
                ->set_layout('tabbed-horizontal')
                ->add_fields([

                    Field::make('image', 'hm_hero_background_image', 'Imagen de fondo')
                        ->set_width(50)
                        ->set_value_type('url'),

                    Field::make('image', 'hm_hero_character_image', 'Imagen de personajes')
                        ->set_width(50)
                        ->set_value_type('url'),

                    Field::make('text', 'hm_hero_title_1', 'Título - Línea 1')
                        ->set_width(32),

                    Field::make('text', 'hm_hero_title_2', 'Título - Línea 2')
                        ->set_width(32),

                    Field::make('text', 'hm_hero_title_3', 'Título - Línea 3')
                        ->set_width(32),

                    Field::make('textarea', 'hm_hero_description', 'Descripción')
                        ->set_help_text('Esta descripción se encuentra debajo del título principal.'),

                    Field::make('text', 'hm_hero_button_text', 'Texto del botón')
                        ->set_width(50),

                    Field::make('text', 'hm_hero_button_link', 'Link del botón')
                        ->set_width(50),

                ])

        ])

        ->add_tab('Categorías', [

            Field::make('text', 'hm_categories_title_1', 'Título de la sección - Línea 1')
                ->set_width(50)
                ->set_help_text('Primera línea del título principal de la sección Categorías.'),

            Field::make('text', 'hm_categories_title_2', 'Título de la sección - Línea 2')
                ->set_width(50)
                ->set_help_text('Segunda línea del título principal de la sección Categorías.'),

            Field::make('textarea', 'hm_categories_description', 'Descripción')
                ->set_width(100)
                ->set_help_text('Texto descriptivo mostrado debajo del título principal de la sección Categorías.'),

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
        
        ->add_tab('Franja de decuentos y promociones', [ 

        	Field::make('image', 'hm_discount_divider_image', 'Imagen separadora')
			    ->set_value_type('url')
			    ->set_help_text('Imagen mostrada entre cada elemento de descuento.'),

			Field::make('complex', 'hm_discount_items', 'Items de descuentos')
			    ->set_layout('tabbed-horizontal')
			    ->add_fields([

			        Field::make('image', 'icon', 'Ícono')
			            ->set_width(30)
			            ->set_value_type('url')
			            ->set_help_text('Ícono mostrado junto al texto.'),

			        Field::make('text', 'title_1', 'Texto - Línea 1')
			            ->set_width(35)
			            ->set_help_text('Primera línea del texto.'),

			        Field::make('text', 'title_2', 'Texto - Línea 2')
			            ->set_width(35)
			            ->set_help_text('Segunda línea del texto resaltado.'),

			    ])
			    ->set_help_text('Agregue los beneficios o descuentos que se mostrarán en la franja.'),

        ])

        ->add_tab('Productos en descuento', [ 

        	Field::make('image', 'hm_products_banner_image', 'Imagen del banner')
			    ->set_width(50)
			    ->set_value_type('url')
			    ->set_help_text('Imagen promocional mostrada al lado izquierdo de la sección.'),

			Field::make('text', 'hm_products_banner_title', 'Título del banner')
			    ->set_width(50)
			    ->set_help_text('Título principal mostrado dentro del banner.'),

			Field::make('textarea', 'hm_products_banner_description', 'Descripción del banner')
			    ->set_width(100)
			    ->set_help_text('Texto descriptivo mostrado debajo del título.'),

			Field::make('text', 'hm_products_banner_button_text', 'Texto del botón')
			    ->set_width(50)
			    ->set_help_text('Texto visible dentro del botón.'),

			Field::make('text', 'hm_products_banner_button_link', 'Link del botón')
			    ->set_width(50)
			    ->set_help_text('URL a la que dirigirá el botón.'),

			Field::make('association', 'hm_products_featured', 'Productos destacados')
			    ->set_width(100)
			    ->set_help_text('Seleccione los productos de WooCommerce que aparecerán en el carrusel.')
			    ->set_types([
			        [
			            'type'      => 'post',
			            'post_type' => 'product',
			        ],
			    ]),

        ])

        ->add_tab('Transparencia', [ 

        	Field::make('text', 'hm_transparency_title_1', 'Título de la sección - Línea 1')
			    ->set_width(50),

			Field::make('text', 'hm_transparency_title_2', 'Título de la sección - Línea 2')
			    ->set_width(50),

			Field::make('complex', 'hm_transparency_cards', 'Tarjetas de transparencia')
			    ->set_layout('tabbed-horizontal')
			    ->add_fields([

			        Field::make('image', 'icon', 'Ícono')
			            ->set_width(30)
			            ->set_value_type('url'),

			        Field::make('text', 'title', 'Título')
			            ->set_width(70),

			        Field::make('textarea', 'description', 'Descripción')
			            ->set_width(100),

			    ]),

			Field::make('image', 'hm_transparency_highlight_icon', 'Ícono del mensaje destacado')
			    ->set_width(25)
			    ->set_value_type('url')
			    ->set_help_text('Ícono mostrado al inicio del mensaje destacado.'),

			Field::make('text', 'hm_transparency_highlight_text_1', 'Mensaje destacado 1')
			    ->set_width(37)
			    ->set_help_text('Ejemplo: Miles de familias y mascotas felices nos recomiendan.'),

			Field::make('text', 'hm_transparency_highlight_text_2', 'Mensaje destacado 2')
			    ->set_width(37)
			    ->set_help_text('Ejemplo: Tu confianza es nuestro mayor compromiso.'),

			Field::make('complex', 'hm_transparency_benefits', 'Beneficios inferiores')
			    ->set_layout('tabbed-horizontal')
			    ->add_fields([

			        Field::make('image', 'icon', 'Ícono')
			            ->set_width(30)
			            ->set_value_type('url'),

			        Field::make('text', 'text', 'Texto')
			            ->set_width(70),

			    ]),

        ]);

}