<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
<!--insert here--> 
				</div>

			<div class="col-lg-9 d-flex align-items-center">
				<nav>
					<?php
						if(has_nav_menu('top-menu')){
						wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
					}else{
						echo "Please select a top menu through the dashboard";
					}
					?>
				</nav>
		</div>
	</div>

	</header>
