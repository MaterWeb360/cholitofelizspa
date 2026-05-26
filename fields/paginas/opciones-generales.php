<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_opciones_generales_fields');

function cf_opciones_generales_fields() {

    Container::make('theme_options', 'Opciones Generales')

        ->add_tab('Menu', [

            Field::make('image', 'gl_menu_logo', 'Logo')
                ->set_width(100)
                ->set_help_text('Logo principal mostrado en la cabecera.'),

            Field::make('complex', 'gl_menu_trust_items', 'Beneficios inferiores')
                ->set_layout('tabbed-horizontal')
                ->set_help_text('Beneficios mostrados en la parte inferior de todos los mega menús.')
                ->add_fields([

                    Field::make('image', 'icon', 'Icono')
                        ->set_width(30),

                    Field::make('text', 'text', 'Texto')
                        ->set_width(70),

                ]),

            Field::make('complex', 'gl_menu_items', 'Items del menú')
                ->set_layout('tabbed-horizontal')
                ->add_fields([

                    Field::make('image', 'icon', 'Icono del menú')
                        ->set_width(25),

                    Field::make('text', 'title', 'Título')
                        ->set_width(25),

                    Field::make('select', 'menu_type', 'Tipo de menú')
                        ->add_options([
                            'simple' => 'Link simple',
                            'institutional' => 'Institucional',
                            'categories_woo' => 'Categorías WooCommerce',
                        ])
                        ->set_width(25),

                    Field::make('text', 'page_linky', 'Link')
                        ->set_help_text('Página enlazada para el item del menú.')
                        ->set_conditional_logic([
                            'relation' => 'AND',
                            [
                                'field' => 'menu_type',
                                'value' => 'simple',
                                'compare' => '=',
                            ],
                        ])
                        ->set_width(25),

                    Field::make('image', 'character_image', 'Imagen lateral')
                        ->set_width(100)
                        ->set_help_text('Imagen mostrada al lado derecho del mega menú.')
                        ->set_conditional_logic([
                            'relation' => 'AND',
                            [
                                'field' => 'menu_type',
                                'value' => ['institutional', 'categories_woo'],
                                'compare' => 'IN',
                            ],
                        ]),

                    /*
                    |--------------------------------------------------------------------------
                    | COLUMNAS INSTITUCIONALES
                    |--------------------------------------------------------------------------
                    */

                    Field::make('complex', 'institutional_columns', 'Columnas institucionales')
                        ->set_layout('tabbed-horizontal')
                        ->set_help_text('Columnas utilizadas para el menú institucional.')
                        ->set_conditional_logic([
                            'relation' => 'AND',
                            [
                                'field' => 'menu_type',
                                'value' => 'institutional',
                                'compare' => '=',
                            ],
                        ])
                        ->add_fields([

                            Field::make('image', 'icon', 'Icono')
                                ->set_width(25),

                            Field::make('text', 'title', 'Título')
                                ->set_width(75),

                            Field::make('complex', 'links', 'Links')
                                ->set_layout('tabbed-horizontal')
                                ->add_fields([

                                    Field::make('text', 'label', 'Texto')
                                        ->set_width(50),

                                    Field::make('text', 'url', 'URL')
                                        ->set_width(50),

                                ]),

                        ]),

                    /*
                    |--------------------------------------------------------------------------
                    | REDES SOCIALES
                    |--------------------------------------------------------------------------
                    */

                    Field::make('complex', 'social_links', 'Redes sociales')
                        ->set_layout('tabbed-horizontal')
                        ->set_help_text('Redes sociales mostradas dentro del menú institucional.')
                        ->set_conditional_logic([
                            'relation' => 'AND',
                            [
                                'field' => 'menu_type',
                                'value' => 'institutional',
                                'compare' => '=',
                            ],
                        ])
                        ->add_fields([

                            Field::make('image', 'icon', 'Icono')
                                ->set_width(25),

                            Field::make('text', 'label', 'Texto')
                                ->set_width(35),

                            Field::make('text', 'url', 'URL')
                                ->set_width(40),

                        ]),

                    /*
                    |--------------------------------------------------------------------------
                    | COLUMNAS WOOCOMMERCE
                    |--------------------------------------------------------------------------
                    */

                    Field::make('complex', 'category_columns', 'Columnas de categorías')
                        ->set_layout('tabbed-horizontal')
                        ->set_help_text('Columnas utilizadas para Perro, Gato u otras mascotas.')
                        ->set_conditional_logic([
                            'relation' => 'AND',
                            [
                                'field' => 'menu_type',
                                'value' => 'categories_woo',
                                'compare' => '=',
                            ],
                        ])
                        ->add_fields([

                            Field::make('image', 'icon', 'Icono')
                                ->set_width(25),

                            Field::make('text', 'title', 'Título')
                                ->set_width(37),

                            Field::make('text', 'subtitle', 'Subtítulo')
                                ->set_width(38),

                            Field::make('association', 'parent_category', 'Categoría principal')
                                ->set_types([
                                    [
                                        'type' => 'term',
                                        'taxonomy' => 'product_cat',
                                    ]
                                ])
                                ->set_width(100)
                                ->set_help_text('Categoría principal de WooCommerce. Las subcategorías se mostrarán automáticamente.'),

                            Field::make('text', 'button_text', 'Texto del botón')
                                ->set_width(50)
                                ->set_help_text('Ejemplo: Ver todos'),

                        ]),

                ]),

        ])
        ->add_tab('Footer', [

        ])

        ->add_tab('Scripts', [

        ])

        ->add_tab('Sedes', [

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

        ->add_tab('Redes Sociales', [

        ]);

}