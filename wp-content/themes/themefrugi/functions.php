<?php

function themefrugi_enqueue_jquery() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'themefrugi_enqueue_jquery');

function themefrugi_enqueue_swiper() {
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'themefrugi_enqueue_swiper');


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

  // Section gamme
$wp_customize->add_section('section_gamme', [
  'title' => 'Section Gamme',
  'priority' => 50,
]);

// Titre
$wp_customize->add_setting('gamme_titre', [
  'default' => 'NOTRE GAMME : FABRICATION 100% FRUGI',
  'transport' => 'refresh',
]);
$wp_customize->add_control('gamme_titre', [
  'label' => 'Titre de la section gamme',
  'section' => 'section_gamme',
  'type' => 'text',
]);

// Texte
$wp_customize->add_setting('gamme_texte', [
  'default' => 'Texte de description de la gamme...',
  'transport' => 'refresh',
]);
$wp_customize->add_control('gamme_texte', [
  'label' => 'Texte de la section gamme',
  'section' => 'section_gamme',
  'type' => 'textarea',
]);

// section chfiffres

$wp_customize->add_section('chiffres_section', [
  'title' => 'Section Chiffres',
  'priority' => 40,
]);

// Texte titre
$wp_customize->add_setting('chiffres_titre', [
  'default' => 'FRUGI EN QUELQUES CHIFFRES',
]);
$wp_customize->add_control('chiffres_titre', [
  'label' => 'Titre de la section',
  'section' => 'chiffres_section',
  'type' => 'text',
]);

// Texte description
$wp_customize->add_setting('chiffres_description', [
  'default' => 'Texte de description...',
]);
$wp_customize->add_control('chiffres_description', [
  'label' => 'Description',
  'section' => 'chiffres_section',
  'type' => 'textarea',
]);

// Boucle pour les 3 blocs
for ($i = 1; $i <= 3; $i++) {

  // Chiffre
  $wp_customize->add_setting("chiffres_valeur_$i", [
      'default' => '0',
  ]);
  $wp_customize->add_control("chiffres_valeur_$i", [
      'label' => "Valeur $i",
      'section' => 'chiffres_section',
      'type' => 'text',
  ]);

  // Texte description
  $wp_customize->add_setting("chiffres_texte_$i", [
      'default' => 'Description...',
  ]);
  $wp_customize->add_control("chiffres_texte_$i", [
      'label' => "Texte $i",
      'section' => 'chiffres_section',
      'type' => 'text',
  ]);
}

// Image de fond (optionnelle)
$wp_customize->add_setting('chiffres_background', []);
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chiffres_background', [
  'label' => 'Image de fond',
  'section' => 'chiffres_section',
  'settings' => 'chiffres_background',
]));


}
add_action('customize_register', 'themefrugi_section_mission');

//ajout section engagement 
function themefrugi_customizer_engagements($wp_customize) {
  $wp_customize->add_section('engagements_section', [
    'title' => 'Nos engagements',
    'priority' => 50,
  ]);

  // Texte d’intro
  $wp_customize->add_setting('engagements_intro', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('engagements_intro', [
    'label' => 'Texte d’introduction',
    'section' => 'engagements_section',
    'type' => 'textarea',
  ]);

  // Ajouter 3 blocs
  for ($i = 1; $i <= 3; $i++) {
    // Icône
    $wp_customize->add_setting("engagement_icon_$i");
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "engagement_icon_$i", [
      'label' => "Icône engagement $i",
      'section' => 'engagements_section',
      'settings' => "engagement_icon_$i",
    ]));
  
    // Titre
    $wp_customize->add_setting("engagement_title_$i", ['default' => '']);
    $wp_customize->add_control("engagement_title_$i", [
      'label' => "Titre engagement $i",
      'section' => 'engagements_section',
      'type' => 'text',
    ]);
    
  
    // Texte
    $wp_customize->add_setting("engagement_text_$i", ['default' => '']);
    $wp_customize->add_control("engagement_text_$i", [
      'label' => "Texte engagement $i",
      'section' => 'engagements_section',
      'type' => 'textarea',
    ]);
  
    // Image 1 (pour tous les engagements)
    $wp_customize->add_setting("engagement_image_{$i}_1");
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "engagement_image_{$i}_1", [
      'label' => "Image engagement $i - 1",
      'section' => 'engagements_section',
      'settings' => "engagement_image_{$i}_1",
    ]));
  
    // Image 2 (uniquement pour l'engagement 3)
    if ($i == 3) {
      $wp_customize->add_setting("engagement_image_{$i}_2");
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "engagement_image_{$i}_2", [
        'label' => "Image engagement $i - 2",
        'section' => 'engagements_section',
        'settings' => "engagement_image_{$i}_2",
      ]));
    }
  }
  
}
add_action('customize_register', 'themefrugi_customizer_engagements');


?>
