<?php get_header(); ?>

<?php 

//Hero
  $gl_hero_title_1 = carbon_get_post_meta(get_the_ID(), 'gl_hero_title_1');
  $gl_hero_title_2 = carbon_get_post_meta(get_the_ID(), 'gl_hero_title_2');
  $gl_hero_description = carbon_get_post_meta(get_the_ID(), 'gl_hero_description');
  $gl_hero_main_image = carbon_get_post_meta(get_the_ID(), 'gl_hero_main_image');

// Contenido Legal
  $gl_legal_content = carbon_get_post_meta(get_the_ID(), 'gl_legal_content');

?>

    <section class="seccion">
      <div class="padding-seccion is-banner-internas">
        <div class="container-seccion">
          <div class="wrp-seccion _2col">
            <div class="herop_info">
              <h1 class="heading-h2"><?= $gl_hero_title_1; ?><span class="text-color-orange"><?= $gl_hero_title_2; ?></span></h1>
              <p class="hero-prf"><?= $gl_hero_description; ?></p>
            </div>
            <div class="hero_info-imagen"><img src="<?= $gl_hero_main_image; ?>" loading="lazy"  alt="" class="hero_info-img"></div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img s alt="" src="<?php echo get_template_directory_uri(); ?>/images/Banner-interna-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>

    <section class="seccion">
      <div class="padding-seccion">
        <div class="container-seccion">
          <div class="wrp-seccion">
            <div class="trato_wrp">
              <div class="trato_seccion">
                <?= $gl_legal_content; ?> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="secccion-bg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/Categorías-principales-de-productos-1.jpg" loading="lazy" class="seccion-slider_fondo"></div>
    </section>

<?php get_footer(); ?>