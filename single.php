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
              <?php
                $archive_year = get_the_time('Y');
               ?>
               <div class="no-float-info">
                <p class="post-info"> Published: <a href="<?php echo get_year_link($archive_year);?>"><?php echo get_the_date();?></a></p> 
                <p class="category-post">Category: <?php the_category(); ?></p>
              </div>

        </main>
      </div>
    </div>



      <?php  }//ends while loop
      }//ends the if statement
     ?>



<?php get_footer(); ?>
