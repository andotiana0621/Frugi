<?php get_header(); ?>
<section class="mission">
  <div class="mission-content">
    <h2><?php echo get_theme_mod('mission_titre'); ?></h2>
    <p><?php echo get_theme_mod('mission_texte'); ?></p>
    <a href="<?php echo esc_url(get_theme_mod('mission_bouton_lien')); ?>" class="mission-btn">
      <div class="btn-action">Notre Histoire >></div>
    </a>
  </div>
  <div class="mission-images">
    <img class="image-mission1" src="<?php echo esc_url(get_theme_mod('mission_image1')); ?>" alt="">
    <img class="image-mission2" src="<?php echo esc_url(get_theme_mod('mission_image2')); ?>" alt="">
  </div>
</section>
<section class="gamme">
  <div class="gamme-description">
    <h2><?php echo get_theme_mod('gamme_titre'); ?></h2>
    <p><?php echo get_theme_mod('gamme_texte'); ?></p>
  </div>
  
  <div class="container-gamme">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide-active">
        <img src="http://localhost/frugi/wp-content/uploads/2025/04/2024-01-01.jpg" alt="">
        <div class="info">
          <h4 class="name">
            Giratina
          </h4>
          <span class="type">
            Ghost, Dragon
          </span>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-active">
        <img src="http://localhost/frugi/wp-content/uploads/2025/04/w-star-mix-1.1920x0.jpg" alt="">
        <div class="info">
          <h4 class="name">
            Rayquaza
          </h4>
          <span class="type">
            Dragon, Flying
          </span>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-active">
        <img src="http://localhost/frugi/wp-content/uploads/2025/04/w2-assortiment-nl-2022-compleet.1920x0.jpg" alt="">
        <div class="info">
          <h4 class="name">
            Kyrum
          </h4>
          <span class="type">
            Dragon, Ice
          </span>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-active">
        <img src="http://localhost/frugi/wp-content/uploads/2025/04/417c9c0b51c712f9854ae5bbfe4e9df5_XL.jpg" alt="">
        <div class="info">
          <h4 class="name">
            Lugia
          </h4>
          <span class="type">
            Psychic, Flying
          </span>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-active">
        <img src="http://localhost/frugi/wp-content/uploads/2025/04/w2-assortiment-nl-2022-compleet.1920x0.jpg" alt="">
        <div class="info">
          <h4 class="name">
            Groudon
          </h4>
          <span class="type">
            Ground
          </span>
        </div>
      </div>
    </div>
    <!--  pagination -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
    
  </div>
</div>

<a href="<?php echo esc_url(get_theme_mod('mission_bouton_lien')); ?>" class="mission-btn">
      <div class="btn-action">Explorer notre gamme >></div>
</a>
</section>

<?php get_footer(); ?>