<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="menu">
    <?php $logo = get_theme_mod('site_logo'); ?>
        <div class="logo">
             <a href="#"><img src="<?php echo esc_url($logo); ?>" alt="Logo du site"></a>
        </div>
  
      <?php
            wp_nav_menu([
              'theme_location' => 'menu-principal',
              'container' => 'nav',
              'menu_class' => 'main-menu'
            ]);
      ?>


    <div class="contact-menu"><a href="">Nous-Contacter</a></div>
     </div>
    
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-wrap="true"  data-bs-pause="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo esc_url(get_theme_mod('banniere_image_1')); ?>" class="d-block w-100 object-fit-cover" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url(get_theme_mod('banniere_image_2')); ?>" class="d-block w-100 object-fit-cover" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url(get_theme_mod('banniere_image_3')); ?>" class="d-block w-100 object-fit-cover" alt="Image 3">
    </div>
  </div>
</div>

  </header>