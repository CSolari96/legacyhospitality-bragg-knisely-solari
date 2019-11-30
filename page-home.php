<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<div class="video-container">

<?php get_header(); ?>
    <main class="video-text">
      <h2> Start your Legacy </h2>
      <div class="home-button">
      <a href="<?php echo get_page_link( get_page_by_title( ABOUT )->ID ); ?>">Link Title</a>
      </div>

    </main>
</div>

<?php get_footer(); ?>
