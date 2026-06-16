<?php
// parts/loop-productos.php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
    'paged' => $paged
);

$productos = new WP_Query($args);

if ($productos->have_posts()) :
    while ($productos->have_posts()) : $productos->the_post();
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
    echo '<div class="no-productos">No hay productos disponibles</div>';
endif;
?>