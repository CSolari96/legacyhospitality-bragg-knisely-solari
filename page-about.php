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

        <h1 class= "knowledge-power-title"><span id="h1-monserret">KNOWLEDGE <span class="red">+</span><br /> PASSION <span class="red">=</span></span><br /><span id="h1-gotham">POWER</span></h1>
      
      </div>
        
      <?php dynamic_sidebar('hero-image'); ?>
        
      <div class="container">
      
        <?php dynamic_sidebar('about-legacy'); ?>
      
      </div>
          
    </section>

    <section class="top-bottom-space">
          
        <?php dynamic_sidebar('title-what-we-offer'); ?>
  
        <?php dynamic_sidebar('what-we-offer'); ?>
                
    </section>

  </main>

<?php get_footer(); ?>
