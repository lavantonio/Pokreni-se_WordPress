
<?php get_header(); ?>

          <hgroup>
            <h1>Kontakt</h1>
          </hgroup>
          </div>
        </div>
    </header>
  </div>
  <!-- - - - - - - - - - - - - - - -  Kontakt - - - - - - - - - - - - - - - -->
  <div class="kontakt">
    <div class="container">
      <div class="row">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
        <?php endwhile; else : ?>
        <?php _e('Nema unetih strana'); ?>
        <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
