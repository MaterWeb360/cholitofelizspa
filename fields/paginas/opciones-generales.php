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
                        ->set_layout('tabbed-vertical')
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
                        ->set_layout('tabbed-vertical')
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
                    ->set_layout('tabbed-vertical')
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

                        Field::make('text', 'button_text', 'Texto del botón')
                            ->set_width(50)
                            ->set_help_text('Ejemplo: Ver todos'),

                        Field::make('text', 'button_link', 'Enlace del botón')
                            ->set_width(50)
                            ->set_help_text('Ejemplo: https://tutienda.com/categoria/perros'),

                        Field::make('complex', 'custom_links', 'Enlaces personalizados')
                            ->set_layout('tabbed-horizontal')
                            ->set_help_text('Agrega los enlaces que quieras mostrar en esta columna')
                            ->add_fields([
                                Field::make('text', 'link_text', 'Texto del enlace')
                                    ->set_width(50),
                                Field::make('text', 'link_url', 'URL del enlace')
                                    ->set_width(50),
                            ]),

                    ]),

                ]),
        ])
        ->add_tab('Pié de página', [

            // Logo del footer
            Field::make('image', 'gl_footer_logo', 'Logo del pié de página')
                ->set_width(100)
                ->set_help_text('Logo mostrado en el footer'),

            // Texto del mensaje principal
            Field::make('textarea', 'gl_footer_message', 'Mensaje principal')
                ->set_width(100)
                ->set_help_text('Texto que acompaña al logo'),

            // Icono del corazón
            Field::make('image', 'gl_footer_heart_icon', 'Icono del corazón')
                ->set_width(100)
                ->set_help_text('Icono de corazón junto al mensaje'),

            // ========== COLUMNA 2: PRODUCTOS ==========
            Field::make('text', 'gl_footer_products_title', 'Título - Productos')
                ->set_width(100),

            Field::make('complex', 'gl_footer_products_links', 'Enlaces de productos')
                ->set_layout('tabbed-horizontal')
                ->set_help_text('Enlaces para la columna de productos')
                ->add_fields([
                    Field::make('text', 'label', 'Texto del enlace')
                        ->set_width(60),
                    Field::make('text', 'link_url', 'URL')
                        ->set_width(40),
                ]),

            // ========== COLUMNA 3: PÁGINAS ==========
            Field::make('text', 'gl_footer_pages_title', 'Título - Nuestras páginas')
                ->set_width(100)
                ->set_default_value('nuestras Páginas'),

            Field::make('complex', 'gl_footer_pages_links', 'Enlaces de páginas')
                ->set_layout('tabbed-vertical')
                ->set_help_text('Enlaces para la columna de páginas')
                ->add_fields([
                    Field::make('text', 'label', 'Texto del enlace')
                        ->set_width(60),
                    Field::make('text', 'link_url', 'URL')
                        ->set_width(40),
                ]),

            // ========== COLUMNA 4: ATENCIÓN AL CLIENTE ==========
            Field::make('text', 'gl_footer_support_title', 'Título - Atención al cliente')
                ->set_width(100)
                ->set_default_value('ATENCIÓN AL CLIENTE'),

            Field::make('complex', 'gl_footer_support_links', 'Información de contacto')
                ->set_layout('tabbed-horizontal')
                ->set_help_text('Teléfono, email, horarios, etc.')
                ->add_fields([
                    Field::make('rich_text', 'label', 'Texto descriptivo')
                        ->set_width(50),
                    Field::make('text', 'content', 'link')
                        ->set_width(50),
                ]),

            // ========== COLUMNA 5: REDES SOCIALES ==========
            Field::make('text', 'gl_footer_social_title', 'Título - Redes sociales')
                ->set_width(100)
                ->set_default_value('siguenos en redes'),

            Field::make('text', 'gl_footer_email', 'Email de contacto')
                ->set_width(100),

            Field::make('complex', 'gl_footer_social_links', 'Enlaces de redes sociales')
                ->set_layout('tabbed-horizontal')
                ->set_help_text('Agrega tus redes sociales')
                ->add_fields([
                    Field::make('image', 'icon', 'Icono')
                        ->set_width(30),
                    Field::make('text', 'url', 'URL')
                        ->set_width(70),
                ]),

            // ========== FILA INFERIOR (libro de reclamaciones) ==========
            Field::make('image', 'gl_footer_bottom_image', 'Imagen decorativa (gato)')
                ->set_width(100)
                ->set_help_text('Imagen que aparece en la parte inferior del pié de página'),

            Field::make('text', 'gl_footer_libro_title', 'Título - Libro de reclamaciones')
                ->set_width(100)
                ->set_default_value('ATENCIÓN AL CLIENTE'),

            Field::make('textarea', 'gl_footer_libro_description', 'Descripción - Libro de reclamaciones')
                ->set_width(100)
                ->set_default_value('Tu opinion es importante. Conoce cómo presentar tu reclamo aquí.'),

            Field::make('text', 'gl_footer_libro_button_text', 'Texto del botón')
                ->set_width(60)
                ->set_default_value('Ir al libro de reclamaciones'),

            Field::make('text', 'gl_footer_libro_button_url', 'URL del botón')
                ->set_width(40)
                ->set_default_value(home_url('/libro-de-reclamaciones')),

            // ========== MEDIOS DE PAGO ==========
            Field::make('text', 'gl_footer_payment_title', 'Título - Medios de pago')
                ->set_width(100)
                ->set_default_value('Medios de pago'),

            Field::make('image', 'gl_footer_payment_image', 'Imagen de medios de pago')
                ->set_width(100)
                ->set_help_text('Imagen con los logos de pago'),

            // ========== ENVÍOS RÁPIDOS ==========
            Field::make('image', 'gl_footer_shipping_icon', 'Icono de envíos')
                ->set_width(100),

            Field::make('text', 'gl_footer_shipping_title', 'Título - Envíos')
                ->set_width(100)
                ->set_default_value('ENvíOS RÁPIDOS'),

            Field::make('text', 'gl_footer_shipping_text', 'Texto de envíos')
                ->set_width(100)
                ->set_default_value('A todo el Perú'),

            // ========== IMAGEN DE FONDO ==========
            Field::make('image', 'gl_footer_background', 'Imagen de fondo del pié de página')
                ->set_width(100)
                ->set_help_text('Imagen de fondo que se muestra detrás del pié de página'),
        ])
        ->add_tab('Scripts', [

            Field::make('textarea', 'og_script_head', 'Título principal - Línea 1')
                ->set_help_text('Colocar los scripts en head')
                ->set_width(50),

            Field::make('textarea', 'og_script_footer', 'Título principal - Línea 2')
                ->set_width(50)
                ->set_help_text('Colocar los scripts que van despues del </body>.'),
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