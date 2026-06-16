<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

// Permitir subida de archivos SVG
    function permitir_svg($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
add_filter('upload_mimes', 'permitir_svg');

add_filter('tiny_mce_before_init', function ($init) {

    $init['textcolor_map'] = '[
        "da6936", "Naranja",
        "4b2f1e", "Marrón",
        "b5934b", "Dorado"
    ]';

    return $init;
});
require_once get_template_directory() . '/fields/paginas/fields-home.php';
require_once get_template_directory() . '/fields/paginas/fields-nosotros.php';
require_once get_template_directory() . '/fields/paginas/fields-contacto.php';
require_once get_template_directory() . '/fields/paginas/fields-tienda.php';
require_once get_template_directory() . '/fields/paginas/fields-legales.php';
require_once get_template_directory() . '/fields/paginas/fields-libro-de-reclamaciones.php';
require_once get_template_directory() . '/fields/paginas/opciones-generales.php';



// ==============================================
// FUNCIONES PARA FILTROS DINÁMICOS DE TIENDA
// ==============================================

// Obtener términos de atributos para mostrar en filtros
function obtener_filtros_atributos() {
    $atributos = array(
        'edad' => array(
            'nombre' => 'Edad',
            'slug' => 'edad',
            'terminos' => array('Adulto', 'Cachorro', 'Senior')
        ),
        'marca' => array(
            'nombre' => 'Marca',
            'slug' => 'marca',
            'terminos' => array('Biofresh', 'Bravery', 'Brit Care', 'Brit Premium', 'Canbo', 'Excellent', 'Gran Plus', 'Hills', 'Pro Plan')
        ),
        'mascota' => array(
            'nombre' => 'Mascota',
            'slug' => 'mascota',
            'terminos' => array('Ave', 'Conejo', 'Gato', 'Hamster', 'Perro')
        ),
        'peso' => array(
            'nombre' => 'Peso',
            'slug' => 'peso',
            'terminos' => array('1.5kg', '2kg', '3kg', '4kg', '7kg', '8kg', '10.1kg', '12kg', '15kg', '50kg')
        ),
        'talla' => array(
            'nombre' => 'Talla',
            'slug' => 'talla',
            'terminos' => array('XS', 'S', 'M', 'L', 'XL')
        )
    );
    
    return $atributos;
}

// AJAX Handler para filtrar productos
add_action('wp_ajax_filtrar_productos', 'filtrar_productos_callback');
add_action('wp_ajax_nopriv_filtrar_productos', 'filtrar_productos_callback');

function filtrar_productos_callback() {
    // Verificar nonce
    if (!check_ajax_referer('tienda_filtros_nonce', 'nonce', false)) {
        wp_die('Error de seguridad');
    }
    
    $productos_por_pagina = 12;
    $pagina = isset($_POST['pagina']) ? intval($_POST['pagina']) : 1;
    $offset = ($pagina - 1) * $productos_por_pagina;
    
    // Obtener filtros
    $categorias = isset($_POST['categorias']) ? array_map('sanitize_text_field', $_POST['categorias']) : array();
    $atributos = isset($_POST['atributos']) ? $_POST['atributos'] : array();
    
    // Construir query args
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $productos_por_pagina,
        'offset' => $offset,
        'post_status' => 'publish'
    );
    
    // Filtrar por categorías (incluyendo subcategorías)
    if (!empty($categorias)) {
        // Obtener todas las categorías y sus hijos
        $todas_las_categorias = array();
        
        foreach ($categorias as $categoria_slug) {
            // Agregar la categoría padre
            $todas_las_categorias[] = $categoria_slug;
            
            // Obtener los términos hijos de esta categoría
            $term = get_term_by('slug', $categoria_slug, 'product_cat');
            if ($term) {
                $hijos = get_term_children($term->term_id, 'product_cat');
                if (!empty($hijos)) {
                    foreach ($hijos as $hijo_id) {
                        $hijo_term = get_term_by('id', $hijo_id, 'product_cat');
                        if ($hijo_term) {
                            $todas_las_categorias[] = $hijo_term->slug;
                        }
                    }
                }
            }
        }
        
        // Eliminar duplicados
        $todas_las_categorias = array_unique($todas_las_categorias);
        
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $todas_las_categorias,
                'operator' => 'IN'
            )
        );
        
        error_log('Categorías filtradas (incluyendo hijas): ' . print_r($todas_las_categorias, true));
    }
    // Filtrar por atributos
    $tax_queries = array();
    foreach ($atributos as $tax_slug => $terms) {
        if (!empty($terms)) {
            $tax_queries[] = array(
                'taxonomy' => 'pa_' . $tax_slug, // prefix para atributos de producto
                'field' => 'slug',
                'terms' => $terms,
                'operator' => 'IN'
            );
        }
    }
    
    if (!empty($tax_queries)) {
        if (isset($args['tax_query'])) {
            $args['tax_query']['relation'] = 'AND';
            $args['tax_query'] = array_merge($args['tax_query'], $tax_queries);
        } else {
            $args['tax_query'] = $tax_queries;
        }
    }
    
    $query = new WP_Query($args);
    $total_productos = $query->found_posts;
    $total_paginas = ceil($total_productos / $productos_por_pagina);
    
    ob_start();
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            global $product;
            ?>
            <a href="<?php the_permalink(); ?>" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
                    <div class="tarjetaproducto_head-cont">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" loading="lazy" alt="<?php the_title(); ?>" class="tarjetaproductos_producto">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-26-abr-2026-05_00_04-p.m.-1.png" loading="lazy" alt="" class="tarjetaproductos_producto">
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                    <div class="tarjetaproducto_nombre"><?php the_title(); ?></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                    <p class="tarjetaproducto_precio"><?php echo $product->get_price_html(); ?></p>
                    <div class="button is-tarjeta">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Ver producto</div>
                    </div>
                </div>
            </a>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<div class="no-productos">No se encontraron productos con los filtros seleccionados.</div>';
    endif;
    
    $productos_html = ob_get_clean();
    
    // Generar paginación
    ob_start();
    if ($total_paginas > 1) :
        ?>
        <div class="paginacion">
            <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                <button class="pagina-btn <?php echo $i == $pagina ? 'activa' : ''; ?>" data-pagina="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </button>
            <?php endfor; ?>
        </div>
        <?php
    endif;
    $paginacion_html = ob_get_clean();
    
    $inicio = $offset + 1;
    $fin = min($offset + $productos_por_pagina, $total_productos);
    $contador_html = "Mostrando {$inicio}-{$fin} de {$total_productos} productos";
    
    wp_send_json_success(array(
        'productos' => $productos_html,
        'paginacion' => $paginacion_html,
        'contador' => $contador_html,
        'total' => $total_productos,
        'pagina_actual' => $pagina,
        'total_paginas' => $total_paginas
    ));
    
    wp_die();
}

// Cargar scripts para producto single
add_action('wp_enqueue_scripts', 'producto_single_scripts');
function producto_single_scripts() {
    if (is_product()) {
        wp_enqueue_script('producto-single', get_template_directory_uri() . '/js/producto-single.js', array('jquery'), '1.0', true);
        
        // Pasar datos a JS
        wp_localize_script('producto-single', 'wc_add_to_cart_params', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'checkout_url' => wc_get_checkout_url()
        ));
    }
}