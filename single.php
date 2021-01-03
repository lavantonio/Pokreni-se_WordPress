
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
  <header id="height">
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
      </div>
    </div>
  </header>
  <!-- - - - - - - - - - - - - - - -  Blog, Single - - - - - - - - - - - - - - - -->
  <div class="blog single">
    <div class="container">
      <div class="row">
        <div class="column">

          <div class="foto">

          </div>
          <div class="article">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>

        </div>
        <div class="column">
          <div class="widget">
            <h3>Kategorije</h3>
            <a href="">Roleri</a>
            <a href="">Biciklizam</a>
            <a href="">Planinarenje</a>
            <a href="">Setnja</a>
            <a href="">Trcanje</a>
          </div>
          <div class="widget">
            <h3>Poslednje sa bloga</h3>
            <a href="">Kupovina rolera</a>
            <a href="">Biciklizam po Fruskoj Gori</a>
            <a href="">Planinarenje na Zlatiboru</a>
            <a href="">Setnja Starom Planinom</a>
            <a href="">Kako istrcati maraton</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
