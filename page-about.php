<?php

/*
Template Name: About Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
  <main>

    <section class="red-left-border">

      <div class="container">

        <?php dynamic_sidebar('company-motto'); ?>
      
      </div>
        
      <?php dynamic_sidebar('hero-image'); ?>
        
      <div class="container about-legacy">
      
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
         ?>
      
      </div>
          
    </section>

    <section class="container">

      <?php dynamic_sidebar('interview-video'); ?>

    </section>

  </main>

<?php get_footer(); ?>
