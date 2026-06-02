<?php get_header(); ?>
<?php
// Banner
  $ti_hero_title_1     = carbon_get_post_meta(get_the_ID(), 'og_hero_title_1');
  $ti_hero_title_2     = carbon_get_post_meta(get_the_ID(), 'og_hero_title_2');
  $ti_hero_description = carbon_get_post_meta(get_the_ID(), 'og_hero_description');
  $ti_hero_main_image  = carbon_get_post_meta(get_the_ID(), 'og_hero_main_image');
?>

<section class="seccion">
  <div class="padding-seccion is-banner-internas">
    <div class="container-seccion">
      <div class="wrp-seccion _2col">
        <div class="herop_info">
          <h1 class="heading-h2">
            <?= esc_html($ti_hero_title_1); ?><br>
            <span class="text-color-orange"><?= esc_html($ti_hero_title_2); ?></span>
          </h1>

          <p>
            <?= esc_html($ti_hero_description); ?>
          </p>
        </div>

        <div class="hero_info-imagen">
          <img src="<?= esc_url($ti_hero_main_image); ?>" loading="lazy" alt="" class="hero_info-img">
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
      <div class="wrp-seccion">
        <div class="tienda">
          <div class="tienda_box">
            <div class="tienda_title"><img src="<?php echo get_template_directory_uri(); ?>/images/filtrar-1-1.svg" loading="lazy" alt="" class="tienda_title-icon">
              <div>FILTROS</div>
            </div>
            <div class="tienda_limpia"><img src="<?php echo get_template_directory_uri(); ?>/images/filtrar-3-1.svg" loading="lazy" alt="">
              <div>Limpiar filtros</div>
            </div>
            <div data-hover="false" data-delay="0" class="tienda_drop w-dropdown">
              <div class="drop_toggle w-dropdown-toggle">
                <div class="drop_toggle-ico w-icon-dropdown-toggle"></div>
                <div class="tienda_box-desp">Busca en nuestro sistema de filtros los productos para tu mascota</div>
              </div>
              <nav class="w-dropdown-list">
                <a href="#" class="w-dropdown-link">Link 1</a>
                <a href="#" class="w-dropdown-link">Link 2</a>
                <a href="#" class="w-dropdown-link">Link 3</a>
              </nav>
            </div>
            <div class="tienda_box-desp">Busca en nuestra tienda el mejor producto para tu mascota</div>
            <div class="tienda_filtros w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="get" class="tienda_filtros-form" data-wf-page-id="69fe835e47e8898e51f1a426" data-wf-element-id="f98540aa-2be3-b634-cac8-cce12af9e90d">
                <div class="tienda_filtro-item"><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Camas y descanso <span class="text-color-verdev1">(24)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Juguetes <strong class="text-color-verdev1">(18)</strong></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Higiene <strong class="text-color-verdev1">(16)</strong></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Salud y cuidado <strong class="text-color-verdev1">(20)</strong></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Accesorios<span class="text-color-verdev1"> (14)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Alimentos <span class="text-color-verdev1">(30)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Ropa<span class="text-color-verdev1">(30)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Ropa para gato <span class="text-color-verdev1">(30)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Ropa para perico <span class="text-color-verdev1">(30)</span></span></label><label class="w-checkbox tienda_filtros-check"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input check_tienda"><span class="tienda_filtros-txt w-form-label" for="checkbox">Correas <span class="text-color-verdev1">(30)</span></span></label></div><input type="submit" data-wait="Please wait..." class="tienda_filtros-buscar w-button" value="Buscar producto">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="tienda_tarjetas">
            <div class="tienda_tarjetas-title">
              <h2 class="tienda_tarjeta-ti">Tienda Cholito Feliz</h2>
              <div class="text-block-3">Encuentra todo lo que tu mascota necesita.</div>
            </div>
            <div>Mostrando 1-12 de 86 productos</div>
            <div class="tarjetas">
              <a data-w-id="5c935e82-8c79-fdc6-d4a1-16ee3afd16d4" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="66d83fda-1924-1b6f-8afe-7e8f3bb00fa5" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
                  <div class="tarjetaproducto_head-cont"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-60.png" loading="lazy" alt="" class="tarjetaproductos_producto"></div><img src="<?php echo get_template_directory_uri(); ?>/images/fondo-tarjeta-1.png" loading="lazy" alt="" class="tarjetaproducto_fondo">
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
              <a data-w-id="013ae9a5-5409-18ab-9ed1-6d1303dd9f7f" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="35a594c2-fc0d-d33e-4ed7-1f0dfadc7924" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="bf6add6d-3021-d528-2713-1d1f68dce3fc" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="190a722a-c210-825b-e100-5478de5d09cb" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="dd195a9b-1e1b-9b6c-74e3-9349a5910672" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="59ef8cc1-6b18-9cbe-a001-114bdc220e3b" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
              <a data-w-id="545360b9-7d20-1aaf-2235-ed3baa6d6f6f" href="#" class="tarjeta w-inline-block">
                <div class="tarjetaproducto_head">
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secccion-bg"><img  alt="" src="<?php echo get_template_directory_uri(); ?>/images/Tienda-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
</section>
<?php get_template_part('parts/sedes'); ?>
<?php get_footer(); ?>