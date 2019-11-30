<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<div class="video-container">

<?php get_header(); ?>
    <main class="home-page">
      
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>

          <?php the_content(); ?>

    </main>
</div>

<?php get_footer(); ?>
