<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
				</div>
				<div class="col-md-7 text-right">
					<h2 class="slogan">National Retirement Benefits Association</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Header_Nav')); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>