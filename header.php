<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<style>
		@font-face {
		  font-family: 'Gotham Black';
		  src: url('<?php bloginfo('template_url'); ?>/fonts/gotham-black.otf') format('opentype');
		}
	</style>

	<?php wp_head(); ?>

</head>

<body>

	<header>

		<nav class="mobile-menu">

			<p class="close-menu-container"><a href="javascript:void()" id="close-menu">&times;</a></p>

			<?php
				if (has_nav_menu('top-menu')) {

					wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'mobile-top-menu-class'));

				} else {

					echo "Please select a top menu through the dashboard";
				}
			?>

		</nav>

		<div class="container">

			<div class="row header-row">

				<div class="col-9 col-md-3 logo">

					<?php
						if (get_header_image() == '') { ?>

							<h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?></a></h1>

				  	<?php } else { ?>

							<a href="<?php echo get_home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>

					<?php } ?>

				</div>

				<div class="col-3 col-md-9 justify-content-between" id="top-menu">

					<span id="open-mobile-menu" class="open-menu">&#9776;</span>

					<nav class="desktop-nav">

						<?php
							if (has_nav_menu('top-menu')) {

								wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));

							} else {

								echo "Please select a top menu through the dashboard";

							}
						?>
					</nav>

				</div>

			</div>

		</div>

	</header>
