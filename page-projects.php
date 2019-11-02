<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="col-md-12">

                <h2 class="entry-title"><?php the_title(); ?></h2>
                <p class="post-info"><?php echo "Published " . get_the_date(); ?></p>
                <?php the_excerpt(); ?>

                <a class="btn btn-secondary btn-sm" href="<?php the_permalink(); ?>">Read more</a>
              <?php the_content(); ?>
              </div>
          <?php  }//ends while loop
          }//ends the if statement
         ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
