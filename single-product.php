<?php get_header(); ?>

<?php

$product = wc_get_product(get_the_ID());

$gallery_ids = $product->get_gallery_image_ids();

$product_categories = get_the_terms(get_the_ID(), 'product_cat');

$attributes = $product->get_attributes();

?>

<?php



?>
    <!--<section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2">En nuestra tienda,<br><span class="text-color-orange">encontrarás lo que buscas</span></h1>
              <p>Encuentra alimentos, accesorios, camas, juguetes y productos seleccionados para el bienestar de tu compañero.</p>
            </div>
            <div class="hero_info-imagen"><img src="<?php echo get_template_directory_uri(); ?>/images/perrito-marron.png" loading="lazy"  alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>-->

    <section class="seccion producto-single text_ms">

        <div class="container-seccion">

            <div class="wrp-seccion producto-single_wrp">

                <!-- GALERÍA -->
                        <div class="producto-single_galeria">

                            <div class="producto-single_thumbs">


                                <?php foreach ($gallery_ids as $gallery_id) : ?>

                                    <div class="producto-single_thumb">

                                        <?php
                                        echo wp_get_attachment_image(
                                            $gallery_id,
                                            'thumbnail'
                                        );
                                        ?>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                           <div class="producto-single_imagen">

                                <?php

                                $image_url = wp_get_attachment_image_url(
                                    $product->get_image_id(),
                                    'full'
                                );

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

                        <?php

                        if (!empty($product_categories)) {
                            echo esc_html($product_categories[0]->name);
                        }

                        ?>

                    </div>

                    <h1 class="producto-single_titulo">
                        <?php the_title(); ?>
                    </h1>

                    <div class="producto-single_rating">

                        <div class="producto-single_estrellas">
                            ★★★★★
                        </div>

                        <div class="producto-single_reviews">
                            128 reseñas
                        </div>

                    </div>

                    <div class="producto-single_precio">
                        <?php echo wp_kses_post($product->get_price_html());?>
                    </div>

                    <div class="producto-single_descripcion">
                        <?php 
                        // Mostrar la descripción larga (contenido del producto)
                        $product_description = $product->get_description();
                        
                        if (!empty($product_description)) {
                            echo apply_filters('the_content', $product_description);
                        } else {
                            // Si no hay descripción larga, mostrar la corta como fallback
                            echo '<p>' . $product->get_short_description() . '</p>';
                        }
                        ?>
                    </div>

                    <?php if (!empty($attributes)) : ?>

                        <?php

                        $atributos_principales = [];
                        $atributos_secundarios = [];

                        foreach ($attributes as $attribute) {

                            $terms = wc_get_product_terms(
                                get_the_ID(),
                                $attribute->get_name(),
                                array(
                                    'fields' => 'all'
                                )
                            );

                            $label = strtolower(
                                wc_attribute_label($attribute->get_name())
                            );

                            $item = [
                                'attribute' => $attribute,
                                'terms' => $terms
                            ];

                            if (
                                ($label === 'peso' || $label === 'talla')
                                && count($terms) > 1
                            ) {

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

                                        <div class="producto-single_label">
                                            <?php echo wc_attribute_label($item['attribute']->get_name()); ?>
                                        </div>

                                        <div class="producto-single_variaciones">

                                            <?php foreach ($item['terms'] as $term) : ?>

                                                <button
                                                    type="button"
                                                    class="producto-single_var"
                                                    data-attribute="<?php echo esc_attr($item['attribute']->get_name()); ?>"
                                                    data-value="<?php echo esc_attr($term->slug); ?>">

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

                                        <div class="producto-single_label">
                                            <?php echo wc_attribute_label($item['attribute']->get_name()); ?>
                                        </div>

                                        <div class="producto-single_variaciones">

                                            <?php foreach ($item['terms'] as $term) : ?>

                                                <button
                                                    type="button"
                                                    class="producto-single_var"
                                                    data-attribute="<?php echo esc_attr($item['attribute']->get_name()); ?>"
                                                    data-value="<?php echo esc_attr($term->slug); ?>">

                                                    <?php echo esc_html($term->name); ?>

                                                </button>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                    <!-- CANTIDAD -->
                    <div class="producto-single_bloque">

                        <div class="producto-single_label">
                            Cantidad
                        </div>

                        <div class="producto-single_compra">

                            <div class="producto-single_cantidad">

                                <button>-</button>

                                <input type="number" value="1">

                                <button>+</button>

                            </div>

                            <button class="producto-single_btn">
                                Agregar al carrito
                            </button>

                        </div>

                    </div>

                    <button class="producto-single_btn" data-product-id="<?php echo get_the_ID(); ?>">
                        Agregar al carrito
                    </button>

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