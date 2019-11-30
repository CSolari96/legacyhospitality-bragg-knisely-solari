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

      <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>2)); ?>

      <?php if ( $wpb_all_query->have_posts() ) : ?>

   <!-- the loop -->
   <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 project-container">
              <?php the_post_thumbnail("large");?>
              <h1 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>
          </div>
        </div>

    <?php endwhile; ?>
    <!-- end of the loop -->

    <div class="pagination-number">        <!---NEED TO FIND OUT WHY THIS IS NOT WORKING-->
      <?php
         global $wp_all_query;

         $big = 999999999; // need an unlikely integer

         echo paginate_links( array(
         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
         'format' => '?paged=%#%',
         'current' => max( 1, get_query_var('paged') ),
         'total' => $wp_all_query->max_num_pages
          ) );

  ?>
    </div>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


    </div> <!-- ends col-md-12-->

  </div>

</div>
<?php get_footer(); ?>
