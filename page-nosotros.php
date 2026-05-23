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

// Nuestras Tiendas
$ab_stores_title_1     = carbon_get_post_meta(get_the_ID(), 'ab_stores_title_1');
$ab_stores_title_2     = carbon_get_post_meta(get_the_ID(), 'ab_stores_title_2');
$ab_stores_description = carbon_get_post_meta(get_the_ID(), 'ab_stores_description');
$ab_stores_locations   = carbon_get_post_meta(get_the_ID(), 'ab_stores_locations');

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
              <h1 class="heading-h2">Mas que una tienda,<br><span class="text-color-orange">somos parte de su familia</span></h1>
              <p class="hero-prf">En <span class="text-color-verde"><strong>Cholito Feliz Peto Shop</strong></span> amamos a los animales y creemos que se merecen lo mejor.</p>
            </div>
            <div class="hero_info-imagen"><img src="<?php echo get_template_directory_uri(); ?>/images/16149b45ed4da247edea5bd5df5efdae-removebg-preview-1-1.png" loading="lazy"  alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
              <h1 class="subtitle-seccion"><span>Cholito Feliz</span><br><span class="subtitle-down-seccion">una tienda para mascotas</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>
            <p class="titulo_desp">Encuentra la sede más cercana y ven por <br>todo lo que tu mascota necesita.</p>
            <div class="historia_grid">
              <div class="historia_col1">
                <div class="historia_head">
                  <div class="historia_title">
                    <div class="historia_titulos">NUESTRA<br><span class="text-color-orange">HISTORIA</span></div><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-74.png" loading="lazy" alt="">
                  </div>
                  <div class="historia_descripcion">
                    <p><strong class="text-color-orange">Cholito feliz </strong>nació del amor por nuestras mascotas y el deseo de ofrecerle lo mejor.Somos una tienda 100% peruana que selecciona con cariño productos de calidad para su bienestar y felicidad.</p>
                    <div><strong>Lo mejor para quienes amas, siempre.</strong></div>
                  </div>
                </div>
                <div class="historia_body"><img src="<?php echo get_template_directory_uri(); ?>/images/image-8.png" loading="lazy"  alt="" class="history_ct"></div>
              </div>
              <div class="historia_col2">
                <div class="historia_box">
                  <div class="historia_head-trajeta">
                    <div class="historia_subtitle"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-105.svg" loading="lazy" alt="" class="historia_title-icon">
                      <div class="historia_subtitulos">TODO <span class="text-color-orange">COMENZÓ</span></div>
                    </div>
                    <div class="historia_descripcionmin">
                      <p>Empezamos con un pequeño sueño: ayudar a más mascotas a vivir mejor, con productos seguros, confiables y de calidad.</p>
                    </div>
                  </div>
                  <div class="historia_body"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-28-abr-2026-10_27_52-p.m.-1.png" loading="lazy" alt="" class="historia_modelito"></div>
                </div>
                <div class="historia_box">
                  <div class="historia_head-trajeta">
                    <div class="historia_subtitle"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-105.svg" loading="lazy" alt="" class="historia_title-icon">
                      <div class="historia_subtitulos">TODO <span class="text-color-orange">COMENZÓ</span></div>
                    </div>
                    <div class="historia_descripcionmin">
                      <p>Empezamos con un pequeño sueño: ayudar a más mascotas a vivir mejor, con productos seguros, confiables y de calidad.</p>
                    </div>
                  </div>
                  <div class="historia_body"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-28-abr-2026-10_27_52-p.m.-1-1.png" loading="lazy" alt="" class="historia_modelito"></div>
                </div>
                <div class="historia_box">
                  <div class="historia_head-trajeta">
                    <div class="historia_subtitle"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-105.svg" loading="lazy" alt="" class="historia_title-icon">
                      <div class="historia_subtitulos">TODO <span class="text-color-orange">COMENZÓ</span></div>
                    </div>
                    <div class="historia_descripcionmin">
                      <p>Empezamos con un pequeño sueño: ayudar a más mascotas a vivir mejor, con productos seguros, confiables y de calidad.</p>
                    </div>
                  </div>
                  <div class="historia_body"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-28-abr-2026-10_27_52-p.m.-1-2.png" loading="lazy" alt="" class="historia_modelito"></div>
                </div>
                <div class="historia_box">
                  <div class="historia_head-trajeta">
                    <div class="historia_subtitle"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-105.svg" loading="lazy" alt="" class="historia_title-icon">
                      <div class="historia_subtitulos">TODO <span class="text-color-orange">COMENZÓ</span></div>
                    </div>
                    <div class="historia_descripcionmin">
                      <p>Empezamos con un pequeño sueño: ayudar a más mascotas a vivir mejor, con productos seguros, confiables y de calidad.</p>
                    </div>
                  </div>
                  <div class="historia_body"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-5-may-2026-12_30_49-a.m.-1.png" loading="lazy" alt="" class="historia_modelito"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Categorías-principales-de-productos-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
              <h1 class="subtitle-seccion"><span>Visitanos en</span><br><span class="subtitle-down-seccion">nuestras tiendas</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>
            <p class="titulo_desp">Encuentra la sede más cercana y ven por <br>todo lo que tu mascota necesita.</p>
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="sedes_tab w-tabs">
              <div class="sedes_tab-main w-tab-menu">
                <a data-w-tab="Tab 1" class="sedes_tab-item w-inline-block w-tab-link w--current"><img src="<?php echo get_template_directory_uri(); ?>/images/pata-2.png" loading="lazy" alt="" class="sedes_tab-icon">
                  <div>SEDE ROSASPATA</div>
                </a>
                <a data-w-tab="Tab 2" class="sedes_tab-item w-inline-block w-tab-link"><img src="<?php echo get_template_directory_uri(); ?>/images/pata-2.png" loading="lazy" alt="" class="sedes_tab-icon">
                  <div>SEDE LA CULTURA</div>
                </a>
              </div>
              <div class="sedes_tab-content w-tab-content">
                <div data-w-tab="Tab 1" class="sedes_tab-pane w-tab-pane w--tab-active">
                  <div class="sedes_tab-box">
                    <div class="sedes_code w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.2796869783238!2d-71.96924292486767!3d-13.518419886849475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd753615a08d9%3A0xf52feaef1184374a!2sCholito%20feliz%20pet%20shop%20spa!5e0!3m2!1ses!2spe!4v1778276792244!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="sedes_tab-foto"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-8-may-2026-04_56_11-p.m-1.png" loading="lazy" alt="" class="sedes_tab-imagen">
                      <div class="sedes_tab-msg">
                        <div class="text-size-medium">Referencia:</div>
                        <div>Nuestra tienda esta ubicada al lado del mercado, en la calle tal.</div>
                      </div>
                    </div>
                    <div class="sedes_tab-infosede">
                      <div class="sedes_tab-subtitulo">
                        <div class="etiqueta-orange">
                          <div>Sede</div>
                        </div>
                        <div class="heading-h2">Rosaspata</div>
                      </div><img src="<?php echo get_template_directory_uri(); ?>/images/Group-76.png" loading="lazy" alt="">
                      <div class="sedes_tab-list">
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Dirección</div>
                            <div>Av. Reducto 1233, rosaspata mercado.</div>
                          </div>
                        </div>
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-126.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Teléfono</div>
                            <div>+51 951 951 951</div>
                          </div>
                        </div>
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Horario de atención</div>
                            <div>Lunes a Domingo 9:00 a.m. - 9:00 p.m.</div>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="button-icon is-orange is-full w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/telegrama-1.svg" loading="lazy" alt="" class="button-icon-medium">
                        <div><strong>CÓMO LLEGAR</strong></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-w-tab="Tab 2" class="sedes_tab-pane w-tab-pane">
                  <div class="sedes_tab-box">
                    <div class="sedes_code w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.2796869783238!2d-71.96924292486767!3d-13.518419886849475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd753615a08d9%3A0xf52feaef1184374a!2sCholito%20feliz%20pet%20shop%20spa!5e0!3m2!1ses!2spe!4v1778276792244!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="sedes_tab-foto"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-8-may-2026-04_56_11-p.m-1.png" loading="lazy" alt="" class="sedes_tab-imagen">
                      <div class="sedes_tab-msg">
                        <div class="text-size-medium">Referencia:</div>
                        <div>Nuestra tienda esta ubicada al lado del mercado, en la calle tal.</div>
                      </div>
                    </div>
                    <div class="sedes_tab-infosede">
                      <div class="sedes_tab-subtitulo">
                        <div class="etiqueta-orange">
                          <div>Sede</div>
                        </div>
                        <div class="heading-h2">La cultura</div>
                      </div><img src="<?php echo get_template_directory_uri(); ?>/images/Group-76.png" loading="lazy" alt="">
                      <div class="sedes_tab-list">
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Dirección</div>
                            <div>Av. Reducto 1233, rosaspata mercado.</div>
                          </div>
                        </div>
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-126.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Teléfono</div>
                            <div>+51 951 951 951</div>
                          </div>
                        </div>
                        <div class="sedes_tab-listitem"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Horario de atención</div>
                            <div>Lunes a Domingo 9:00 a.m. - 9:00 p.m.</div>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="button-icon is-orange is-full w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/telegrama-1.svg" alt="" class="button-icon-medium">
                        <div><strong>CÓMO LLEGAR</strong></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/fondo-sedes-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion is-overflow-hidden">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="title-seccion"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
              <h1 class="subtitle-seccion"><span>Productos que</span><span class="subtitle-down-seccion">pueden interesarte</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
            </div>
            <div class="title-seccion is-hide"><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-left.png" loading="lazy" alt="">
              <h1 class="subtitle-seccion"><span>Los artículos favoritos</span><span class="subtitle-down-seccion">de nuetsros clientes</span></h1><img src="<?php echo get_template_directory_uri(); ?>/images/comilla-titular-right.png" loading="lazy" alt="">
            </div>
            <p class="titulo_desp">Lorem ipsum, sobre productos que pueden interesar, texto mencionando algun producto <br>muy vendido y buscado en google para mascotas. </p>
            <div data-delay="1000" data-animation="slide" class="slider_productos w-slider" data-autoplay="true" data-easing="ease-in-out-sine" data-hide-arrows="true" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="800" data-infinite="true">
              <div class="slider-mask_productos w-slider-mask">
                <div class="slider_productos-slider w-slide">
                  <a data-w-id="0c779a05-9c14-a5c5-6725-0dc30b41e470" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="751ebc34-4a5a-53b8-3221-3b29b3053c98" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="6c9888ca-0858-6977-2cac-c222602693a7" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="2e8d3b90-efa3-412e-4186-a35f3a6c4437" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="c4f3136c-9645-550e-111c-4fc37cee8098" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="21474a7d-8ed3-d649-672a-8853092f2441" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="cf1f3975-271e-952b-9d0e-8109faa43c3e" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="8e4590cc-3dff-0332-386e-a76064b2eb72" href="#" class="tarjetaproducto w-inline-block">
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
                  <a data-w-id="e65371ae-171c-9311-9b9d-2a060e3d9da2" href="#" class="tarjetaproducto w-inline-block">
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
<?php get_footer(); ?>