<?php get_header(); ?>

<?php

// Banner
  $con_hero_title_1     = carbon_get_post_meta(get_the_ID(), 'con_hero_title_1');
  $con_hero_title_2     = carbon_get_post_meta(get_the_ID(), 'con_hero_title_2');
  $con_hero_description = carbon_get_post_meta(get_the_ID(), 'con_hero_description');
  $con_hero_main_image  = carbon_get_post_meta(get_the_ID(), 'con_hero_main_image');

// Contacto
  $con_contact_tag                  = carbon_get_post_meta(get_the_ID(), 'con_contact_tag');
  $con_contact_title                = carbon_get_post_meta(get_the_ID(), 'con_contact_title');
  $con_contact_description          = carbon_get_post_meta(get_the_ID(), 'con_contact_description');
  $con_contact_methods              = carbon_get_post_meta(get_the_ID(), 'con_contact_methods');
  $con_contact_social_icon          = carbon_get_post_meta(get_the_ID(), 'con_contact_social_icon');
  $con_contact_social_title         = carbon_get_post_meta(get_the_ID(), 'con_contact_social_title');
  $con_contact_social_description   = carbon_get_post_meta(get_the_ID(), 'con_contact_social_description');
  $con_contact_social_links         = carbon_get_post_meta(get_the_ID(), 'con_contact_social_links');
  $con_contact_features             = carbon_get_post_meta(get_the_ID(), 'con_contact_features');

// Productos de Interés
  $con_featured_products_title_1    = carbon_get_post_meta(get_the_ID(), 'con_featured_products_title_1');
  $con_featured_products_title_2    = carbon_get_post_meta(get_the_ID(), 'con_featured_products_title_2');
  $con_featured_products_description = carbon_get_post_meta(get_the_ID(), 'con_featured_products_description');
  $con_featured_products            = carbon_get_post_meta(get_the_ID(), 'con_featured_products');

// Productos favoritos
    $hm_banner_image        = carbon_get_post_meta(get_the_ID(), 'hm_banner_image');
    $hm_banner_title        = carbon_get_post_meta(get_the_ID(), 'hm_banner_title');
    $hm_banner_description  = carbon_get_post_meta(get_the_ID(), 'hm_banner_description');
    $hm_banner_button_text  = carbon_get_post_meta(get_the_ID(), 'hm_banner_button_text');
    $hm_banner_button_link  = carbon_get_post_meta(get_the_ID(), 'hm_banner_button_link');
    $hm_banner_products     = carbon_get_post_meta(get_the_ID(), 'hm_banner_products');

?>

    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2"><?= $con_hero_title_1; ?><br><span class="text-color-orange"><?= $con_hero_title_2 ; ?></span></h1>
              <p><?= $con_hero_description; ?></p>
            </div>
            <div class="hero_info-imagen"><img src="<?= $con_hero_main_image; ?>" loading="lazy" alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img sizes="100vw" alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion is-beige">
        <div class="padding-seccion">
            <div class="container-seccion">
                <div class="wrp-seccion is-center">

                    <div class="contacto_wrp">

                        <div class="contacto_col">

                            <div class="contacto_etiqueta">
                                <div>
                                    <?php echo esc_html($con_contact_tag); ?>
                                </div>
                            </div>

                            <div class="contacto_title">
                                <h2 class="heading-h1">
                                    <?php echo esc_html($con_contact_title); ?>
                                </h2>
                            </div>

                            <div>
                                <?php echo apply_filters('the_content', $con_contact_description); ?>
                            </div>

                        </div>

                        <div class="contacto_drig">

                            <?php if (!empty($con_contact_methods)) : ?>
                                <?php foreach ($con_contact_methods as $item) : ?>

                                    <?php
                                    $icon = !empty($item['icon'])
                                        ? wp_get_attachment_image_url($item['icon'], 'full')
                                        : '';
                                    ?>

                                    <div class="contacto_box">

                                        <?php if ($icon) : ?>
                                            <img
                                                src="<?php echo esc_url($icon); ?>"
                                                alt=""
                                                class="contacto_box-icom">
                                        <?php endif; ?>

                                        <div class="contacto_box-info">

                                            <?php if (!empty($item['title'])) : ?>
                                                <div class="contacto_box-title">
                                                    <?php echo esc_html($item['title']); ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (!empty($item['description'])) : ?>
                                                <div>
                                                    <?php echo nl2br(esc_html($item['description'])); ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (!empty($item['highlight_text'])) : ?>
                                                <div class="contacto_box-resaltado" style="color: #b5934b;">
                                                    <?php echo esc_html($item['highlight_text']); ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>

                    </div>

                    <div class="contacto_br">

                        <?php if ($con_contact_social_icon) : ?>
                            <img
                                src="<?php echo wp_get_attachment_image_url($con_contact_social_icon, 'full'); ?>"
                                alt=""
                                class="contacto_br-icon">
                        <?php endif; ?>

                        <div class="contacto_br-txt">

                            <?php if ($con_contact_social_title) : ?>
                                <div class="contacto_br-title">
                                    <?php echo esc_html($con_contact_social_title); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($con_contact_social_description) : ?>
                                <div class="contacto_br-subtitle">
                                    <?php echo nl2br(esc_html($con_contact_social_description)); ?>
                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="contacto_br-rs">

                            <?php if (!empty($con_contact_social_links)) : ?>
                                <?php foreach ($con_contact_social_links as $social) : ?>

                                    <?php
                                    $icon = !empty($social['icon'])
                                        ? wp_get_attachment_image_url($social['icon'], 'full')
                                        : '';
                                    ?>

                                    <a
                                        href="<?php echo esc_url($social['link']); ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="contacto_br-box">

                                        <?php if ($icon) : ?>
                                            <img
                                                src="<?php echo esc_url($icon); ?>"
                                                alt=""
                                                class="contacto_br-fc">
                                        <?php endif; ?>

                                        <?php if (!empty($social['username'])) : ?>
                                            <div>
                                                <?php echo esc_html($social['username']); ?>
                                            </div>
                                        <?php endif; ?>

                                    </a>

                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>

                    </div>

                    <?php if (!empty($con_contact_features)) : ?>
                        <div class="contacto_canal">

                            <?php foreach ($con_contact_features as $index => $feature) : ?>

                                <?php
                                $icon = !empty($feature['icon'])
                                    ? wp_get_attachment_image_url($feature['icon'], 'full')
                                    : '';
                                ?>

                                <div class="contacto_canal-box">

                                    <?php if ($icon) : ?>
                                        <img
                                            src="<?php echo esc_url($icon); ?>"
                                            alt=""
                                            class="contacto_canal-icono">
                                    <?php endif; ?>

                                    <div class="contacto_canal-txt">

                                        <?php if (!empty($feature['title'])) : ?>
                                            <div>
                                                <strong>
                                                    <?php echo esc_html($feature['title']); ?>
                                                </strong>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($feature['subtitle'])) : ?>
                                            <div>
                                                <?php echo esc_html($feature['subtitle']); ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>

                                <?php if ($index < count($con_contact_features) - 1) : ?>
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/images/Line-16-1.png"
                                        alt=""
                                        class="contacto_canal-line">
                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('parts/sedes'); ?>
    <section class="seccion is-overflow-hidden">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
              <h1 class="subtitle-seccion"><span><?= $con_featured_products_title_1 ; ?></span><span class="subtitle-down-seccion"><?= $con_featured_products_title_2; ?></span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>
            <div class="title-seccion is-hide"><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-left.png" loading="lazy" alt="">
              <h1 class="subtitle-seccion"><span>Los artículos favoritos</span><span class="subtitle-down-seccion">de nuetsros clientes</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-right.png" loading="lazy" alt="">
            </div>
            <p class="titulo_desp"><?= $con_featured_products_description ; ?></p>
            <div data-delay="1000" data-animation="slide" class="slider_productos w-slider" data-autoplay="true" data-easing="ease-in-out-sine" data-hide-arrows="true" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="800" data-infinite="true">
                <div class="slider-mask_productos w-slider-mask">

                    <?php foreach ($con_featured_products as $index => $product_data) :

                        $product_id = $product_data['id'];
                        $product    = wc_get_product($product_id);

                        if (!$product) {
                            continue;
                        }

                        $product_name        = $product->get_name();
                        $product_permalink   = get_permalink($product_id);
                        $product_image       = get_the_post_thumbnail_url($product_id, 'full');
                        $product_description = wp_trim_words($product->get_short_description(), 12);

                        $regular_price = $product->get_regular_price();
                        $current_price = $product->get_price();
                        $is_on_sale    = $product->is_on_sale();

                    ?>

                        <div class="slider_productos-slider w-slide">

                            <a href="<?php echo esc_url($product_permalink); ?>" class="tarjetaproducto w-inline-block">

                                <div class="tarjetaproducto_head">

                                    <div class="etiqueta-tarjeta">
                                        <div>TOP <?php echo $index + 1; ?></div>
                                    </div>

                                    <div class="tarjetaproducto_head-cont">

                                        <?php if ($product_image) : ?>
                                            <img
                                                src="<?php echo esc_url($product_image); ?>"
                                                loading="lazy"
                                                alt="<?php echo esc_attr($product_name); ?>"
                                                class="tarjetaproductos_producto">
                                        <?php endif; ?>

                                    </div>

                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png"
                                        loading="lazy"
                                        alt=""
                                        class="tarjetaproducto_fondo">

                                </div>

                                <div class="tarjetaproducto_body">

                                    <div class="tarjetaproducto_nombre">
                                        <?php echo esc_html($product_name); ?>
                                    </div>

                                    <img
                                        loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png"
                                        alt=""
                                        class="tarjetaproducto_etsrellas">

                                    <?php if (!empty($product_description)) : ?>
                                        <p>
                                            <?php echo esc_html($product_description); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($is_on_sale) : ?>
                                        <p class="tarjetaproducto_precio-anterior">
                                            <del><?php echo wc_price($regular_price); ?></del>
                                        </p>
                                    <?php endif; ?>

                                    <p class="tarjetaproducto_precio">
                                        <?php echo wc_price($current_price); ?>
                                    </p>

                                    <div class="button is-tarjeta">

                                        <img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg"
                                            alt=""
                                            class="btn-icon">

                                        <div>Ver producto</div>

                                    </div>

                                </div>

                            </a>

                        </div>

                    <?php endforeach; ?>

                </div>
              <div class="slider_productos-arrow w-slider-arrow-left"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda.png" loading="lazy" alt="" class="slider_productos-arrowicon"></div>
              <div class="slider_productos-arrow is-right w-slider-arrow-right"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda-2.svg" loading="lazy" alt="" class="slider_productos-arrowicon"></div>
              <div class="is-hide w-slider-nav w-round"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/Productos-mas-vendidos-1.png" loading="lazy" alt="" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion">
            <div class="scroll">
              <div class="scroll-anuncio"><img src="<?= $hm_banner_image; ?>" loading="lazy" alt="">
                <div class="scroll-info">
                  <div class="scroll-txt">
                    <div class="heading-h3"><?= $hm_banner_title; ?></div>
                    <div><?= $hm_banner_description; ?></div>
                  </div>
                  <a href="<?= $hm_banner_button_link; ?>" class="button is-outline w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/estrella-1.svg" loading="lazy" alt="" class="button-icon-small">
                    <div><strong><?= $hm_banner_button_text; ?></strong></div>
                  </a>
                </div>
              </div>
                <div class="scroll-tarjeta2 cards-wrapper">

                    <?php foreach ($hm_banner_products as $product_data) :

                        $product_id = $product_data['id'];
                        $product    = wc_get_product($product_id);

                        if (!$product) {
                            continue;
                        }

                        $product_name      = $product->get_name();
                        $product_permalink = get_permalink($product_id);
                        $product_image     = get_the_post_thumbnail_url($product_id, 'full');

                        $categories = get_the_terms($product_id, 'product_cat');
                        $category   = !empty($categories) ? $categories[0]->name : '';

                        $regular_price = $product->get_regular_price();
                        $current_price = $product->get_price();

                        $discount_percentage = 0;

                        if ($product->is_on_sale() && $regular_price > 0) {
                            $discount_percentage = round((($regular_price - $current_price) / $regular_price) * 100);
                        }

                    ?>

                        <a href="<?php echo esc_url($product_permalink); ?>" class="tarjeta2 w-inline-block">

                            <div class="tarjeta2_imgs">

                                <?php if ($product_image) : ?>
                                    <img
                                        src="<?php echo esc_url($product_image); ?>"
                                        loading="lazy"
                                        alt="<?php echo esc_attr($product_name); ?>"
                                        class="tarjeta2_img">
                                <?php endif; ?>

                                <?php if ($discount_percentage > 0) : ?>
                                    <div class="etiqueta-tarjeta is-brown">
                                        <div>-<?php echo $discount_percentage; ?>%</div>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <div class="tarjeta2_info">

                                <?php if (!empty($category)) : ?>
                                    <div class="tarjeta2_letter">
                                        <strong><?php echo esc_html(strtoupper($category)); ?></strong>
                                    </div>
                                <?php endif; ?>

                                <div class="tarjeta2_nombreproducto">
                                    <?php echo esc_html($product_name); ?>
                                </div>

                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png"
                                    loading="lazy"
                                    alt=""
                                    class="tarjeta2_estrella">

                                <?php if ($product->is_on_sale()) : ?>
                                    <div class="tarjeta2_descuento">
                                        <del><?php echo wc_price($regular_price); ?></del>
                                    </div>
                                <?php endif; ?>

                                <div class="tarjeta2_precio">
                                    <?php echo wc_price($current_price); ?>
                                </div>

                                <div class="button is-tarjeta">
                                    <div>Detalles del producto</div>

                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg"
                                        loading="lazy"
                                        alt=""
                                        class="btn-icon">
                                </div>

                            </div>

                        </a>

                    <?php endforeach; ?>

                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/fondo-magic-1.png" loading="lazy" class="seccion-slider_fondo"><img src="<?php echo get_template_directory_uri(); ?>/images/perro-1.png" loading="lazy" alt="" class="seccion-slider_left-down"></div>
    </section>
<?php get_footer(); ?>