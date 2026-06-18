<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Tue May 19 2026 00:06:32 GMT+0000 (Coordinated Universal Time)  -->
<?php if (is_front_page()) : ?>

<html data-wf-page="69dc5581d352006dbe679ea6"
      data-wf-site="69dc557ed352006dbe679e3b">

<?php elseif (is_page('nosotros')) : ?>    

<html data-wf-page="69fe4dc35f1229f1d8e94868" data-wf-site="69dc557ed352006dbe679e3b">  

<?php elseif (is_page('contacto')) : ?>

<html data-wf-page="69fe6313d3badd55b0f3ab4e"
      data-wf-site="69dc557ed352006dbe679e3b">

<?php endif; ?>


<head>
  <meta charset="utf-8">
  <title>Cholito Feliz Espa</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/cholito-feliz-espa.webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/masterweb.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Great Vibes:400"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <?php 
        $logo = wp_get_attachment_image_url(carbon_get_theme_option('gl_menu_logo'), 'full');
        $default = get_template_directory_uri() . '/images/';
        $icon = $logo ?: $default . 'favicon.ico';
    ?>
    <link rel="shortcut icon" href="<?php echo $icon; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $logo ?: $default . 'webclip.png'; ?>">
  <script src="https://cdn.prod.website-files.com/69dc557ed352006dbe679e3b%2F67c09b20b86d062b55a6cbd6%2F69fbe669cfdf84cf64739d58%2Ftepowerups20250401-1.0.0.js" type="text/javascript" data-te-powerups="null"></script>
</head>
<body>
   <?php
  // Obtener los datos del menú desde Carbon Fields
  $menu_logo = carbon_get_theme_option('gl_menu_logo');
  $trust_items = carbon_get_theme_option('gl_menu_trust_items');
  $menu_items = carbon_get_theme_option('gl_menu_items');
?>
<div class="page-wrapper">
<div class="menu">
  <div class="container-seccion">
    <div class="menu_wrp">
      <a href="/" class="menu_linklogo">
        <?php if ($menu_logo): ?>
          <img loading="lazy" src="<?php echo wp_get_attachment_image_url($menu_logo, 'full'); ?>" alt="Logo" class="menu_logo">
      <?php else: ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logo-cholito-feliz.svg" alt="Logo" class="menu_logo">
      <?php endif; ?>
      </a>
      <div class="menu_navegacion">
        <nav class="menu_botonera">
          <div class="menu_movimiento">
            <div class="menu_btnss">
                
                <?php if (!empty($menu_items)): ?>
                    <?php foreach ($menu_items as $item): 
                        $icon = wp_get_attachment_image_url($item['icon'], 'thumbnail');
                        $title = $item['title'];
                        $menu_type = $item['menu_type'];
                    ?>
                        
                        <?php if ($menu_type == 'simple'): ?>
                            <!-- LINK SIMPLE -->
                            <a href="<?php echo esc_url($item['page_linky']); ?>" class="menu_linky">
                                <?php if ($icon): ?>
                                    <img loading="lazy" src="<?php echo $icon; ?>" alt="" class="menu_iconlinky">
                                <?php endif; ?>
                                <div class="menu_textly"><?php echo esc_html($title); ?></div>
                            </a>
                            
                        <?php elseif ($menu_type == 'institutional'): 
                        $institutional_columns = $item['institutional_columns'];
                        $social_links = $item['social_links'];
                        $character_image = wp_get_attachment_image_url($item['character_image'], 'full');
                    ?>
                        <!-- DROPDOWN INSTITUCIONAL -->
                        <div class="menu_drop">
                            <div class="menu_linky is-drop">
                                <?php if ($icon): ?>
                                    <img loading="lazy" src="<?php echo $icon; ?>" alt="" class="menu_iconlinky">
                                <?php endif; ?>
                                <div class="menu_textly"><?php echo esc_html($title); ?></div>
                                <div class="icon"><img class="aroowte" src="<?php echo get_template_directory_uri(); ?>/images/dropIzq.png"> </div>
                            </div>
                           <nav class="drop-control">
                                <div class="drop_move">
                                    <div class="drop-capa">
                                        <div class="drop_bx-close">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cerrar-sesion.png" loading="lazy" alt="" class="drop_close">
                                        </div>
                                        <div class="grilla-town">
                                            <div class="drop-content">
                                                <div class="drop-navegacion">
                                                    <div class="drop-listas">
                                                        
                                                        <!-- COLUMNAS INSTITUCIONALES -->
                                                        <?php if (!empty($institutional_columns)): ?>
                                                            <?php foreach ($institutional_columns as $col): 
                                                                $col_icon = wp_get_attachment_image_url($col['icon'], 'thumbnail');
                                                                $col_title = $col['title'];
                                                                $links = $col['links'];
                                                            ?>
                                                                <div class="drop-list">
                                                                    <div class="drop-title">
                                                                        <?php if ($col_icon): ?>
                                                                            <div class="drop-icon">
                                                                                <img loading="lazy" src="<?php echo $col_icon; ?>" alt="" class="drop-title_icon is-medium">
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <div class="drop-title-txt">
                                                                            <div class="title-etiqueta-drop"><?php echo esc_html($col_title); ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php if (!empty($links)): ?>
                                                                        <?php foreach ($links as $link): ?>
                                                                            <a href="<?php echo esc_url($link['url']); ?>" class="drop-list-item">
                                                                                <div><?php echo esc_html($link['label']); ?></div>
                                                                            </a>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                        
                                                        <!-- REDES SOCIALES -->
                                                        <?php if (!empty($social_links)): ?>
                                                            <div class="drop-list">
                                                                <div class="drop-title">
                                                                    <div class="drop-icon">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/redes-sociales.png" alt="" class="drop-title_icon is-medium">
                                                                    </div>
                                                                    <div class="drop-title-txt">
                                                                        <div class="title-etiqueta-drop">Redes sociales</div>
                                                                    </div>
                                                                </div>
                                                                <?php foreach ($social_links as $social): 
                                                                    $social_icon = wp_get_attachment_image_url($social['icon'], 'thumbnail');
                                                                ?>
                                                                    <a href="<?php echo esc_url($social['url']); ?>" class="drop-list-item is-red" target="_blank">
                                                                        <?php if ($social_icon): ?>
                                                                            <img loading="lazy" src="<?php echo $social_icon; ?>" alt="" class="drop_menu-icon">
                                                                        <?php endif; ?>
                                                                        <div><?php echo esc_html($social['label']); ?></div>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        
                                                    </div>
                                                    
                                                    <!-- BENEFICIOS TRUST -->
                                                    <div class="transp_confianza">
                                                        <?php if (!empty($trust_items)): ?>
                                                            <?php $trust_count = count($trust_items); $i = 0; ?>
                                                            <?php foreach ($trust_items as $trust): 
                                                                $trust_icon = wp_get_attachment_image_url($trust['icon'], 'thumbnail');
                                                                $i++;
                                                            ?>
                                                                <div class="transp_confianza-bx">
                                                                    <?php if ($trust_icon): ?>
                                                                        <img loading="lazy" src="<?php echo $trust_icon; ?>" alt="" class="transp_confianza-icon">
                                                                    <?php endif; ?>
                                                                    <div><?php echo esc_html($trust['text']); ?></div>
                                                                </div>
                                                                <?php if ($i < $trust_count): ?>
                                                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/line-orange.svg" alt="" class="transp_confianza-line">
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- IMAGEN LATERAL -->
                                            <?php if ($character_image): ?>
                                                <div class="drop-personaje">
                                                    <img sizes="100vw" alt="" src="<?php echo $character_image; ?>" loading="lazy" class="drop-personaje_image">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="transp_confianza is-hide"></div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                                                
                <?php elseif ($menu_type == 'categories_woo'): 
                    $category_columns = $item['category_columns'];
                    $character_image = wp_get_attachment_image_url($item['character_image'], 'full');
                ?>
                            <!-- DROPDOWN WOOCOMMERCE -->
                            <div class="menu_drop">
                                <div class="menu_linky is-drop">
                                    <?php if ($icon): ?>
                                        <img loading="lazy" src="<?php echo $icon; ?>" alt="" class="menu_iconlinky">
                                    <?php endif; ?>
                                    <div class="menu_textly"><?php echo esc_html($title); ?></div>
                                    <div class="icon"><img class="aroowte" src="<?php echo get_template_directory_uri(); ?>/images/dropIzq.png"> </div>
                                </div>
                                <nav class="drop-control">
                                    <div class="drop_move">
                                        <div class="drop-capa">
                                            <div class="drop_bx-close">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/cerrar-sesion.png" loading="lazy" alt="" class="drop_close">
                                            </div>
                                            <div class="grilla-town">
                                                <div class="drop-content">
                                                    <div class="drop-navegacion">
                                                        <div class="drop-listas">
                                                            
                                                            <?php if (!empty($category_columns)): ?>
                                                                <?php foreach ($category_columns as $cat_col):
                                                                    $cat_icon = wp_get_attachment_image_url($cat_col['icon'], 'thumbnail');
                                                                    $cat_title = $cat_col['title'];
                                                                    $cat_subtitle = $cat_col['subtitle'];
                                                                    $button_text = $cat_col['button_text'];
                                                                    $button_link = $cat_col['button_link'];
                                                                    $custom_links = $cat_col['custom_links'];
                                                                ?>
                                                                    <div class="drop-list">
                                                                        <div class="drop-title">
                                                                            <?php if ($cat_icon): ?>
                                                                                <div class="drop-icon">
                                                                                    <img loading="lazy" src="<?php echo $cat_icon; ?>" alt="" class="drop-title_icon">
                                                                                </div>
                                                                            <?php endif; ?>
                                                                            <div class="drop-title-txt">
                                                                                <div class="title-etiqueta-drop"><?php echo esc_html($cat_title); ?></div>
                                                                                <?php if ($cat_subtitle): ?>
                                                                                    <div class="text-etiqueta-drop"><?php echo esc_html($cat_subtitle); ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <?php if (!empty($custom_links)): ?>
                                                                            <?php foreach ($custom_links as $link): ?>
                                                                                <a href="<?php echo esc_url($link['link_url']); ?>" class="drop-list-item ">
                                                                                    <div><?php echo esc_html($link['link_text']); ?></div>
                                                                                </a>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                        
                                                                        <?php if (!empty($button_text) && !empty($button_link)): ?>
                                                                            <a href="<?php echo esc_url($button_link); ?>" class="button-icon is-outline">
                                                                                <div><?php echo esc_html($button_text); ?></div>
                                                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquierda-1.svg" alt="">
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                            
                                                        </div>
                                                
                                                <div class="transp_confianza">
                                                    <?php if (!empty($trust_items)): ?>
                                                        <?php $trust_count = count($trust_items); $i = 0; ?>
                                                        <?php foreach ($trust_items as $trust): 
                                                            $trust_icon = wp_get_attachment_image_url($trust['icon'], 'thumbnail');
                                                            $i++;
                                                        ?>
                                                            <div class="transp_confianza-bx">
                                                                <?php if ($trust_icon): ?>
                                                                    <img loading="lazy" src="<?php echo $trust_icon; ?>" alt="" class="transp_confianza-icon">
                                                                <?php endif; ?>
                                                                <div><?php echo esc_html($trust['text']); ?></div>
                                                            </div>
                                                            <?php if ($i < $trust_count): ?>
                                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/line-orange.svg" alt="" class="transp_confianza-line">
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php if ($character_image): ?>
                                            <div class="drop-personaje">
                                                <img sizes="100vw" alt="" src="<?php echo $character_image; ?>" loading="lazy" class="drop-personaje_image">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="transp_confianza is-hide"></div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        
                    <?php endif; ?>
                    
                <?php endforeach; ?>
            <?php endif; ?>
                
                <!-- CARRITO -->
                <a href="/cart" class="menu_carrito">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Frame-33.png" alt="" class="menu_iconcarrito">
                    <div class="menu_carrito-txt">Ver carrito mi compar</div>
                </a>
                
            </div>
          </div>
        </nav>
      </div>
        <div class="menu_btn">
            <div class="menu_btn-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.png" class="icon_mainWP">
            </div>
        </div>
    </div>
  </div>
</div>