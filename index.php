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
              <p class="post-info"><?php echo "Published: " . get_the_date(); ?></p>

              <div class-"post-featured-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <?php the_content(); ?>
              <a class="btn btn-secondary btn-sm" href="<?php the_permalink(); ?>">Read more</a>
            </div>
        <?php  }//ends while loop
        }//ends the if statement
       ?>

    </main>
  </div>
</div>


<?php get_footer(); ?>
