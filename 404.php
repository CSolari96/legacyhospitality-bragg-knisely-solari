<?php get_header(); ?>
<main class="container cannot-find-page">
  <div class="row">

    <div class="col-md-6">
      <h2 class="bold">We truly <span class="red">apologize...</span></h2>
	  <p>We appreciate your business, but that link no longer exists. Please head back to our <a href="<?php echo home_url('/');?>">homepage</a> to learn more about Legacy Hospitality.</p>
    </div>

    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri() . '/img/sorry-pencil.jpg'?>" alt="Error message" />
    </div>
  </div>
</main>
  <?php get_footer(); ?>