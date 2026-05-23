<?php get_header(); ?>


<?php



?>
    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2">En nuestra tienda,<br><span class="text-color-orange">encontrarás lo que buscas</span></h1>
              <p>Encuentra alimentos, accesorios, camas, juguetes y productos seleccionados para el bienestar de tu compañero.</p>
            </div>
            <div class="hero_info-imagen"><img src="<?php echo get_template_directory_uri(); ?>/images/perrito-marron.png" loading="lazy"  alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>

    <section class="seccion producto-single">

    <div class="container-seccion">

        <div class="wrp-seccion producto-single_wrp">

            <!-- GALERÍA -->
            <div class="producto-single_galeria">

                <div class="producto-single_thumbs">

                    <div class="producto-single_thumb is-active">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/perro-producto.png" alt="">
                    </div>

                    <div class="producto-single_thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/perro-producto.png" alt="">
                    </div>

                    <div class="producto-single_thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/perro-producto.png" alt="">
                    </div>

                    <div class="producto-single_thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/perro-producto.png" alt="">
                    </div>

                </div>

                <div class="producto-single_imagen">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/perro-producto.png" alt="">

                </div>

            </div>

            <!-- INFORMACIÓN -->
            <div class="producto-single_info">

                <div class="producto-single_categoria">
                    Accesorios para mascotas
                </div>

                <h1 class="producto-single_titulo">
                    Arnés acolchado ajustable para perros
                </h1>

                <div class="producto-single_rating">

                    <div class="producto-single_estrellas">
                        ★★★★★
                    </div>

                    <div class="producto-single_reviews">
                        128 reseñas
                    </div>

                </div>

                <div class="producto-single_precio">
                    S/ 89.90
                </div>

                <div class="producto-single_descripcion">
                    Arnés acolchado y transpirable para brindar máxima
                    comodidad y seguridad durante cada paseo.
                </div>

                <!-- COLORES -->
                <div class="producto-single_bloque">

                    <div class="producto-single_label">
                        Color
                    </div>

                    <div class="producto-single_colores">

                        <button class="producto-single_color is-active"></button>

                        <button class="producto-single_color"></button>

                        <button class="producto-single_color"></button>

                        <button class="producto-single_color"></button>

                    </div>

                </div>

                <!-- TALLAS -->
                <div class="producto-single_bloque">

                    <div class="producto-single_label">
                        Talla
                    </div>

                    <div class="producto-single_variaciones">

                        <button class="producto-single_var">
                            S
                        </button>

                        <button class="producto-single_var is-active">
                            M
                        </button>

                        <button class="producto-single_var">
                            L
                        </button>

                        <button class="producto-single_var">
                            XL
                        </button>

                    </div>

                </div>

                <!-- CANTIDAD -->
                <div class="producto-single_bloque">

                    <div class="producto-single_label">
                        Cantidad
                    </div>

                    <div class="producto-single_compra">

                        <div class="producto-single_cantidad">

                            <button>-</button>

                            <input type="number" value="1">

                            <button>+</button>

                        </div>

                        <button class="producto-single_btn">
                            Agregar al carrito
                        </button>

                    </div>

                </div>

                <a href="#" class="producto-single_btn-secundario">
                    Comprar ahora
                </a>

                <!-- BENEFICIOS -->
                <div class="producto-single_beneficios">

                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono"></div>
                        <span>Envíos a todo el Perú</span>
                    </div>

                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono"></div>
                        <span>Compra segura</span>
                    </div>

                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono"></div>
                        <span>Atención personalizada</span>
                    </div>

                    <div class="producto-single_beneficio">
                        <div class="producto-single_beneficio-icono"></div>
                        <span>Productos seleccionados</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="seccion producto-detalles">

    <div class="container-seccion">

        <div class="wrp-seccion producto-detalles_wrp">

            <div class="producto-detalles_descripcion">

                <h2 class="producto-detalles_titulo">
                    Descripción
                </h2>

                <div class="producto-detalles_texto">

                    <p>
                        Texto descriptivo del producto...
                    </p>

                    <ul>
                        <li>Característica 1</li>
                        <li>Característica 2</li>
                        <li>Característica 3</li>
                        <li>Característica 4</li>
                    </ul>

                </div>

            </div>

            <div class="producto-detalles_caracteristicas">

                <h2 class="producto-detalles_titulo">
                    Características
                </h2>

                <div class="producto-detalles_tabla">

                    <div class="producto-detalles_fila">
                        <span>Material</span>
                        <span>Poliéster</span>
                    </div>

                    <div class="producto-detalles_fila">
                        <span>Color</span>
                        <span>Verde Salvia</span>
                    </div>

                    <div class="producto-detalles_fila">
                        <span>Talla</span>
                        <span>M</span>
                    </div>

                    <div class="producto-detalles_fila">
                        <span>Incluye</span>
                        <span>Arnés ajustable</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<?php get_footer(); ?>