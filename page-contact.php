<?php

/*
Template Name: Contact Page Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>

  <main class="container">

    <div class="row">

      <section class="col-md-6 contact-form">

        <?php dynamic_sidebar("contact-form"); ?>

      </section>

      <section class="col-md-6">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
         ?>
     </section>

    </div>

  </main>

<?php get_footer(); ?>
