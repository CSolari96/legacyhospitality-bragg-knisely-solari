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

<!-- Jumbotron header -->
      <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo $thumb_url; ?>)">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1> <?php the_title(); ?> </h1>
            </div>
          </div>
        </div>
      </div>


<!--Content-->
    <div class="container">
      <div class="row">
        <main class="col-md-12">

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
         ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
