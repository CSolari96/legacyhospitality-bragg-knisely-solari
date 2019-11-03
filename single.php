<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <div class="single-post-featured-image">
                <?php the_post_thumbnail('large') ?>
              </div>

              <h2 class="entry-title"><?php the_title(); ?></h2>

              <p class="post-information"><?php echo "<span class='bold'>Published: </span>" . get_the_date(); echo " | <span class= 'bold'>Written by: </span>" . get_the_author(); ?></p>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
         ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
