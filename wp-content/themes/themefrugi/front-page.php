<?php get_header(); ?>
<section class="mission">
  <div class="mission-content">
    <h2 class="frugi-h2"><?php echo get_theme_mod('mission_titre'); ?></h2>
    <p class="frugi-description"><?php echo get_theme_mod('mission_texte'); ?></p>
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
    <h2 class="frugi-h2"><?php echo get_theme_mod('gamme_titre'); ?></h2>
    <p class="frugi-description"><?php echo get_theme_mod('gamme_texte'); ?></p>
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
<section class="chiffres">
  <div class="chiffres-description">
    <h2 class="frugi-h2" ><?php echo get_theme_mod('chiffres_titre'); ?></h2>
    <p class="frugi-description"><?php echo get_theme_mod('chiffres_description'); ?></p>
  </div>
 
  <div class="chiffres-blocs" style="background-image: url('<?php echo esc_url(get_theme_mod('chiffres_background')); ?>');">
  <div class="overlay"></div>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
      
      <div class="bloc">
        <h3 class="counter" data-target="<?php echo esc_html(get_theme_mod("chiffres_valeur_$i")); ?>">0</h3>
        <p><?php echo esc_html(get_theme_mod("chiffres_texte_$i")); ?></p>
      </div>
    
    <?php endfor; ?>
  </div>
 
</section>

<section class="engagements">
  <div class="engagements-intro">
    <p><?php echo esc_html(get_theme_mod('engagements_intro')); ?></p>
  </div>

  <div class="engagements-wrapper">
    <!-- Colonne gauche (TEXTES) -->
    <div class="engagements-left">
      <?php for ($i = 1; $i <= 3; $i++) : ?>
        <div class="engagement-text">
          <div class="icone-title">
            <?php if (get_theme_mod("engagement_icon_$i")) : ?>
              <img class="engagement-icon" src="<?php echo esc_url(get_theme_mod("engagement_icon_$i")); ?>" alt="Icon <?php echo $i; ?>">
            <?php endif; ?>
            <div class="engagement-description">
              <?php if (get_theme_mod("engagement_title_$i")) : ?>
                <h3><?php echo esc_html(get_theme_mod("engagement_title_$i")); ?></h3>
              <?php endif; ?>
              <?php if (get_theme_mod("engagement_text_$i")) : ?>
                <p><?php echo esc_html(get_theme_mod("engagement_text_$i")); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <!-- Colonne droite (IMAGES) -->
    <div class="engagements-right">
      <?php for ($i = 1; $i <= 2; $i++) : ?>
        <?php if (get_theme_mod("engagement_image_{$i}_1")) : ?>
          <img src="<?php echo esc_url(get_theme_mod("engagement_image_{$i}_1")); ?>" alt="Image engagement <?php echo $i; ?>">
        <?php endif; ?>
      <?php endfor; ?>

      <?php if (get_theme_mod("engagement_image_3_1")) : ?>
        <img src="<?php echo esc_url(get_theme_mod("engagement_image_3_1")); ?>" alt="Image engagement 3 - 1">
      <?php endif; ?>
      <?php if (get_theme_mod("engagement_image_3_2")) : ?>
        <img src="<?php echo esc_url(get_theme_mod("engagement_image_3_2")); ?>" alt="Image engagement 3 - 2">
      <?php endif; ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>