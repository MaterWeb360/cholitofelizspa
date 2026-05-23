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

// Nuestras Tiendas
$con_stores_title_1      = carbon_get_post_meta(get_the_ID(), 'con_stores_title_1');
$con_stores_title_2      = carbon_get_post_meta(get_the_ID(), 'con_stores_title_2');
$con_stores_description  = carbon_get_post_meta(get_the_ID(), 'con_stores_description');
$con_stores_locations    = carbon_get_post_meta(get_the_ID(), 'con_stores_locations');

// Productos de Interés
$con_featured_products_title_1    = carbon_get_post_meta(get_the_ID(), 'con_featured_products_title_1');
$con_featured_products_title_2    = carbon_get_post_meta(get_the_ID(), 'con_featured_products_title_2');
$con_featured_products_description = carbon_get_post_meta(get_the_ID(), 'con_featured_products_description');
$con_featured_products            = carbon_get_post_meta(get_the_ID(), 'con_featured_products');

// Productos favoritos
$hm_banner_tag              = carbon_get_post_meta(get_the_ID(), 'hm_banner_tag');
$hm_banner_title_1          = carbon_get_post_meta(get_the_ID(), 'hm_banner_title_1');
$hm_banner_title_2          = carbon_get_post_meta(get_the_ID(), 'hm_banner_title_2');
$hm_banner_description      = carbon_get_post_meta(get_the_ID(), 'hm_banner_description');
$hm_banner_models_image     = carbon_get_post_meta(get_the_ID(), 'hm_banner_models_image');
$hm_banner_background_image = carbon_get_post_meta(get_the_ID(), 'hm_banner_background_image');
$hm_banner_products         = carbon_get_post_meta(get_the_ID(), 'hm_banner_products');

?>

    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2">Aqui tienes nuestros,<br><span class="text-color-orange">canales de contacto y sedes</span></h1>
              <p>Por que nos gusta mantenernos conectados con nuestros clientes hemos diseñado esta página de contacto.</p>
            </div>
            <div class="hero_info-imagen"><img src="<?php echo get_template_directory_uri(); ?>/images/923050d27981445bf89a74452ab945df-removebg-preview-2.png" loading="lazy" alt="" class="hero_info-img"></div>
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
                <div class="contacto_etiqueta"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-1.svg" loading="lazy" alt="">
                  <div>Estamos para ayudarte</div>
                </div>
                <div class="contacto_title">
                  <h2 class="heading-h1">Contacto</h2><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-2.svg" loading="lazy" alt="" class="contacto_title-icon">
                </div>
                <p>¿Tienes? dudas, sugerencias o necesitas ayuda?<br><br>Nuestro equipo estará encantado de ayudarte. <br><br>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>
              </div>
              <div class="contacto_drig">
                <div class="contacto_box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_16_07-p.m.-3.svg" loading="lazy" alt="" class="contacto_box-icom">
                  <div class="contacto_box-info">
                    <div class="contacto_box-title">Llámanos</div>
                    <div>Atencion de Lun - Vie: 9:00 a.m. - 7:00 p.m.<br>Sáb.: 9:00 a.m. - 2:00 p.m.</div>
                    <div class="contacto_box-resaltado">+51 987 654 321</div>
                  </div>
                </div>
                <div class="contacto_box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_16_07-p.m.-3-1.svg" loading="lazy" alt="" class="contacto_box-icom">
                  <div class="contacto_box-info">
                    <div class="contacto_box-title">Whatsapp</div>
                    <div>Escríbenos y te respondemos lo antes posible.</div>
                    <div class="contacto_box-resaltado">+51 987 654 321</div>
                  </div>
                </div>
                <div class="contacto_box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_16_07-p.m.-3-2.svg" loading="lazy" alt="" class="contacto_box-icom">
                  <div class="contacto_box-info">
                    <div class="contacto_box-title">Escríbenos</div>
                    <div class="contacto_box-resaltado">hota@tienda.com</div>
                    <div>Envíanos un mail con el asunto y cuentanos mas de ti.</div>
                  </div>
                </div>
                <div class="contacto_box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_16_07-p.m.-3-3.svg" loading="lazy" alt="" class="contacto_box-icom">
                  <div class="contacto_box-info">
                    <div class="contacto_box-title">Visítanos</div>
                    <div>Av. Rosaspata - Cusco<br>Av. La Cultura - Cusco</div>
                    <div class="contacto_box-resaltado">Tenemos 2 sedes disponibles en la ciudad de Cusco.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contacto_br"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-3.png" loading="lazy" alt="" class="contacto_br-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Line-16.png" loading="lazy" alt="" class="contacto_br-line">
              <div class="contacto_br-txt">
                <div class="contacto_br-title">Síguenos en nuestras redes sociales</div>
                <div class="contacto_br-subtitle">Tips, novedades, descuentos y mucho amor <br>para tu mascota.</div>
              </div>
              <div class="contacto_br-rs">
                <div class="contacto_br-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-4.svg" loading="lazy" alt="" class="contacto_br-fc">
                  <div>@tiendemascotas</div>
                </div>
                <div class="contacto_br-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-4-1.svg" loading="lazy" alt="" class="contacto_br-fc">
                  <div>@tiendemascotas</div>
                </div>
                <div class="contacto_br-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-4-2.svg" loading="lazy" alt="" class="contacto_br-fc">
                  <div>@tiendemascotas</div>
                </div>
                <div class="contacto_br-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-07_37_49-p.m.-4-3.svg" loading="lazy" alt="" class="contacto_br-fc">
                  <div>@tiendemascotas</div>
                </div>
              </div>
            </div>
            <div class="contacto_canal">
              <div class="contacto_canal-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-09_57_30-p.m.-2-2.svg" loading="lazy" alt="" class="contacto_canal-icono">
                <div class="contacto_canal-txt">
                  <div><strong>Envíos a todo el Perú</strong></div>
                  <div>Rápidos y seguros</div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/Line-16-1.png" loading="lazy" alt="" class="contacto_canal-line">
              <div class="contacto_canal-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-09_57_30-p.m.-2-1.svg" loading="lazy" alt="" class="contacto_canal-icono">
                <div class="contacto_canal-txt">
                  <div><strong>Compra 100% segura</strong></div>
                  <div>Tus datos protegidos</div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/Line-16-1.png" loading="lazy" alt="" class="contacto_canal-line">
              <div class="contacto_canal-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-09_57_30-p.m.-2-2.svg" loading="lazy" alt="" class="contacto_canal-icono">
                <div class="contacto_canal-txt">
                  <div><strong>Atención personalizada</strong></div>
                  <div>Te ayudamos siempre</div>
                </div>
              </div><img src="<?php echo get_template_directory_uri(); ?>/images/Line-16-1.png" loading="lazy" alt="" class="contacto_canal-line">
              <div class="contacto_canal-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-2-may-2026-09_57_30-p.m.-2-3.svg" loading="lazy" alt="" class="contacto_canal-icono">
                <div class="contacto_canal-txt">
                  <div><strong>Productos de calidad</strong></div>
                  <div>Para tu bienestar</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                    <div class="sedes_tab-foto"><img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-8-may-2026-04_56_11-p.m-1.png" loading="lazy"  alt="" class="sedes_tab-imagen">
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
                      <a href="#" class="button-icon is-green is-full w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/telegrama-1.svg" loading="lazy" alt="" class="button-icon-medium">
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
              <div class="scroll-anuncio"><img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle-25.png" loading="lazy" alt="">
                <div class="scroll-info">
                  <div class="scroll-txt">
                    <div class="heading-h3">¿No encuentras lo que buscas?</div>
                    <div>Visita nuestra tienda para seguir viendo productos de calidad.</div>
                  </div>
                  <a href="#" class="button is-outline w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/estrella-1.svg" loading="lazy" alt="" class="button-icon-small">
                    <div><strong>TIENDA</strong></div>
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