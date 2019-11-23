<?php /* Template Name: Archive Page */

get_header();
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-12 individual-posts">
            <h3 class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
            <p>Published on: <?php the_time('F j, Y');?></p>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>">Read More</a>
          </div>
          <?php
        }// ends while loop
      } //ends if statement
      ?>

    </div>
</div>

<?php get_footer(); ?>
