<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo("name"); ?></title>

	<?php wp_head(); ?>

</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<?php if(get_header_image()== ''){ ?>
						<h1><a href=""><?php bloginfo('name'); ?></a></h1><?php
					} ?>
				</div>

			<div class="col-lg-9">
		</div>
	</div>


	</header>
