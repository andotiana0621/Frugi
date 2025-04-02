<?php get_header(); ?>
<section class="mission">
  <div class="mission-content">
    <h2><?php echo get_theme_mod('mission_titre'); ?></h2>
    <p><?php echo get_theme_mod('mission_texte'); ?></p>
    <a href="<?php echo esc_url(get_theme_mod('mission_bouton_lien')); ?>" class="mission-btn">
      <div class="mission-txt">Notre Histoire >></div>
    </a>
  </div>
  <div class="mission-images">
    <img class="image-mission1" src="<?php echo esc_url(get_theme_mod('mission_image1')); ?>" alt="">
    <img class="image-mission2" src="<?php echo esc_url(get_theme_mod('mission_image2')); ?>" alt="">
  </div>
</section>

<?php get_footer(); ?>