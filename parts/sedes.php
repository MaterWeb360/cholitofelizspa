<?php
// Obtener datos de sedes desde Carbon Fields
$stores_title_1 = carbon_get_theme_option('con_stores_title_1');
$stores_title_2 = carbon_get_theme_option('con_stores_title_2');
$stores_description = carbon_get_theme_option('con_stores_description');
$stores_locations = carbon_get_theme_option('con_stores_locations');
?>

<section class="seccion">
  <div class="padding-seccion">
    <div class="container-seccion">
      <div class="wrp-seccion is-center">
        
        <div class="title-seccion">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Group-86.png" loading="lazy" alt="" class="title_alas">
          <h1 class="subtitle-seccion">
            <span><?php echo !empty($stores_title_1) ? esc_html($stores_title_1) : 'Visitanos en'; ?></span>
            <br>
            <span class="subtitle-down-seccion"><?php echo !empty($stores_title_2) ? esc_html($stores_title_2) : 'nuestras tiendas'; ?></span>
          </h1>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Group-85.png" loading="lazy" alt="" class="title_alas">
        </div>
        
        <p class="titulo_desp">
          <?php echo !empty($stores_description) ? nl2br(esc_html($stores_description)) : 'Encuentra la sede más cercana y ven por <br>todo lo que tu mascota necesita.'; ?>
        </p>
        
        <?php if (!empty($stores_locations)): ?>
          <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="sedes_tab w-tabs">
            
            <!-- PESTAÑAS (TABS) -->
            <div class="sedes_tab-main w-tab-menu">
              <?php $tab_index = 1; ?>
              <?php foreach ($stores_locations as $location): ?>
                <a data-w-tab="Tab <?php echo $tab_index; ?>" 
                   class="sedes_tab-item w-inline-block w-tab-link <?php echo $tab_index === 1 ? 'w--current' : ''; ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pata-2.png" loading="lazy" alt="" class="sedes_tab-icon">
                  <div><?php echo esc_html($location['tab_title']); ?></div>
                </a>
                <?php $tab_index++; ?>
              <?php endforeach; ?>
            </div>
            
            <!-- CONTENIDO DE LAS PESTAÑAS -->
            <div class="sedes_tab-content w-tab-content">
              <?php $tab_index = 1; ?>
              <?php foreach ($stores_locations as $location):
                $branch_name = $location['branch_name'];
                $map_embed = $location['map_embed'];
                $store_image = wp_get_attachment_image_url($location['store_image'], 'full');
                $reference_text = $location['reference_text'];
                $address = $location['address'];
                $phone = $location['phone'];
                $schedule = $location['schedule'];
                $button_text = $location['button_text'];
                $button_link = $location['button_link'];
              ?>
                <div data-w-tab="Tab <?php echo $tab_index; ?>" 
                     class="sedes_tab-pane w-tab-pane <?php echo $tab_index === 1 ? 'w--tab-active' : ''; ?>">
                  
                  <div class="sedes_tab-box">
                    
                    <!-- MAPA -->
                    <div class="sedes_code w-embed w-iframe">
                      <?php echo !empty($map_embed) ? $map_embed : '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.2796869783238!2d-71.96924292486767!3d-13.518419886849475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd753615a08d9%3A0xf52feaef1184374a!2sCholito%20feliz%20pet%20shop%20spa!5e0!3m2!1ses!2spe!4v1778276792244!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'; ?>
                    </div>
                    
                    <!-- FOTO + REFERENCIA -->
                    <div class="sedes_tab-foto">
                      <?php if ($store_image): ?>
                        <img src="<?php echo $store_image; ?>" loading="lazy" alt="" class="sedes_tab-imagen">
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ChatGPT-Image-8-may-2026-04_56_11-p.m-1.png" loading="lazy" alt="" class="sedes_tab-imagen">
                      <?php endif; ?>
                      <div class="sedes_tab-msg">
                        <div class="text-size-medium">Referencia:</div>
                        <div><?php echo !empty($reference_text) ? esc_html($reference_text) : 'Nuestra tienda esta ubicada al lado del mercado, en la calle tal.'; ?></div>
                      </div>
                    </div>
                    
                    <!-- INFORMACIÓN DE LA SEDE -->
                    <div class="sedes_tab-infosede">
                      <div class="sedes_tab-subtitulo">
                        <div class="etiqueta-orange">
                          <div>Sede</div>
                        </div>
                        <div class="heading-h2"><?php echo esc_html($branch_name); ?></div>
                      </div>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/Group-76.png" loading="lazy" alt="">
                      
                      <div class="sedes_tab-list">
                        <!-- DIRECCIÓN -->
                        <div class="sedes_tab-listitem">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Dirección</div>
                            <div><?php echo esc_html($address); ?></div>
                          </div>
                        </div>
                        
                        <!-- TELÉFONO -->
                        <div class="sedes_tab-listitem">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Frame-126.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Teléfono</div>
                            <div><?php echo esc_html($phone); ?></div>
                          </div>
                        </div>
                        
                        <!-- HORARIO -->
                        <div class="sedes_tab-listitem">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Frame-125.png" loading="lazy" alt="" class="sedes_tab-icono">
                          <div class="sedes_tab-txt">
                            <div class="sedes_tab-titulo">Horario de atención</div>
                            <div><?php echo esc_html($schedule); ?></div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- BOTÓN -->
                      <?php if (!empty($button_text) && !empty($button_link)): ?>
                        <a href="<?php echo esc_url($button_link); ?>" class="button-icon is-orange is-full w-inline-block" target="_blank">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/telegrama-1.svg" loading="lazy" alt="" class="button-icon-medium">
                          <div><strong><?php echo esc_html($button_text); ?></strong></div>
                        </a>
                      <?php endif; ?>
                    </div>
                    
                  </div>
                </div>
                <?php $tab_index++; ?>
              <?php endforeach; ?>
            </div>
            
          </div>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
  
  <div class="secccion-bg">
    <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/fondo-sedes-1.jpg" loading="lazy" class="seccion-slider_fondo">
  </div>
  
</section>