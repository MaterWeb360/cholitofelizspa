<?php get_header(); ?>
<?php 

// Banner
  $ab_hero_title_1     = carbon_get_post_meta(get_the_ID(), 'ab_hero_title_1');
  $ab_hero_title_2     = carbon_get_post_meta(get_the_ID(), 'ab_hero_title_2');
  $ab_hero_description = carbon_get_post_meta(get_the_ID(), 'ab_hero_description');
  $ab_hero_main_image  = carbon_get_post_meta(get_the_ID(), 'ab_hero_main_image');

// Nuestra Historia
  $ab_history_section_title_1   = carbon_get_post_meta(get_the_ID(), 'ab_history_section_title_1');
  $ab_history_section_title_2   = carbon_get_post_meta(get_the_ID(), 'ab_history_section_title_2');
  $ab_history_section_description = carbon_get_post_meta(get_the_ID(), 'ab_history_section_description');
  $ab_history_title_1           = carbon_get_post_meta(get_the_ID(), 'ab_history_title_1');
  $ab_history_title_2           = carbon_get_post_meta(get_the_ID(), 'ab_history_title_2');
  $ab_history_description       = carbon_get_post_meta(get_the_ID(), 'ab_history_description');
  $ab_history_featured_text     = carbon_get_post_meta(get_the_ID(), 'ab_history_featured_text');
  $ab_history_main_image        = carbon_get_post_meta(get_the_ID(), 'ab_history_main_image');
  $ab_history_cards             = carbon_get_post_meta(get_the_ID(), 'ab_history_cards');

// Productos de Interés
  $ab_featured_products_title_1    = carbon_get_post_meta(get_the_ID(), 'ab_featured_products_title_1');
  $ab_featured_products_title_2    = carbon_get_post_meta(get_the_ID(), 'ab_featured_products_title_2');
  $ab_featured_products_description = carbon_get_post_meta(get_the_ID(), 'ab_featured_products_description');
  $ab_featured_products            = carbon_get_post_meta(get_the_ID(), 'ab_featured_products');

?>
    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2">
                <?= esc_html($ab_hero_title_1); ?><br>
                <span class="text-color-orange"><?= esc_html($ab_hero_title_2); ?></span>
              </h1>

              <div class="hero-prf">
                <?= apply_filters('the_content', $ab_hero_description); ?>
              </div>
            </div>

            <div class="hero_info-imagen">
              <img src="<?= esc_url($ab_hero_main_image); ?>" loading="lazy" alt="" class="hero_info-img">
            </div>
          </div>
        </div>
      </div>

      <div class="secccion-bg">
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo">
      </div>
    </section>
    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">

            <div class="title-seccion">
              <img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">

              <h1 class="subtitle-seccion">
                <span><?= esc_html($ab_history_section_title_1); ?></span><br>
                <span class="subtitle-down-seccion"><?= esc_html($ab_history_section_title_2); ?></span>
              </h1>

              <img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>

            <div class="titulo_desp">
              <?= apply_filters('the_content', $ab_history_section_description); ?>
            </div>

            <div class="historia_grid">

              <div class="historia_col1">

                <div class="historia_head">

                  <div class="historia_title">
                    <div class="historia_titulos">
                      <?= esc_html($ab_history_title_1); ?><br>
                      <span class="text-color-orange"><?= esc_html($ab_history_title_2); ?></span>
                    </div>

                    <img src="<?php echo get_template_directory_uri(); ?>/images/Frame-74.png" loading="lazy" alt="">
                  </div>

                  <div class="historia_descripcion">
                    <?= apply_filters('the_content', $ab_history_description); ?>

                    <div>
                      <strong><?= esc_html($ab_history_featured_text); ?></strong>
                    </div>
                  </div>

                </div>

                <div class="historia_body">
                  <img src="<?= esc_url($ab_history_main_image); ?>" loading="lazy" alt="" class="history_ct">
                </div>

              </div>

              <div class="historia_col2">

                <?php if (!empty($ab_history_cards)) : ?>
                  <?php foreach ($ab_history_cards as $card) : ?>
                    <div class="historia_box">

                      <div class="historia_head-trajeta">

                        <div class="historia_subtitle">
                          <img src="<?= wp_get_attachment_image_url($card['icon'], 'full'); ?>" loading="lazy" alt="" class="historia_title-icon">

                          <div class="historia_subtitulos">
                            <?= esc_html($card['title_1']); ?>
                            <span class="text-color-orange"><?= esc_html($card['title_2']); ?></span>
                          </div>
                        </div>

                        <div class="historia_descripcionmin">
                          <?= apply_filters('the_content', $card['description']); ?>
                        </div>

                      </div>

                      <div class="historia_body">
                        <img src="<?= wp_get_attachment_image_url($card['image'], 'full'); ?>" loading="lazy" alt="" class="historia_modelito">
                      </div>

                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>

              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="secccion-bg">
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Categorías-principales-de-productos-1.jpg" loading="lazy" class="seccion-slider_fondo">
      </div>
    </section>
    <?php get_template_part('parts/sedes'); ?>
    <section class="seccion is-overflow-hidden">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
              <h1 class="subtitle-seccion"><span><?= $ab_featured_products_title_1 ; ?></span><span class="subtitle-down-seccion"><?= $ab_featured_products_title_2 ?></span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>
            <div class="title-seccion is-hide"><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-left.png" loading="lazy" alt="">
              <h1 class="subtitle-seccion"><span>Los artículos favoritos</span><span class="subtitle-down-seccion">de nuetsros clientes</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-right.png" loading="lazy" alt="">
            </div>
            <p class="titulo_desp"><?= $ab_featured_products_description; ?></p>
            <div data-delay="2000" data-animation="slide" class="slider_productos w-slider" data-autoplay="true" data-easing="ease-in-out-sine" data-hide-arrows="true" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="slider-mask_productos w-slider-mask">

                    <?php foreach ($ab_featured_products as $index => $product_data) :

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
<?php get_footer(); ?>