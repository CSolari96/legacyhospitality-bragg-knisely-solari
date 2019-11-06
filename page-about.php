<?php

/*
Template Name: About Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
  <div class="container">
    <main>
      <section class="red-left-border">
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
      <div class="row">

        <div class="col-md-4">
          <?php dynamic_sidebar('title-what-we-offer'); ?>
        </div>

        <div class="col-md-8">
          <?php dynamic_sidebar('what-we-offer'); ?>
        </div>
      </div>
    </section>

    </main>
  </div>

<?php get_footer(); ?>
