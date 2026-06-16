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
          <!-- BARRA LATERAL DE FILTROS -->
          <div class="tienda_box">
            <div class="tienda_title">
              <img src="<?php echo get_template_directory_uri(); ?>/images/filtrar-1-1.svg" loading="lazy" alt="" class="tienda_title-icon">
              <div>FILTROS</div>
            </div>
            <div class="tienda_limpia" id="limpiar-filtros">
              <img src="<?php echo get_template_directory_uri(); ?>/images/filtrar-3-1.svg" loading="lazy" alt="">
              <div>Limpiar filtros</div>
            </div>
            
            <!-- CATEGORÍAS CON SUBCATEGORÍAS -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-categorias">Categorías <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-categorias">
                <?php
                // Definir categorías principales con sus slugs
                $categorias_principales = array(
                  'accesorios-de-higiene' => 'Accesorios de Higiene',
                  'accesorios-de-confort' => 'Accesorios de confort',
                  'alimentos-premium' => 'Alimentos Premium',
                  'accesorios-de-paseo' => 'Accesorios de paseo',
                  'diversion-y-premios' => 'Diversión y premios',
                  'ropa-y-moda' => 'Ropa y moda'
                );
                
                foreach ($categorias_principales as $slug => $nombre) : 
                  // Obtener el término de la categoría
                  $term = get_term_by('slug', $slug, 'product_cat');
                  $hijos = array();
                  
                  if ($term && !is_wp_error($term)) {
                    // Obtener subcategorías hijas
                    $hijos_ids = get_term_children($term->term_id, 'product_cat');
                    if (!empty($hijos_ids) && !is_wp_error($hijos_ids)) {
                      foreach ($hijos_ids as $hijo_id) {
                        $hijo = get_term_by('id', $hijo_id, 'product_cat');
                        if ($hijo) {
                          $hijos[] = $hijo;
                        }
                      }
                    }
                  }
                  ?>
                  <div class="categoria-item" style="margin-bottom: 8px;">
                    <label class="w-checkbox tienda_filtros-check">
                      <input type="checkbox" class="w-checkbox-input check_tienda filtro-categoria" data-categoria="<?php echo $slug; ?>">
                      <span class="tienda_filtros-txt w-form-label"><strong><?php echo $nombre; ?></strong></span>
                    </label>
                    
                    <?php if (!empty($hijos)) : ?>
                      <div class="subcategorias" style="margin-left: 25px; margin-top: 5px;">
                        <?php foreach ($hijos as $hijo) : ?>
                          <label class="w-checkbox tienda_filtros-check" style="display: flex; align-items: center; margin-bottom: 5px;">
                            <input type="checkbox" class="w-checkbox-input check_tienda filtro-categoria" data-categoria="<?php echo $hijo->slug; ?>" style="margin-right: 8px;">
                            <span class="tienda_filtros-txt w-form-label" style="font-size: 13px;">— <?php echo $hijo->name; ?></span>
                          </label>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- ATRIBUTOS: Edad -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-edad">Edad <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-edad">
                <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="edad" data-term="adulto"><span class="tienda_filtros-txt w-form-label">Adulto</span></label>
                <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="edad" data-term="cachorro"><span class="tienda_filtros-txt w-form-label">Cachorro</span></label>
                <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="edad" data-term="senior"><span class="tienda_filtros-txt w-form-label">Senior</span></label>
              </div>
            </div>
            
            <!-- ATRIBUTOS: Marca -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-marca">Marca <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-marca">
                <?php $marcas = array('Biofresh', 'Bravery', 'Brit Care', 'Brit Premium', 'Canbo', 'Excellent', 'Gran Plus', 'Hills', 'Pro Plan');
                foreach ($marcas as $marca) : ?>
                  <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="marca" data-term="<?php echo sanitize_title($marca); ?>"><span class="tienda_filtros-txt w-form-label"><?php echo $marca; ?></span></label>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- ATRIBUTOS: Mascota -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-mascota">Mascota <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-mascota">
                <?php $mascotas = array('Ave', 'Conejo', 'Gato', 'Hamster', 'Perro');
                foreach ($mascotas as $mascota) : ?>
                  <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="mascota" data-term="<?php echo sanitize_title($mascota); ?>"><span class="tienda_filtros-txt w-form-label"><?php echo $mascota; ?></span></label>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- ATRIBUTOS: Peso -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-peso">Peso <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-peso">
                <?php $pesos = array('1.5kg', '2kg', '3kg', '4kg', '7kg', '8kg', '10.1kg', '12kg', '15kg', '50kg');
                foreach ($pesos as $peso) : ?>
                  <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="peso" data-term="<?php echo sanitize_title($peso); ?>"><span class="tienda_filtros-txt w-form-label"><?php echo $peso; ?></span></label>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- ATRIBUTOS: Talla -->
            <div class="filtro-grupo">
              <h4 class="filtro-titulo filtro-toggle" data-target="filtro-talla">Talla <span class="filtro-icono">▼</span></h4>
              <div class="filtro-opciones" id="filtro-talla">
                <?php $tallas = array('XS', 'S', 'M', 'L', 'XL');
                foreach ($tallas as $talla) : ?>
                  <label class="w-checkbox tienda_filtros-check"><input type="checkbox" class="w-checkbox-input check_tienda filtro-atributo" data-tax="talla" data-term="<?php echo strtolower($talla); ?>"><span class="tienda_filtros-txt w-form-label"><?php echo $talla; ?></span></label>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- Botón aplicar filtros (opcional, ya no es necesario pero lo dejo por si acaso) -->
            <!-- <button id="aplicar-filtros" class="tienda_filtros-buscar w-button">Aplicar filtros</button> -->
          </div>
          
          <!-- SECCIÓN DE PRODUCTOS -->
          <div class="tienda_tarjetas">
            <div class="tienda_tarjetas-title">
              <h2 class="tienda_tarjeta-ti">Tienda Cholito Feliz</h2>
              <div class="text-block-3">Encuentra todo lo que tu mascota necesita.</div>
            </div>
            <?php
              $total_productos = wp_count_posts('product')->publish;
              $primer_item = 1;
              $ultimo_item = min(12, $total_productos);
              ?>
              <div class="contador-productos" id="contador-productos">
                  Mostrando <?php echo $primer_item; ?>-<?php echo $ultimo_item; ?> de <?php echo $total_productos; ?> productos
              </div>
            
            <!-- AQUÍ es donde van las tarjetas de productos -->
            <div class="tarjetas" id="productos-container">
              <?php get_template_part('parts/loop', 'productos'); ?>
            </div>
            
            <div id="paginacion-container"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secccion-bg">
    <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Tienda-1.jpg" loading="lazy" class="seccion-slider_fondo">
  </div>
</section>
<?php get_template_part('parts/sedes'); ?>

<!-- Agregar nonce para JS -->
<meta name="ajax-nonce" content="<?php echo wp_create_nonce('tienda_filtros_nonce'); ?>">

<!-- Cargar el JS después de jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tienda-filtros.js"></script>
<?php get_footer(); ?>