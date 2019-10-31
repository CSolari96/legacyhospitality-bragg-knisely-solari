<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<?php get_header(); ?>
  <div class="container">
    <main>
      <div class="row">
        <div class="col-md-5">
          <?php dynamic_sidebar('about-legacy'); ?>

        <div class="col-md-7">
          <?php dynamic_sidebar('hero-image'); ?>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('what-we-offer'); ?>
        </div>
      </div>

    </main>
  </div>

<?php get_footer(); ?>
