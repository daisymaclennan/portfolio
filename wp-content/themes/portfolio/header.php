<?php $css = new Asset('main.css'); ?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title><?= get_the_title() ?></title>
    <meta name='description' content='<?= bloginfo('description'); ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--Connects to Google before any CSS is read meaning that the font will load quicker-->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <!--Links the google fonts link from which the pages fonts are from giving more diverse options for design-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:300,400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='<?= $css() ?>'>
    <meta property='og:title' content='<?= get_the_title() ?>' />
    <meta property='og:url' content='<?= get_the_permalink() ?>' />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1><?php the_field('name', 'option') ?></h1>
      <h2><?php the_field('tagline', 'option') ?></h1>
    </header>
    <div class="content-box">
    <?php get_template_part('Navigation');?>
      <div class="content">
