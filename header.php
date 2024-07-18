<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta property="og:title" content="Selfish Blissful Baboon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta property="twitter:card" content="summary_large_image" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/index.css" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/sp.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
  <title>
    <?php wp_title(' | ', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="main-navigation main-navigation-pc">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/external/logo160-dxy.svg" alt="logo160"
        class="home-logo" /></a>
      <img src="<?php echo get_template_directory_uri(); ?>/images/external/mainvisual161-tp0a-1500w.png"
        alt="mainvisual161" class="home-mainvisual" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/external/sp_main-visual.png"
        alt="spvisual" class="sp-mainvisual" />

      <ul class="font-serif">
        <li class="home-text"><a href="<?php echo home_url(); ?>/menu/">menu</a></li>
        <li class="home-text02"><a href="<?php echo home_url(); ?>/news/">blog</a></li>
        <li class="home-text04"><a href="<?php echo home_url(); ?>/contact/">contact</a></li>
      </ul>
    </nav>
  </header>