<?php get_header(); ?>
<?php
// Banner
$hm_hero_slider = carbon_get_post_meta(get_the_ID(), 'hm_hero_slider');

// Categorías
$hm_categories_title_1     = carbon_get_post_meta(get_the_ID(), 'hm_categories_title_1');
$hm_categories_title_2     = carbon_get_post_meta(get_the_ID(), 'hm_categories_title_2');
$hm_categories_description = carbon_get_post_meta(get_the_ID(), 'hm_categories_description');

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

                                        <a href="<?php echo $hm_hero_button_link; ?>"
                                            class="button is-relative w-inline-block">

                                            <div>
                                                <?php echo $hm_hero_button_text; ?>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-42.png"
                                                loading="lazy"
                                                alt="">

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/admiracion-btn-hero.svg"
                                                loading="lazy"
                                                alt=""
                                                class="button-img-flotante">

                                        </a>

                                    </div>

                                    <img src="<?php echo $hm_hero_character_image; ?>"
                                        
                                        alt=""
                                        class="slider-img">

                                </div>

                            </div>

                        </div>

                        <div class="secccion-bg">

                            <img src="<?php echo $hm_hero_background_image; ?>"
                                loading="lazy"
                                alt=""
                                class="seccion-slider_fondo">

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
  <div class="padding-seccion">
    <div class="container-seccion">
      <div class="wrp-seccion is-center">
        <div class="titulo_desp">
          <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
            <h1 class="subtitle-seccion"><span><?= $hm_categories_title_1 ?></span><br><span class="subtitle-down-seccion">principales categorías</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
          </div>
          <p class="paragraph">Lorem ipsum, sobre productos que pueden interesar, texto mencionando algun producto<strong> </strong><strong>‍<br>‍</strong>muy vendido y buscado en google para mascotas. </p>
        </div>
        <div class="wrapper-tarjetas is-tarjetas-cat">
          <div class="grid-6">
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-comida.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Alimentación <span class="text-color-orange">saludable</span></div>
                  <div class="line_orange"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/imagen-perros-platos.png" loading="lazy" id="w-node-_90f8cc3d-1e7f-2030-2220-663188666ead-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-87.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Salud e <span class="text-color-orange">higiene</span></div>
                  <div class="line_orange"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/imagen-perro-higiene.png" loading="lazy" id="w-node-aff3483b-22f1-0110-24b5-0b4298e3ca7b-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/cama-para-mascotas-1.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Camas y <span class="text-color-orange">confort</span></div>
                  <div class="line_orange-copy"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/perro-con-cama.png" loading="lazy" id="w-node-_92348c1b-cc74-9bbc-257c-0c3fe10752ec-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/perro-2-1.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Accesorios y <span class="text-color-orange">correas</span></div>
                  <div class="line_orange"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/correas-de-mascotas.png" loading="lazy" id="w-node-af9c9226-26b4-73af-f9a4-8dd561b737f4-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/icono-juguete-mascota.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Juguetes y <span class="text-color-orange">ocio</span></div>
                  <div class="line_orange"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/ocio-y-juguetes-mascotas.png" loading="lazy" id="w-node-_690c1988-9d60-7f08-65b5-f89d476fe95d-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
            <a href="#" class="tarjetav w-inline-block">
              <div class="tarjeta_coltext">
                <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-178.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                <div class="tarjetav_txt">
                  <div class="tarjetav_title">Ropa y <span class="text-color-orange">moda</span></div>
                  <div class="line_orange"></div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/ropa-mascotas.png" loading="lazy" id="w-node-_05e8e116-df1d-603f-5f51-afc39ba76b83-be679ea6" alt="" class="tarjeta_modelocan">
            </a>
          </div>
        </div>
        <div data-delay="1000" data-animation="slide" class="slider_cat w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="1000" data-infinite="true">
          <div class="slider_cat-mask w-slider-mask">
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-comida.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Alimentación saludable</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/imagen-perros-platos.png" loading="lazy" id="w-node-_5f58b170-16af-56a7-6d74-d55fbbaf9733-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-87.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Salud e higiene</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/imagen-perro-higiene.png" loading="lazy" id="w-node-e9e7ed27-ec2f-6fc2-8f27-94d65eb93ce7-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/cama-para-mascotas-1.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Camas y confort</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/perro-con-cama.png" loading="lazy" id="w-node-d8704349-489f-f878-b54a-aa1e4e694ccc-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/perro-2-1.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Accesorios y correas</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/correas-de-mascotas.png" loading="lazy" id="w-node-_36658038-27d0-5d40-bff3-ad06a4e28376-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/icono-juguete-mascota.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Juguetes y ocio</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/ocio-y-juguetes-mascotas.png" loading="lazy" id="w-node-b1f94a95-f5f4-6194-b79d-66f011bf4eee-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
            <div class="slider_cat-slider w-slide">
              <a href="#" class="tarjetav w-inline-block">
                <div class="tarjeta_coltext">
                  <div class="tarjetav_contico"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-178.svg" loading="lazy" alt="" class="tarjetav_icon"></div>
                  <div class="tarjetav_txt">
                    <div class="tarjetav_title">Ropa y moda</div>
                    <div class="line_orange"></div>
                  </div>
                </div><img src="<?php echo get_template_directory_uri(); ?>/images/ropa-mascotas.png" loading="lazy" id="w-node-_65fd9e65-5241-4ba0-7014-7a7069149b8e-be679ea6" alt="" class="tarjeta_modelocan">
              </a>
            </div>
          </div>
          <div class="left-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
          </div>
          <div class="right-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
          </div>
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
        <div data-delay="1000" data-animation="slide" class="slider_productos w-slider" data-autoplay="true" data-easing="ease-in-out-sine" data-hide-arrows="true" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="800" data-infinite="true">
          <div class="slider-mask_productos w-slider-mask">
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f25612a8" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 1</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-26-abr-2026-05_00_04-p.m.-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 118.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Ver producto</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f25612bd" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 2</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 88.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f25612d2" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-26-abr-2026-05_00_04-p.m.-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 15.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f25612e7" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 4</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Group-60.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 106.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Ver producto</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f25612fc" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 128.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Ver productos</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f2561311" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 128.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f2561326" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 128.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f256133b" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 128.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="slider_productos-slider w-slide">
              <a data-w-id="77c94ed9-b0d4-0c23-b9db-7fd4f2561350" href="#" class="tarjetaproducto w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="etiqueta-tarjeta">
                    <div>TOP 3</div>
                  </div>
                  <div class="tarjetaproducto_head-cont"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-56-1.png" alt="" class="tarjetaproductos_producto"></div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" alt="" class="tarjetaproducto_fondo">
                </div>
                <div class="tarjetaproducto_body">
                  <div class="tarjetaproducto_nombre">Cama de felpa marca dogchow</div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-59.png" alt="" class="tarjetaproducto_etsrellas">
                  <p>La mejor tecnología para el descanso de tu pequeño.</p>
                  <p class="tarjetaproducto_precio">S/ 128.00</p>
                  <div class="button is-tarjeta"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/carrito-de-compras-1.svg" alt="" class="btn-icon">
                    <div>Agregar al carrito</div>
                  </div>
                </div>
              </a>
            </div>
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
<section class="seccion">
  <div class="padding-seccion is-small">
    <div class="container-seccion">
      <div class="wrp-seccion is-horizontal-center">
        <div class="descuento-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/etiqueta-1.svg" loading="lazy" alt="" class="descuento-icon">
          <div>
            <strong>30% de<br>‍</strong>‍<span class="text-span"><strong>decuento </strong></span>
          </div>
        </div>
        <img src="<?= $hm_discount_divider_image; ?>" loading="lazy" alt="" class="franja_line">
        <div class="descuento-item"><img src="<?php echo get_template_directory_uri(); ?>/images/bolsa-de-descuento-1.svg" loading="lazy" alt="" class="descuento-icon">
          <div><strong>30% de<br>‍</strong>‍<span class="text-span"><strong>decuento </strong></span></div>
        </div>
        <img src="<?= $hm_discount_divider_image; ?>" loading="lazy" alt="" class="franja_line">
        <div class="descuento-item"><img src="<?php echo get_template_directory_uri(); ?>/images/fecha-limite-1.svg" loading="lazy" alt="" class="descuento-icon">
          <div><strong>30% de<br>‍</strong>‍<span class="text-span"><strong>decuento </strong></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="secccion-bg"><img sizes="100vw" alt="" src="<?php echo get_template_directory_uri(); ?>/images/Franja-descuento-2-1.png" loading="lazy" class="seccion-slider_fondo"></div>
</section>
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
            <a href="#" class="tarjeta2 w-inline-block">
              <div id="w-node-_1a84fb6b-bef5-2c18-a8a8-3a28642f9460-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
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
              <div id="w-node-_64cf903c-58d0-1c8c-45ef-f738e5551d2f-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62-1.png" loading="lazy" alt="" class="tarjeta2_img">
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
              <div id="w-node-_5c3c0a51-75ea-b883-8f7c-4e825f02712d-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
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
              <div id="w-node-c6e7c9b5-c6f4-80e7-fdc2-588974687825-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
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
              <div id="w-node-c80b43d1-ab4f-f24a-6cab-bd39e8215c13-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
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
              <div id="w-node-_1d20a54b-5180-cd1d-17b9-e2e19b4390bb-be679ea6" class="tarjeta2_imgs"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-62.png" loading="lazy" alt="" class="tarjeta2_img">
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