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

    ]);

}