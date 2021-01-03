
<?php get_header(); ?>

        <hgroup>
          <h1><?php the_field('naslovna'); ?></h1>
          <h4><?php the_field('tekst_ispod_naslovne'); ?></h4>
        </hgroup>
        </div>
      </div>
  </header>
  <!-- - - - - - - - - - - - - - - -  O nama - - - - - - - - - - - - - - - -->
  <div class="oNama">
    <div class="container">
      <div class="column">
        <h2><?php the_field('drugi_naslov'); ?></h2>
        <p><?php the_field('1_paragraf_ispod_drugog_naslova'); ?></p>
        <p><?php the_field('2_paragraf_ispod_drugog_naslova'); ?></p>
        <p><?php the_field('3_paragraf_ispod_drugog_naslova'); ?></p>
        <p><?php the_field('4_paragraf_ispod_drugog_naslova'); ?></p>
      </div>
    </div>
  </div>
  <!-- - - - - - - - - - - - - - - -  Tema - - - - - - - - - - - - - - - -->
  <div class="tema">
    <div class="container">
      <div class="column">
        <h2><?php the_field('3_naslov'); ?></h2>
        <p><?php the_field('tekst_ispod_3_naslova'); ?></p>
      </div>
      <div class="row">
        <div class="column">
          <h3>Sport i rekreacija</h3>
          <i class="fas fa-running"></i>
        </div>
        <div class="column">
          <h3>Posao iz snova</h3>
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="column">
          <h3>Zdrava ishrana</h3>
          <i class="fas fa-carrot"></i>
        </div>
      </div>
    </div>
  </div>
<!-- - - - - - - - - - - - - - - -  Poziv - - - - - - - - - - - - - - - -->
  <div class="poziv">
    <div class="container">
      <div class="column">
        <h2><?php the_field('3_naslov'); ?></h2>
        <p><?php the_field('1_paragraf_ispod_cetvrtog_naslova'); ?></p>
        <p class="bacColor"><?php the_field('2_paragraf_ispod_cetvrtog_naslova'); ?></p>
        <a href="" class="btn">Prijavi se</a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
