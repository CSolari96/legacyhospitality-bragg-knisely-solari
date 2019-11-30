<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<div class="video-container">

<?php get_header(); ?>
    <div class="video-text">

      <h2> - Start your Legacy - </h2>

      <div class="button-flex">
        <div class="home-button">
          <a href="<?php echo get_page_link( get_page_by_title( ABOUT )->ID ); ?>">Learn More</a>
        </div>
      </div>

    </div>
</div>

<?php get_footer(); ?>
