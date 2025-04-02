<?php
function themefrugi_customize_register($wp_customize) {

// Section Bannière
$wp_customize->add_section('banniere_section', [
  'title' => 'Bannière d’accueil',
  'priority' => 30,
]);

// Titre
$wp_customize->add_setting('banniere_titre', [
  'default' => 'Bienvenue sur mon site !',
  'transport' => 'refresh',
]);
$wp_customize->add_control('banniere_titre', [
  'label' => 'Titre de la bannière',
  'section' => 'banniere_section',
  'type' => 'text',
]);

// Description
$wp_customize->add_setting('banniere_texte', [
  'default' => 'Votre texte ici...',
  'transport' => 'refresh',
]);
$wp_customize->add_control('banniere_texte', [
  'label' => 'Texte de la bannière',
  'section' => 'banniere_section',
  'type' => 'textarea',
]);

// Image de fond
for ($i = 1; $i <= 3; $i++) {
  $wp_customize->add_setting("banniere_image_$i", [
    'default' => '',
    'transport' => 'refresh',
  ]);

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "banniere_image_$i", [
    'label' => "Image $i de la bannière",
    'section' => 'banniere_section',
    'settings' => "banniere_image_$i",
  ]));
}
}
add_action('customize_register', 'themefrugi_customize_register');
//ajout logo dynamique 
function themefrugi_customize_logo($wp_customize) {
  $wp_customize->add_section('logo_section', [
    'title' => 'Logo',
    'priority' => 20,
  ]);

  $wp_customize->add_setting('site_logo');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', [
    'label' => 'Logo du site',
    'section' => 'logo_section',
    'settings' => 'site_logo',
  ]));
}
add_action('customize_register', 'themefrugi_customize_logo');

// ajout de menu 
function themefrugi_register_menus() {
  register_nav_menus([
    'menu-principal' => 'Menu principal',
    'menu-footer'    => 'Menu de pied de page'
  ]);
}
add_action('after_setup_theme', 'themefrugi_register_menus');

//ajout bootstrap 
function themefrugi_enqueue_assets() {
  // CSS Bootstrap
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
  
  // JS Bootstrap
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'themefrugi_enqueue_assets');
//ajout section mission
function themefrugi_section_mission($wp_customize) {
  $wp_customize->add_section('section_mission', [
    'title' => 'Section Notre Mission',
    'priority' => 40,
  ]);

  // Titre
  $wp_customize->add_setting('mission_titre', [
    'default' => 'NOTRE MISSION : REINVENTER LE FRUIT',
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control('mission_titre', [
    'label' => 'Titre',
    'section' => 'section_mission',
    'type' => 'text',
  ]);

  // Texte
  $wp_customize->add_setting('mission_texte', [
    'default' => 'Depuis sa création en 1972...',
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control('mission_texte', [
    'label' => 'Texte de présentation',
    'section' => 'section_mission',
    'type' => 'textarea',
  ]);

  // Image 1
  $wp_customize->add_setting('mission_image1');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mission_image1', [
    'label' => 'Image de gauche',
    'section' => 'section_mission',
    'settings' => 'mission_image1',
  ]));

  // Image 2
  $wp_customize->add_setting('mission_image2');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mission_image2', [
    'label' => 'Image de droite',
    'section' => 'section_mission',
    'settings' => 'mission_image2',
  ])); 
}
add_action('customize_register', 'themefrugi_section_mission');



?>
