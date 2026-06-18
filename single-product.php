<?php get_header(); ?>

<?php
$product = wc_get_product(get_the_ID());
$gallery_ids = $product->get_gallery_image_ids();
$product_categories = get_the_terms(get_the_ID(), 'product_cat');
$attributes = $product->get_attributes();
?>

<section class="seccion producto-single text_ms">
    <div class="container-seccion">
        <div class="wrp-seccion producto-single_wrp">

            <!-- GALERÍA -->
            <div class="producto-single_galeria">
                <div class="producto-single_thumbs">
                    <?php foreach ($gallery_ids as $gallery_id) : ?>
                        <div class="producto-single_thumb">
                            <?php echo wp_get_attachment_image($gallery_id, 'thumbnail'); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="producto-single_imagen">
                    <?php
                    $image_url = wp_get_attachment_image_url($product->get_image_id(), 'full');
                    if ($image_url) {
                        echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '" class="img_stili">';
                    }
                    ?>
                    <div class="zoom-lens"></div>
                </div>
            </div>

            <!-- INFORMACIÓN -->
            <div class="producto-single_info">
                <div class="producto-single_categoria">
                    <?php if (!empty($product_categories)) echo esc_html($product_categories[0]->name); ?>
                </div>

                <h1 class="producto-single_titulo"><?php the_title(); ?></h1>

                <div class="producto-single_rating">
                    <div class="producto-single_estrellas">★★★★★</div>
                    <div class="producto-single_reviews">128 reseñas</div>
                </div>

                <div class="producto-single_precio">
                    <?php echo wp_kses_post($product->get_price_html()); ?>
                </div>

                <div class="producto-single_descripcion">
                    <?php
                    $product_description = $product->get_description();
                    if (!empty($product_description)) {
                        echo apply_filters('the_content', $product_description);
                    } else {
                        echo '<p>' . $product->get_short_description() . '</p>';
                    }
                    ?>
                </div>

                <!-- ATRIBUTOS -->
                <?php if (!empty($attributes)) : ?>
                    <?php
                    $atributos_principales = [];
                    $atributos_secundarios = [];

                    foreach ($attributes as $attribute) {
                        $terms = wc_get_product_terms(get_the_ID(), $attribute->get_name(), array('fields' => 'all'));
                        $label = strtolower(wc_attribute_label($attribute->get_name()));
                        $item = ['attribute' => $attribute, 'terms' => $terms];

                        if (($label === 'peso' || $label === 'talla') && count($terms) > 1) {
                            $atributos_principales[] = $item;
                        } else {
                            $atributos_secundarios[] = $item;
                        }
                    }
                    ?>

                    <?php if (!empty($atributos_principales)) : ?>
                        <div class="producto-single_atributos producto-single_atributos-principales">
                            <?php foreach ($atributos_principales as $item) : ?>
                                <div class="producto-single_bloque">
                                    <div class="producto-single_label"><?php echo wc_attribute_label($item['attribute']->get_name()); ?></div>
                                    <div class="producto-single_variaciones">
                                        <?php foreach ($item['terms'] as $term) : ?>
                                            <button type="button" class="producto-single_var" data-attribute="<?php echo esc_attr($item['attribute']->get_name()); ?>" data-value="<?php echo esc_attr($term->slug); ?>">
                                                <?php echo esc_html($term->name); ?>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($atributos_secundarios)) : ?>
                        <div class="producto-single_atributos producto-single_atributos-secundarios">
                            <?php foreach ($atributos_secundarios as $item) : ?>
                                <div class="producto-single_bloque">
                                    <div class="producto-single_label"><?php echo wc_attribute_label($item['attribute']->get_name()); ?></div>
                                    <div class="producto-single_variaciones">
                                        <?php foreach ($item['terms'] as $term) : ?>
                                            <button type="button" class="producto-single_var" data-attribute="<?php echo esc_attr($item['attribute']->get_name()); ?>" data-value="<?php echo esc_attr($term->slug); ?>">
                                                <?php echo esc_html($term->name); ?>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- CANTIDAD Y AGREGAR AL CARRITO -->
                <div class="producto-single_bloque">
                    <div class="producto-single_label">Cantidad</div>

                    <div class="producto-single_compra">
                        <div class="producto-single_cantidad">
                            <button type="button" class="btn-minus">−</button>
                            <input type="number" class="qty-input" value="1" min="1" max="999">
                            <button type="button" class="btn-plus">+</button>
                        </div>

                        <div class="producto-single_btn-wrapper">
                            <button type="button" class="producto-single_btn" 
                                data-product-id="<?php echo get_the_ID(); ?>">
                                Agregar al carrito
                            </button>
                        </div>
                    </div>
                </div>

                <!-- BENEFICIOS -->
                <div class="producto-single_beneficios">
                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/envios-caja.png" class="producto_iconBenet" alt="Envíos">
                        </div>
                        <span>Envíos a todo el Perú</span>
                    </div>
                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/seguridad.png" alt="Compra segura">
                        </div>
                        <span>Compra segura</span>
                    </div>
                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/soporte-personalizado.png" alt="Atención personalizada">
                        </div>
                        <span>Atención personalizada</span>
                    </div>
                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/garantia.png" alt="Productos seleccionados">
                        </div>
                        <span>Productos seleccionados</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>