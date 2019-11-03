<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
  <div class="container">
    <main>
      <div class="row>">
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

      <div class="row">

        <div class="col-md-4">
          <?php dynamic_sidebar('title-what-we-offer'); ?>
        </div>

        <div class="col-md-8">
          <?php dynamic_sidebar('what-we-offer'); ?>
        </div>
      </div>

    </main>
  </div>

<?php get_footer(); ?>
