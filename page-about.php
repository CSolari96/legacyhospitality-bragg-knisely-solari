<?php

/*
Template Name: About Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
  <main>

    <section class="container red-left-border">

      <div class="row">

        <h1 class= "knowledge-power-title"><span id="h1-monserret">KNOWLEDGE <span class="red">+</span><br /> PASSION <span class="red">=</span></span><br /><span id="h1-gotham">POWER</span></h1>
      
      </div>

      <div class="row">

        <div class="col-md-5">
        
          <?php dynamic_sidebar('about-legacy'); ?>
        
        </div>

        <div class="col-md-7">
        
          <?php dynamic_sidebar('hero-image'); ?>
        
        </div>
      
      </div>
    
    </section>

    <section class="top-bottom-space">
          
        <?php dynamic_sidebar('title-what-we-offer'); ?>
  
        <?php dynamic_sidebar('what-we-offer'); ?>
                
    </section>

  </main>

<?php get_footer(); ?>
