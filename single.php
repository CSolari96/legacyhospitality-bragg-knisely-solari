<?php get_header(); ?>

  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>

<!--Get the URL of the featured image to use as jumbotron background -->
      <?php
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      $thumb_url = $thumb_url_array[0];
      ?>

<!-- Get the subtitle -->
      <?php
      $subtitle = apply_filters( 'plugins/wp_subtitle/get_subtitle', '', array(
          'before'  => '<p class="subtitle">',
          'after'   => '</p>',
          'post_id' => get_the_ID()
      ) );
       ?>

<!-- Jumbotron header -->
      <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo $thumb_url; ?>)">
        <img class="square" src="<?php bloginfo('template_url'); ?>/img/square.png"/>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2> <?php echo $subtitle;?></h2>
              <hr>
              <h1> <?php the_title(); ?> </h1>
            </div>
          </div>
        </div>
      </div>


<!--Content-->
    <div class="container">
      <div class="row">
        <main class="col-md-12 post-content">

              <?php the_content(); ?>
              <p class="post-info"><?php echo "Published: " . get_the_date(); ?></p>
              <p>Category: <?php the_category(); ?></p> 
              <p class="post-info"><?php echo "Category: " . the_category(); ?></p>

        </main>
      </div>
    </div>



      <?php  }//ends while loop
      }//ends the if statement
     ?>



<?php get_footer(); ?>
