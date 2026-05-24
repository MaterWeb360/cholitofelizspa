<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'cf_opciones_generales_fields');

function cf_opciones_generales_fields() {

    Container::make('theme_options', 'Opciones Generales')

        ->add_tab('Menu', [

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

        ->add_tab('Redes Sociales', [

        ]);

}