<?php get_header(); ?>
<?php
// Banner
$hm_hero_slider = carbon_get_post_meta(get_the_ID(), 'hm_hero_slider');

// Categorías
  $hm_categories_title_1     = carbon_get_post_meta(get_the_ID(), 'hm_categories_title_1');
  $hm_categories_title_2     = carbon_get_post_meta(get_the_ID(), 'hm_categories_title_2');
  $hm_categories_desp     = carbon_get_post_meta(get_the_ID(), 'hm_categories_desp');
  $hm_categories_description = carbon_get_post_meta(get_the_ID(), 'hm_categories_description');
  $categories_cards = carbon_get_the_post_meta('hm_categories_cards');

// Productos favoritos
  $hm_banner_tag              = carbon_get_post_meta(get_the_ID(), 'hm_banner_tag');
  $hm_banner_title_1          = carbon_get_post_meta(get_the_ID(), 'hm_banner_title_1');
  $hm_banner_title_2          = carbon_get_post_meta(get_the_ID(), 'hm_banner_title_2');
  $hm_banner_description      = carbon_get_post_meta(get_the_ID(), 'hm_banner_description');
  $hm_banner_models_image     = carbon_get_post_meta(get_the_ID(), 'hm_banner_models_image');
  $hm_banner_background_image = carbon_get_post_meta(get_the_ID(), 'hm_banner_background_image');
  $hm_banner_products         = carbon_get_post_meta(get_the_ID(), 'hm_banner_products');

// Franja de descuentos y promociones
  $hm_discount_divider_image = carbon_get_post_meta(get_the_ID(), 'hm_discount_divider_image');
  $hm_discount_items         = carbon_get_post_meta(get_the_ID(), 'hm_discount_items');

// Productos en descuento
  $hm_products_banner_image         = carbon_get_post_meta(get_the_ID(), 'hm_products_banner_image');
  $hm_products_banner_title         = carbon_get_post_meta(get_the_ID(), 'hm_products_banner_title');
  $hm_products_banner_description   = carbon_get_post_meta(get_the_ID(), 'hm_products_banner_description');
  $hm_products_banner_button_text   = carbon_get_post_meta(get_the_ID(), 'hm_products_banner_button_text');
  $hm_products_banner_button_link   = carbon_get_post_meta(get_the_ID(), 'hm_products_banner_button_link');
  $hm_products_featured             = carbon_get_post_meta(get_the_ID(), 'hm_products_featured');

// Transparencia
  $hm_transparency_title_1              = carbon_get_post_meta(get_the_ID(), 'hm_transparency_title_1');
  $hm_transparency_title_2              = carbon_get_post_meta(get_the_ID(), 'hm_transparency_title_2');
  $hmdos_transparency_cards                = carbon_get_post_meta(get_the_ID(), 'hmdos_transparency_cards');
  $hm_transparency_highlight_icon       = carbon_get_post_meta(get_the_ID(), 'hm_transparency_highlight_icon');
  $hm_transparency_highlight_text_1     = carbon_get_post_meta(get_the_ID(), 'hm_transparency_highlight_text_1');
  $hm_transparency_highlight_text_2     = carbon_get_post_meta(get_the_ID(), 'hm_transparency_highlight_text_2');
  $hm_transparency_benefits             = carbon_get_post_meta(get_the_ID(), 'hm_transparency_benefits');
?>
<section class="seccion">
    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false"
        data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">

        <div class="seccion-mask w-slider-mask">

            <?php foreach ($hm_hero_slider as $item) :

                $hm_hero_background_image = $item['hm_hero_background_image'];
                $hm_hero_character_image  = $item['hm_hero_character_image'];
                $hm_hero_title_1          = $item['hm_hero_title_1'];
                $hm_hero_title_2          = $item['hm_hero_title_2'];
                $hm_hero_title_3          = $item['hm_hero_title_3'];
                $hm_hero_description      = $item['hm_hero_description'];
                $hm_hero_button_text      = $item['hm_hero_button_text'];
                $hm_hero_button_link      = $item['hm_hero_button_link'];

            ?>

                <div class="seccion-slide w-slide">

                    <div class="seccion-cont-slider">

                        <div class="padding-seccion hero">

                            <div class="container-seccion">

                                <div class="wrp-seccion">

                                    <div class="wrp-sectiion_info">

                                        <h1 class="title-hero">
                                            <span class="mayuscula"><?php echo $hm_hero_title_1; ?></span><br>
                                            <span class="title-doreado"><?php echo $hm_hero_title_2; ?></span><br>
                                            <span class="resaltado-title">
                                                <strong><?php echo $hm_hero_title_3; ?></strong>
                                            </span>
                                        </h1>

                                        <p class="text-20">
                                            <?php echo nl2br($hm_hero_description); ?>
                                        </p>

                                        <a href="<?php echo $hm_hero_button_link; ?>" class="button is-relative w-inline-block">
                                            <div>
                                                <?php echo $hm_hero_button_text; ?>
                                            </div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-42.png" loading="lazy" alt="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/admiracion-btn-hero.svg" loading="lazy" alt="" class="button-img-flotante">
                                        </a>
                                    </div>
                                    <div class="slidre_cont-img">
                                        <img src="<?php echo $hm_hero_character_image; ?>" alt="" class="slider-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="secccion-bg">
                            <img src="<?php echo $hm_hero_background_image; ?>" loading="lazy" alt="" class="seccion-slider_fondo">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="seccion-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
        </div>

        <div class="seccion-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
        </div>

        <div class="seccion-nav w-slider-nav w-slider-nav-invert w-round"></div>

    </div>
</section>
<section class="seccion is-overflow-hidden">
  <div class="padding-seccion is-web-masterpa">
    <div class="container-seccion">
      <div class="wrp-seccion is-center">
        <div class="titulo_desp">
          <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
            <h1 class="subtitle-seccion"><span><?= $hm_categories_title_1 ?></span><br><span class="subtitle-down-seccion">principales categorías</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
          </div>
          <p class="paragraph"><?php echo $hm_categories_desp ; ?></p> 
        </div>
        <div class="wrapper-tarjetas is-tarjetas-cat">

        <?php if (!empty($categories_cards)) : ?>
            <div class="grid-6">
                <?php foreach ($categories_cards as $card) : ?>
                    <a href="#" class="tarjetav w-inline-block">
                        <div class="tarjeta_coltext">
                            <div class="tarjetav_contico">
                                <?php if (!empty($card['icon'])) : ?>
                                    <img src="<?php echo esc_url(wp_get_attachment_image_url($card['icon'], 'full')); ?>" loading="lazy" alt="" class="tarjetav_icon">
                                <?php endif; ?>
                            </div>

                            <div class="tarjetav_txt">
                                <div class="tarjetav_title">
                                    <?php echo apply_filters('the_content', $card['title']); ?>
                                </div>
                                <div class="line_orange"></div>
                            </div>
                        </div>

                        <?php if (!empty($card['model_image'])) : ?>
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($card['model_image'], 'full')); ?>" loading="lazy" alt="" class="tarjeta_modelocan">
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        </div>
<div data-delay="2000"
     data-animation="slide"
     class="slider_cat w-slider"
     data-autoplay="true"
     data-easing="ease"
     data-hide-arrows="false"
     data-disable-swipe="false"
     data-autoplay-limit="0"
     data-nav-spacing="3"
     data-duration="500"
     data-infinite="true">

    <div class="slider_cat-mask w-slider-mask">

        <?php if (!empty($categories_cards)) : ?>
            <?php foreach ($categories_cards as $card) : ?>

                <div class="slider_cat-slider w-slide">

                    <a href="#" class="tarjetav w-inline-block">

                        <div class="tarjeta_coltext">

                            <div class="tarjetav_contico">
                                <?php if (!empty($card['icon'])) : ?>
                                    <img
                                        src="<?php echo esc_url(wp_get_attachment_image_url($card['icon'], 'full')); ?>"
                                        loading="lazy"
                                        alt=""
                                        class="tarjetav_icon">
                                <?php endif; ?>
                            </div>

                            <div class="tarjetav_txt">

                                <div class="tarjetav_title">
                                    <?php echo apply_filters('the_content', $card['title']); ?>
                                </div>

                                <div class="line_orange"></div>

                            </div>

                        </div>

                        <div class="tarjetaVCont">
                            <img
                                src="<?php echo esc_url(wp_get_attachment_image_url($card['model_image'], 'full')); ?>"
                                loading="lazy"
                                alt=""
                                class="tarjeta_modelocan">
                        </div>

                    </a>

                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>

    <div class="left-arrow w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
    </div>

    <div class="right-arrow w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
    </div>

    <div class="w-slider-nav is-webmaster w-slider-nav-invert w-round"></div>

</div>
      </div>
    </div>
  </div>
  <div class="secccion-bg"><img src="<?php echo get_template_directory_uri(); ?>/images/Categorías-principales-de-productos-1.jpg" loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px" alt="" class="secccion-bg_section"></div>
</section>
<section class="seccion is-overflow-hidden">
  <div class="padding-seccion">
    <div class="container-seccion">
      <div class="wrp-seccion is-center">
        <div class="banner">
          <div class="banner_col is-text">
            <div class="etiqueta"><img src="<?php echo get_template_directory_uri(); ?>/images/estrella-1.svg" loading="lazy" alt="" class="etiqueta-icon">
              <div><?= $hm_banner_tag; ?></div>
            </div>
            <div class="titulobanner">
              <div><?= $hm_banner_title_1;?> <span class="text-color-orange2"><?= $hm_banner_title_2; ?></span></div>
            </div>
            <div><?= $hm_banner_description; ?></div>
          </div>
          <div class="banner_col is-img">
            <img src="<?= $hm_banner_models_image; ?>" loading="lazy"  alt="" class="banner_col-modelos">
          </div>
          <div class="secccion-bg_section">
            <img src="<?= $hm_banner_background_image; ?>" loading="lazy"  alt="" class="seccion-slider_fondo">
          </div>
        </div>
        <div d class="slider_productos w-slider">

           <div class="slider-mask_productos w-slider-mask">

                  <?php foreach ($hm_banner_products as $index => $product_data) :

                      $product_id = $product_data['id'];
                      $product    = wc_get_product($product_id);

                      if (!$product) {
                          continue;
                      }

                      $product_name        = $product->get_name();
                      $product_price = wc_price($product->get_price());
                      $product_permalink   = get_permalink($product_id);
                      $product_image       = get_the_post_thumbnail_url($product_id, 'full');
                      $product_description = wp_trim_words($product->get_short_description(), 12);

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

                                  <?php if (!empty($hm_banner_background_image)) : ?>
                                      <img
                                          src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png"
                                          loading="lazy"
                                          alt=""
                                          class="tarjetaproducto_fondo">
                                  <?php endif; ?>

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

                                  <p>
                                      <?php echo esc_html($product_description); ?>
                                  </p>

                                  <p class="tarjetaproducto_precio">
                                      <?php echo wp_kses_post($product_price); ?>
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

          <div class="slider_productos-arrow w-slider-arrow-left"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda.png" alt="" class="slider_productos-arrowicon"></div>
          <div class="slider_productos-arrow is-right w-slider-arrow-right"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda-2.svg" alt="" class="slider_productos-arrowicon"></div>
          <div class="is-hide w-slider-nav w-round"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="secccion-bg is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/Productos-mas-vendidos-1.png" loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px" alt="" class="seccion-slider_fondo"></div>
</section>
<?php if (!empty($hm_discount_items)) : ?>
  <section class="seccion">
      <div class="padding-seccion is-small">
          <div class="container-seccion">
              <div class="wrp-seccion is-horizontal-center">

                  <?php foreach ($hm_discount_items as $index => $item) : ?>

                      <div class="descuento-item">

                          <?php if (!empty($item['icon'])) : ?>
                              <img src="<?php echo esc_url(wp_get_attachment_image_url($item['icon'], 'full')); ?>" loading="lazy" alt="" class="descuento-icon">
                          <?php endif; ?>

                          <div>
                              <strong>
                                  <?php echo esc_html($item['title_1']); ?><br>
                              </strong>

                              <span class="text-span">
                                  <strong><?php echo esc_html($item['title_2']); ?></strong>
                              </span>
                          </div>

                      </div>

                      <?php if ($index < count($hm_discount_items) - 1 && !empty($hm_discount_divider_image)) : ?>
                          <img src="<?php echo esc_url($hm_discount_divider_image); ?>" loading="lazy" alt="" class="franja_line">
                      <?php endif; ?>

                  <?php endforeach; ?>

              </div>
          </div>
      </div>

      <div class="secccion-bg">
          <img sizes="100vw" alt="" src="<?php echo get_template_directory_uri(); ?>/images/Franja-descuento-2-1.png" loading="lazy" class="seccion-slider_fondo">
      </div>
  </section>
<?php endif; ?>
<section class="seccion">
  <div class="padding-seccion">
    <div class="container-seccion">
      <div class="wrp-seccion">
        <div class="scroll">
          <div class="scroll-anuncio">
            <img src="<?= $hm_products_banner_image; ?>" loading="lazy" sizes="100vw" alt="">
            <div class="scroll-info">
              <div class="scroll-txt">
                <div class="heading-h3"><?= $hm_products_banner_title; ?></div>
                <div><?= $hm_products_banner_description; ?></div>
              </div>
              <a href="#" class="button is-outline w-inline-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/estrella-1.svg" loading="lazy" alt="" class="button-icon-small">
                <div><strong><?= $hm_products_banner_button_text; ?></strong></div>
              </a>
            </div>
          </div>
          <div class="scroll-tarjeta2 cards-wrapper">

              <?php foreach ($hm_products_featured as $product_data) :

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
                              <div class="etiqueta-tarjeta" style="background-color: #b5934b;">
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
  <div class="secccion-bg"><img sizes="100vw" alt="" src="<?php echo get_template_directory_uri(); ?>/images/fondo-magic-1.png" loading="lazy" class="seccion-slider_fondo"><img src="<?php echo get_template_directory_uri(); ?>/images/perro-1.png" loading="lazy" alt="" class="seccion-slider_left-down"></div>
</section>
<section class="seccion is-transparencia">
  <div class="padding-seccion">
    <div class="container-seccion">
      <div class="wrp-seccion is-center">
        <div class="title-seccion">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
          <h1 class="subtitle-seccion"><span><?= $hm_transparency_title_1; ?></span><br>
            <span class="subtitle-down-seccion"><?= $hm_transparency_title_2; ?></span></h1>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
        </div>
        <div class="grid-4 gap-1-5rem">
            <?php if (!empty($hmdos_transparency_cards)) : ?>
                <?php foreach ($hmdos_transparency_cards as $card) : ?>

                    <?php
                    $icon        = !empty($card['icon']) ? wp_get_attachment_image_url($card['icon'], 'full') : '';
                    $title       = $card['title'] ?? '';
                    $description = $card['description'] ?? '';
                    ?>

                    <div class="transp">

                        <?php if ($icon) : ?>
                            <img src="<?= esc_url($icon); ?>" loading="lazy" alt="<?= esc_attr($title); ?>" class="transp_iconj">
                        <?php endif; ?>

                        <div class="transp_txt">
                            <div class="transp_tarjeta-title">
                                <?= esc_html($title); ?>
                            </div>

                            <div>
                                <?= apply_filters('the_content', $description); ?>
                            </div>
                        </div>

                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="transp_msg">

            <?php if ($hm_transparency_highlight_icon) : ?>
                <img src="<?= esc_url($hm_transparency_highlight_icon); ?>" loading="lazy" alt="">
            <?php endif; ?>

            <div><?= esc_html($hm_transparency_highlight_text_1); ?></div>

            <img src="<?php echo get_template_directory_uri(); ?>/images/line.svg" loading="lazy" alt="">

            <div><?= esc_html($hm_transparency_highlight_text_2); ?></div>

        </div>
        <div class="transp_confianza">

            <?php if (!empty($hm_transparency_benefits)) : ?>

                <?php foreach ($hm_transparency_benefits as $index => $benefit) : ?>

                    <div class="transp_confianza-bx">

                        <?php if (!empty($benefit['icon'])) : ?>
                            <img
                                src="<?= esc_url($benefit['icon']); ?>"
                                loading="lazy"
                                alt=""
                                class="transp_confianza-icon">
                        <?php endif; ?>

                        <div><?= esc_html($benefit['text']); ?></div>

                    </div>

                    <?php if ($index < count($hm_transparency_benefits) - 1) : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/line-orange.svg" loading="lazy" alt="" class="transp_confianza-line">
                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
  <div class="secccion-bg"><img sizes="100vw"  alt="" src="<?php echo get_template_directory_uri(); ?>/images/Transparencia-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
</section>
<?php get_footer(); ?>