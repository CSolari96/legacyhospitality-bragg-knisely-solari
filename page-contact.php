<?php

/*
Template Name: Contact Page Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>
  <div class="container">
    
    <div class="row">  

      <main>

        <section class="col-md-6">

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

      </main>

    </div>
    
  </div>

<?php get_footer(); ?>
