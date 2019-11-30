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

        <?php $args = array('post_type' => 'menu_items', 'posts_per_page' => 4);

        $loop = new WP_Query($args);

        while($loop->have_posts()): $loop->the_post();   //to display loop ?>

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
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


    </div> <!-- ends col-md-12-->

  </div>

  <div class="pagination-numbers">        <!---NEED TO FIND OUT WHY THIS IS NOT WORKING-->
    <?php echo paginate_links( $args ); ?>
  </div>
</div>
<?php get_footer(); ?>
