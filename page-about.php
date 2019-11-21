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

    <section class="top-bottom-space">
          
        <?php dynamic_sidebar('title-what-we-offer'); ?>
  
        <div class="what-we-offer">

          <div class="diamond-grid-row">

            <div class="diamond diamond3 light-gray-bkg">
              <?php dynamic_sidebar('service-1'); ?>
            </div>

            <div class="diamond diamond5 red-bkg">
              <?php dynamic_sidebar('service-2'); ?>
            </div>
            
            <div class="diamond diamond6 light-gray-bkg"></div>

          </div>

          <div class="diamond-grid-row">

            <div class="diamond diamond1 gray-bkg">
              <?php dynamic_sidebar('service-3'); ?>
            </div>
            
            <div class="diamond diamond2 red-bkg">
              <?php dynamic_sidebar('service-4'); ?>
            </div>
            
            <div class="diamond diamond3 gray-bkg">
              <?php dynamic_sidebar('service-5'); ?>
            </div>
            
            <div class="diamond diamond4 gray-bkg">
              <?php dynamic_sidebar('service-6'); ?>
            </div>

            <div class="diamond diamond5 light-gray-bkg">
              <?php dynamic_sidebar('service-7'); ?>
            </div>
            
            <div class="diamond diamond6 gray-bkg"></div>
          
          </div>

        </div>
                
    </section>

  </main>

<?php get_footer(); ?>
