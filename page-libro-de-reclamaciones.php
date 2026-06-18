<?php
// Procesar el formulario del Libro de Reclamaciones
if ( isset($_POST['nombre']) ) {
    
    // Validar y sanitizar datos
    $nombre = sanitize_text_field($_POST['nombre']);
    $email = sanitize_email($_POST['correo']);
    $telefono = sanitize_text_field($_POST['telefono']);
    $documento = sanitize_text_field($_POST['documento']);
    $direccion = sanitize_textarea_field($_POST['direccion']);
    $producto = sanitize_text_field($_POST['producto_servicio']);
    $monto = sanitize_text_field($_POST['monto_reclamado']);
    $detalle = sanitize_textarea_field($_POST['detalle']);
    $pedido = sanitize_textarea_field($_POST['pedido']);
    
    // Asunto y cuerpo del correo para ti
    $to = 'cholitofeliztiendaonline@gmail.com';
    $subject = 'Nuevo Reclamo - Libro de Reclamaciones';
    
    $body = "Se ha recibido un nuevo reclamo:\n\n";
    $body .= "Nombre: $nombre\n";
    $body .= "Email: $email\n";
    $body .= "Teléfono: $telefono\n";
    $body .= "Documento: $documento\n";
    $body .= "Dirección: $direccion\n";
    $body .= "Producto/Servicio: $producto\n";
    $body .= "Monto reclamado: S/. $monto\n";
    $body .= "Detalle del reclamo: $detalle\n";
    $body .= "Pedido del consumidor: $pedido\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    // Enviar correo al administrador
    $mail_sent = wp_mail($to, $subject, $body, $headers);
    
    // Si se envió, enviar confirmación al cliente
    if ( $mail_sent ) {
        $client_subject = 'Confirmación de Reclamo - Cholito Feliz Espa';
        $client_body = "Hola $nombre,\n\n";
        $client_body .= "Hemos recibido tu reclamo. Te responderemos a la brevedad.\n\n";
        $client_body .= "¡Gracias por contactarnos!\n";
        $client_body .= "Cholito Feliz Espa";
        
        wp_mail($email, $client_subject, $client_body, $headers);
        
        // ✅ REDIRECCIONAR A GRACIAS
        wp_redirect('https://marketdogcholitofeliz.com/gracias-libro');
        exit;
    } else {
        // Si falla, mostrar mensaje de error
        echo '<div class="error-message">❌ Hubo un error al enviar el reclamo. Por favor, intenta nuevamente.</div>';
    }
}
?>


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
              <h1 class="heading-h2"><?= $li_hero_title_1 ; ?><span class="text-color-orange"><?= $li_hero_title_2; ?></span></h1>
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
                <p class="paragraph" style="text-align: center;margin-left: auto; margin-right: auto;"><?= $li_desp_products_1; ?></p>
              </div>
            </div>
            <div class="form_cointent w-form">
              <form id="libro_form" name="libro_form" method="post" class="form_wrp">

                  <!-- DATOS DEL CONSUMIDOR -->
                  <div class="form_seccion">
                      <div class="form_title">
                          <h2 class="heading-h3">Identificación del consumidor reclamante</h2>
                      </div>

                      <div class="form_col3">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Nombres y apellidos <span class="text-color-red">*</span>
                              </div>
                              <input class="form_input w-input" type="text" name="nombre"
                                  placeholder="Nombres y apellidos">
                          </div>

                          <div class="form_campo">
                              <div class="form_subtitle">
                                  DNI / CE <span class="text-color-red">*</span>
                              </div>
                              <input class="form_input w-input" type="text" name="documento"
                                  placeholder="Número de documento">
                          </div>

                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Teléfono <span class="text-color-red">*</span>
                              </div>
                              <input class="form_input w-input" type="tel" name="telefono"
                                  placeholder="Número de teléfono">
                          </div>
                      </div>

                      <div class="form_col2">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Correo electrónico <span class="text-color-red">*</span>
                              </div>
                              <input class="form_input w-input" type="email" name="correo"
                                  placeholder="Correo electrónico">
                          </div>

                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Padre o madre (si es menor de edad)
                              </div>
                              <input class="form_input w-input" type="text" name="apoderado"
                                  placeholder="Nombre del padre o madre">
                          </div>
                      </div>

                      <div class="form_col1">
                          <div class="form_campo">
                              <div class="form_subtitle">Dirección</div>
                              <input class="form_input w-input" type="text" name="direccion"
                                  placeholder="Dirección completa">
                          </div>
                      </div>
                  </div>

                  <!-- BIEN CONTRATADO -->
                  <div class="form_seccion">
                      <div class="form_title">
                          <h2 class="heading-h3">Identificación del bien contratado</h2>
                      </div>

                      <div class="form_col3 is-movil">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Tipo <span class="text-color-red">*</span>
                              </div>

                              <select class="form_input w-select" name="bien_tipo">
                                  <option value="">Selecciona una opción</option>
                                  <option value="Producto">Producto</option>
                                  <option value="Servicio">Servicio</option>
                              </select>
                          </div>

                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Nombre del producto o servicio <span class="text-color-red">*</span>
                              </div>

                              <input class="form_input w-input" type="text"
                                  name="producto_servicio"
                                  placeholder="Producto o servicio">
                          </div>

                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Monto reclamado
                              </div>

                              <input class="form_input w-input" type="number"
                                  name="monto_reclamado"
                                  placeholder="S/. 0.00">
                          </div>
                      </div>

                      <div class="form_col1">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Descripción del producto o servicio <span class="text-color-red">*</span>
                              </div>

                              <textarea
                                  class="form_input w-input"
                                  name="descripcion_bien"
                                  placeholder="Describe el producto o servicio relacionado con el reclamo"></textarea>
                          </div>
                      </div>
                  </div>

                  <!-- RECLAMO -->
                  <div class="form_seccion">
                      <div class="form_title">
                          <h2 class="heading-h3">Detalle de la reclamación y pedido del consumidor</h2>
                      </div>

                      <div class="form_col1">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Tipo de reclamación <span class="text-color-red">*</span>
                              </div>

                              <select class="form_input w-select" name="tipo_reclamo">
                                  <option value="">Selecciona una opción</option>
                                  <option value="Reclamo">Reclamo</option>
                                  <option value="Queja">Queja</option>
                              </select>

                              <div class="form_help">
                                  <strong>Reclamo:</strong> Disconformidad relacionada con los productos o servicios.<br>
                                  <strong>Queja:</strong> Disconformidad no relacionada con productos o servicios o malestar respecto a la atención recibida.
                              </div>
                          </div>
                      </div>

                      <div class="form_col1">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Detalle <span class="text-color-red">*</span>
                              </div>

                              <textarea
                                  class="form_input w-input"
                                  name="detalle"
                                  placeholder="Describe detalladamente el motivo de tu reclamo o queja"></textarea>
                          </div>
                      </div>

                      <div class="form_col1">
                          <div class="form_campo">
                              <div class="form_subtitle">
                                  Pedido del consumidor <span class="text-color-red">*</span>
                              </div>

                              <textarea
                                  class="form_input w-input"
                                  name="pedido"
                                  placeholder="Indica la solución que esperas recibir"></textarea>
                          </div>
                      </div>
                  </div>

                  <!-- DECLARACIÓN -->
                  <div class="form_seccion">
                      <label class="w-checkbox">
                          <input type="checkbox" required>
                          <span>
                              Declaro que la información proporcionada es verdadera.
                          </span>
                      </label>
                  </div>

                  <input
                      type="submit"
                      class="form_button w-button"
                      value="Enviar reclamo">
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