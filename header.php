<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Animate JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

</head>

<body>
  <!-- - - - - - - - - - - - - - - -  Header - - - - - - - - - - - - - - - -->
  <header>
    <div class="container">
      <div class="column">
        <div class="navigation">
          <a href="<?php echo esc_url(home_url()); ?>" class="logo"><?php bloginfo('name'); ?></a>
          <?php
            $args = array(
            'theme_location' => 'primary'
          );
          ?>
          <?php wp_nav_menu(); ?>
          </ul>
        </div>
