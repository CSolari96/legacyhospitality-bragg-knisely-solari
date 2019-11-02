<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="col-md-12">
              </div>
              <h2 class="entry-title"><?php the_title(); ?></h2>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
         ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
