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
                                                <div class="contacto_box-resaltado">
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
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f281e" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 1</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-26-abr-2026-05_00_04-p.m.-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 118.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Ver producto</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f2833" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 2</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 88.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f2848" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-26-abr-2026-05_00_04-p.m.-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 15.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f285d" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 4</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-60.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 106.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Ver producto</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f2872" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 128.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Ver productos</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f2887" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 128.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f289c" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 128.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f28b1" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 128.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="08e7b4ac-d194-03ef-ca1d-ebe14d2f28c6" href="#" class="tarjetaproducto w-inline-block">
                    <div class="tarjetaproducto_head">
                      <div class="etiqueta-tarjeta">
                        <div>TOP 3</div>
                      </div>
                      <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
                    </div>
                    <div class="tarjetaproducto_body">
                      <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjetaproducto_etsrellas">
                      <p>La mejor tecnología para el descanso de tu pequeño.</p>
                      <p class="tarjetaproducto_precio">S/ 128.00</p>
                      <div class="button is-tarjeta"><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                        <div>Agregar al carrito</div>
                      </div>
                    </div>
                  </a>
                </div>
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
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b198103722-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b198103737-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62-1.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b19810374c-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b198103761-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b198103776-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
                <a href="#" class="tarjeta2 w-inline-block">
                  <div id="w-node-e4eb1325-1d22-3884-cd5f-28b19810378b-b0f3ab4e" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
                    <div class="etiqueta-tarjeta is-brown">
                      <div>-15%</div>
                    </div>
                  </div>
                  <div class="tarjeta2_info">
                    <div class="tarjeta2_letter"><strong>COLLARES</strong></div>
                    <div class="tarjeta2_nombreproducto">Collar azul petshop granel</div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" loading="lazy" alt="" class="tarjeta2_estrella">
                    <div class="tarjeta2_descuento">S/159.00</div>
                    <div class="tarjeta2_precio">S/ 119.00</div>
                    <div class="button is-tarjeta">
                      <div>Detalles del producto</div><img src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" loading="lazy" alt="" class="btn-icon">
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/fondo-magic-1.png" loading="lazy" class="seccion-slider_fondo"><img src="<?php echo get_template_directory_uri(); ?>/images/perro-1.png" loading="lazy" alt="" class="seccion-slider_left-down"></div>
    </section>
<?php get_footer(); ?>