<?php
// Obtener datos del footer desde Carbon Fields
$footer_logo = carbon_get_theme_option('gl_footer_logo');
$footer_message = carbon_get_theme_option('gl_footer_message');
$footer_heart_icon = carbon_get_theme_option('gl_footer_heart_icon');
$footer_products_title = carbon_get_theme_option('gl_footer_products_title');
$footer_products_links = carbon_get_theme_option('gl_footer_products_links');
$footer_pages_title = carbon_get_theme_option('gl_footer_pages_title');
$footer_pages_links = carbon_get_theme_option('gl_footer_pages_links');
$footer_support_title = carbon_get_theme_option('gl_footer_support_title');
$footer_support_links = carbon_get_theme_option('gl_footer_support_links');
$footer_social_title = carbon_get_theme_option('gl_footer_social_title');
$footer_email = carbon_get_theme_option('gl_footer_email');
$footer_social_links = carbon_get_theme_option('gl_footer_social_links');
$footer_bottom_image = carbon_get_theme_option('gl_footer_bottom_image');
$footer_libro_title = carbon_get_theme_option('gl_footer_libro_title');
$footer_libro_description = carbon_get_theme_option('gl_footer_libro_description');
$footer_libro_button_text = carbon_get_theme_option('gl_footer_libro_button_text');
$footer_libro_button_url = carbon_get_theme_option('gl_footer_libro_button_url');
$footer_payment_title = carbon_get_theme_option('gl_footer_payment_title');
$footer_payment_image = carbon_get_theme_option('gl_footer_payment_image');
$footer_shipping_icon = carbon_get_theme_option('gl_footer_shipping_icon');
$footer_shipping_title = carbon_get_theme_option('gl_footer_shipping_title');
$footer_shipping_text = carbon_get_theme_option('gl_footer_shipping_text');
$footer_background = carbon_get_theme_option('gl_footer_background');
?>

<section class="seccion">
  <div class="padding-seccion is-medium">
    <div class="container-seccion">
      <div class="wrp-seccion is-footer">

        <div class="footer_row">

          <div class="footer_col first">
            <?php if ($footer_logo): ?>
              <img loading="lazy" src="<?php echo wp_get_attachment_image_url($footer_logo, 'full'); ?>" alt="" class="footer_logo">
            <?php else: ?>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="" class="footer_logo">
            <?php endif; ?>

            <div class="footer_msg">
              <div>
                <?php echo !empty($footer_message) ? nl2br(esc_html($footer_message)) : 'Productos para tu <br>mascota en cusco.'; ?>
              </div>

              <?php if ($footer_heart_icon): ?>
                <img loading="lazy" src="<?php echo wp_get_attachment_image_url($footer_heart_icon, 'full'); ?>" alt="" class="footer_hearth">
              <?php else: ?>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/corazon.svg" alt="" class="footer_hearth">
              <?php endif; ?>
            </div>
          </div>

          <div class="footer_col">
            <div class="heading-h4 is-mayus">
              <?php echo !empty($footer_products_title) ? esc_html($footer_products_title) : 'Productos para tu mascota'; ?>
            </div>

            <div class="footer_list">
              <?php if (!empty($footer_products_links)): ?>
                <?php foreach ($footer_products_links as $link): ?>
                  <a href="<?php echo esc_url($link['link_url']); ?>" class="footer_list-item w-inline-block">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/pata-perro-orange.svg" alt="" class="footer_list-icon">
                    <div><?php echo esc_html($link['label']); ?></div>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="footer_col">
            <div class="heading-h4 is-mayus">
              <?php echo !empty($footer_pages_title) ? esc_html($footer_pages_title) : 'nuestras Páginas'; ?>
            </div>

            <div class="footer_list">
              <?php if (!empty($footer_pages_links)): ?>
                <?php foreach ($footer_pages_links as $link): ?>
                  <a href="<?php echo esc_url($link['link_url']); ?>" class="footer_list-item w-inline-block">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/pata-perro-orange.svg" alt="" class="footer_list-icon">
                    <div><?php echo esc_html($link['label']); ?></div>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="footer_col">
            <div class="heading-h4 is-mayus">
              <?php echo !empty($footer_support_title) ? esc_html($footer_support_title) : 'ATENCIÓN AL CLIENTE'; ?>
            </div>

            <div class="footer_list">
              <?php if (!empty($footer_support_links)): ?>
                <?php foreach ($footer_support_links as $link): ?>
                  <a href="<?php echo esc_url($link['content']); ?>" class="footer_list-item w-inline-block">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/pata-perro-orange.svg" alt="" class="footer_list-icon">
                    <div><?php echo wp_kses_post($link['label']); ?></div>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="footer_col">
            <div class="heading-h4 is-mayus">
              <?php echo !empty($footer_social_title) ? esc_html($footer_social_title) : 'siguenos en redes'; ?>
            </div>

            <div>
              <?php echo !empty($footer_email) ? esc_html($footer_email) : 'cholito@gmail.com'; ?>
            </div>

            <div class="footer_redes">
              <?php if (!empty($footer_social_links)): ?>
                <?php foreach ($footer_social_links as $social): 
                  $social_icon = wp_get_attachment_image_url($social['icon'], 'thumbnail');
                ?>
                  <a href="<?php echo esc_url($social['url']); ?>" class="footer_red w-inline-block" target="_blank">
                    <?php if ($social_icon): ?>
                      <img loading="lazy" src="<?php echo $social_icon; ?>" alt="" class="footer_redes-sociales">
                    <?php endif; ?>
                  </a>
                <?php endforeach; ?>
              <?php else: ?>
                <a href="#" class="footer_red w-inline-block">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/tik-tok.png" alt="" class="footer_redes-sociales">
                </a>
                <a href="#" class="footer_red w-inline-block">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="" class="footer_redes-sociales">
                </a>
                <a href="#" class="footer_red w-inline-block">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/instagram-1.png" alt="" class="footer_redes-sociales">
                </a>
              <?php endif; ?>
            </div>
          </div>

        </div>

        <div class="footer_row is-4">

          <div class="footer_col cat">
            <?php if ($footer_bottom_image): ?>
              <img loading="lazy" src="<?php echo wp_get_attachment_image_url($footer_bottom_image, 'full'); ?>" alt="" class="footer_logo cat">
            <?php else: ?>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/modelos-2.png" alt="" class="footer_logo cat">
            <?php endif; ?>
          </div>

          <a id="w-node-_382ec610-f21d-6f96-c1a6-c041e49fdeb2-e49fde4e" 
             href="<?php echo !empty($footer_libro_button_url) ? esc_url($footer_libro_button_url) : home_url('/libro-de-reclamaciones'); ?>" 
             class="footer_libro w-inline-block">

            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/libro.jpg" alt="" class="footer_libro-icon time">

            <div class="footer_txt">

              <div class="heading-h3 is-mayus">
                <?php echo !empty($footer_libro_title) ? esc_html($footer_libro_title) : 'ATENCIÓN AL CLIENTE'; ?>
              </div>

              <div>
                <?php echo !empty($footer_libro_description) ? nl2br(esc_html($footer_libro_description)) : 'Tu opinion es importante. Conoce cómo presentar tu reclamo aquí.'; ?>
              </div>

              <div class="button-icon">
                <div><?php echo !empty($footer_libro_button_text) ? esc_html($footer_libro_button_text) : 'Ir al libro de reclamaciones'; ?></div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda-1.svg" alt="">
              </div>

            </div>

          </a>

          <div id="w-node-_382ec610-f21d-6f96-c1a6-c041e49fdebd-e49fde4e" class="footer_bloque">
            <div class="heading-h3 is-mayus">
              <?php echo !empty($footer_payment_title) ? esc_html($footer_payment_title) : 'Medios de pago'; ?>
            </div>
            <div class="footer_bloque-pagos">
              <?php if ($footer_payment_image): ?>
                <img loading="lazy" src="<?php echo wp_get_attachment_image_url($footer_payment_image, 'full'); ?>" alt="" class="footer_bloque-imgpagos">
              <?php else: ?>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logos-formas-de-pago.png" alt="" class="footer_bloque-imgpagos">
              <?php endif; ?>
            </div>
          </div>

          <div id="w-node-_382ec610-f21d-6f96-c1a6-c041e49fdec2-e49fde4e" class="footer_bloque ultimo">
            <?php if ($footer_shipping_icon): ?>
              <img loading="lazy" src="<?php echo wp_get_attachment_image_url($footer_shipping_icon, 'full'); ?>" alt="" class="footer_bloque-imgmovilidad">
            <?php else: ?>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/icono-movidlidad.svg" alt="" class="footer_bloque-imgmovilidad">
            <?php endif; ?>
            <div class="heading-h3 is-mayus">
              <?php echo !empty($footer_shipping_title) ? esc_html($footer_shipping_title) : 'ENvíOS RÁPIDOS'; ?>
            </div>
            <div>
              <?php echo !empty($footer_shipping_text) ? esc_html($footer_shipping_text) : 'A todo el Perú'; ?>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="secccion-bg">
    <?php if ($footer_background): ?>
      <img src="<?php echo wp_get_attachment_image_url($footer_background, 'full'); ?>" alt="" loading="lazy" class="seccion-slider_fondo">
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/fondo-footer-1.jpg" alt="" loading="lazy" class="seccion-slider_fondo">
    <?php endif; ?>
  </div>

</section>

</div>

<!-- Primero: Definir los datos AJAX para filtros -->
<script>
var tienda_ajax = {
    ajax_url: '<?php echo admin_url('admin-ajax.php'); ?>',
    nonce: '<?php echo wp_create_nonce('tienda_filtros_nonce'); ?>'
};
console.log('✅ Datos AJAX definidos', tienda_ajax);
</script>

<!-- jQuery -->
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=69dc557ed352006dbe679e3b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Scripts del tema -->
<script src="<?php echo get_template_directory_uri(); ?>/js/webmaster.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>

<!-- Script de filtros de tienda -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tienda-filtros.js"></script>

<!-- Scripts para producto single -->
<script>
var wc_add_to_cart_params = {
    ajax_url: '<?php echo admin_url('admin-ajax.php'); ?>',
    checkout_url: '<?php echo wc_get_checkout_url(); ?>'
};
console.log('✅ Datos AJAX producto', wc_add_to_cart_params);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/producto-single.js"></script>

<?php wp_footer(); ?>

</body>
</html>