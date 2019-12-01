<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/
 ?>

<div class="video-container">

<?php get_header(); ?>
    <div class="video-text">

      <h2> - Start your Legacy - </h2>

      <div class="button-flex">
        <div class="home-button">
          <a href="<?php echo get_page_link( get_page_by_title( ABOUT )->ID ); ?>">Learn More</a>
        </div>
      </div>

    </div>
</div>

<main>

	<div class="container">

		<section class="row">

			<div class="col-md-12">

				<?php dynamic_sidebar('legacy-intro'); ?>

			</div>

		</section>

		<section class="row">

			<div class="col-md-4 flip-image">

				<?php dynamic_sidebar('home-left'); ?>

			</div>

			<div class="col-md-4 flip-image">

				<?php dynamic_sidebar('home-middle'); ?>

			</div>

			<div class="col-md-4 flip-image">

				<?php dynamic_sidebar('home-right'); ?>

			</div>

		</section>

	</div>

	<section class="top-bottom-space">
          
        <div class="container">
        
        	<?php dynamic_sidebar('title-what-we-offer'); ?>

    	</div>
  
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
