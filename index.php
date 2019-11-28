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

              <?php
                $archive_year = get_the_time('Y');
               ?>
              <p class="post-info"> Published: <a href="<?php echo get_day_link($archive_year);?>"><?php echo get_the_date(); ?></a>
              <p>Category: <?php the_category(); ?></p>

              <div class-"post-featured-image">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <?php the_content(); ?>
              <a class="btn btn-secondary btn-sm project-buttons" href="<?php the_permalink(); ?>">Read more</a>
            </div>
        <?php  }//ends while loop
        }//ends the if statement
       ?>

       <div class="pagination-links">
         <?php
             global $wp_query;

             $big = 999999999; // need an unlikely integer

             echo paginate_links( array(
             'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
              ) );

              ?>

       </div> <!--ends pagniation div--> 

    </main>
  </div>
</div>


<?php get_footer(); ?>
