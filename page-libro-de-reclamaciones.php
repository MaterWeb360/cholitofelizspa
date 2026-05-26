<?php get_header(); ?>

<?php

// Banner
$li_hero_title_1     = carbon_get_post_meta(get_the_ID(), 'li_hero_title_1');
$li_hero_title_2     = carbon_get_post_meta(get_the_ID(), 'li_hero_title_2');
$li_hero_description = carbon_get_post_meta(get_the_ID(), 'li_hero_description');
$li_hero_main_image  = carbon_get_post_meta(get_the_ID(), 'li_hero_main_image');

// Descripciones del libro
$li_desp_products_1 = carbon_get_post_meta(get_the_ID(), 'li_desp_products_1');
$li_desp_products_2 = carbon_get_post_meta(get_the_ID(), 'li_desp_products_2');

?>

    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2"><?= $li_hero_title_1 ; ?><span class="text-color-orange"><?= $li_hero_title_1; ?></span></h1>
              <p class="hero-prf"><?= $li_hero_description; ?></p>
            </div>
            <div class="hero_info-imagen"><img src="<?= $li_hero_main_image; ?>" loading="lazy" sizes="100vw"  alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img sizes="100vw"  alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion is-center">
            <div class="trato_wrp">
              <div class="trato_seccion">
                <p class="text-align-center"><?= $li_desp_products_1; ?></p>
              </div>
            </div>
            <div class="form_cointent w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form_wrp" data-wf-page-id="6a0b87f256687604d192f508" data-wf-element-id="2e71a639-4cfc-e73c-f6d2-93c19a6bf6ff">
                <div class="form_seccion">
                  <div class="form_title">
                    <h2 class="heading-h3">Datos del consumidor</h2>
                  </div>
                  <div class="form_col3">
                    <div class="form_campo">
                      <div class="form_subtitle">Nombres y apellidos <span class="text-color-red">*</span></div><input class="form_input w-input" maxlength="256" name="name" data-name="Name" placeholder="Nombres y apellidos" type="text" id="name">
                    </div>
                    <div class="form_campo">
                      <div class="form_subtitle">DNI / Documento de identidad <span class="text-color-red">*</span></div><input class="form_input w-input" maxlength="256" name="name" data-name="Name" placeholder="Digita tu número de identidad" type="text" id="name">
                    </div>
                    <div class="form_campo">
                      <div class="form_subtitle">Correo electrónico <span class="text-color-red">*</span></div><input class="form_input w-input" maxlength="256" name="name" data-name="Name" placeholder="Ingresa tu email" type="text" id="name">
                    </div>
                  </div>
                  <div class="form_col1">
                    <div class="form_campo">
                      <div class="form_subtitle">Dirección (opcional)</div><input class="form_input w-input" maxlength="256" name="name" data-name="Name" placeholder="Ingresa tu dirección" type="text" id="name">
                    </div>
                  </div>
                </div>
                <div class="form_seccion">
                  <div class="form_title">
                    <h2 class="heading-h3">Detalle de tu reclamo o queja</h2>
                  </div>
                  <div class="form_col2">
                    <div class="form_campo">
                      <div class="form_subtitle">Tipo <span class="text-color-red">*</span></div><select id="tipo" name="tipo" data-name="tipo" class="form_input w-select">
                        <option value="">Selecciona una opción</option>
                        <option value="Reclamo">Reclamo</option>
                        <option value="Queja">Queja</option>
                      </select>
                    </div>
                    <div class="form_campo">
                      <div class="form_subtitle">Fecha <span class="text-color-red">*</span></div><input class="form_input w-input" maxlength="256" name="name" data-name="Name" placeholder="Digita tu número de identidad" type="text" id="name">
                    </div>
                  </div>
                  <div class="form_col1">
                    <div class="form_campo">
                      <div class="form_subtitle">Detalle del reclamo o queja <span class="text-color-red">*</span></div><textarea placeholder="Describe tu reclama o queja" maxlength="5000" id="field" name="field" data-name="Field" class="form_input w-input"></textarea>
                    </div>
                  </div>
                  <div class="form_col1">
                    <div class="form_campo">
                      <div class="form_subtitle">Pedido del consumidor <span class="text-color-red">*</span></div><textarea placeholder="Índica cual es tu pedido o solución esperada" maxlength="5000" id="field" name="field" data-name="Field" class="form_input w-input"></textarea>
                    </div>
                  </div>
                </div><input type="submit" data-wait="Please wait..." class="form_button w-button" value="Enviar reclamo">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="form_aviso">
              <?= $li_desp_products_2; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img  alt="" src="<?php echo get_template_directory_uri(); ?>/images/Categorías-principales-de-productos-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>
<?php get_footer(); ?>