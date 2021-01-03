
<?php get_header(); ?>

          <hgroup>
            <h1>Blog</h1>
          </hgroup>
          </div>
        </div>
    </header>
  </div>
  <!-- - - - - - - - - - - - - - - -  Blog - - - - - - - - - - - - - - - -->
  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="column">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="foto">
            <p class="meta"><?php the_author(); ?> | <?php echo get_the_date(); ?> </p>
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="article">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn">
              <?php _e('Ceo tekst'); ?>
            </a>
          </div>

        <?php endwhile; else : ?>
            <?php _e('Nema unetih blog postova'); ?>
        <?php endif; ?>

        </div>
        <div class="column">

<?php get_sidebar(); ?>

        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
