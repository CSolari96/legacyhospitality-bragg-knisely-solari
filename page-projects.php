<?php

/*
Template Name: Projects Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">

<!-- Code used to display all posts on one screen -->

      <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

      <?php if ( $wpb_all_query->have_posts() ) : ?>

   <!-- the loop -->
   <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 project-container animated fadeInUp delay1 duration1 eds-on-scroll ">
              <?php the_post_thumbnail("large");?>
              <h1 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>
          </div>
        </div>

    <?php endwhile; ?>
    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>
    </div>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


    </div> <!-- ends col-md-12-->

  </div>

</div>
<?php get_footer(); ?>
