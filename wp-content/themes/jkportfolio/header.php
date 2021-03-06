<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/3b8e917ff1.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
<body>
	<div class="wrapper">
		<!-- header will float left -->
		<header id="left-bar">
				<div id="mobile-nav">
					<div class="col-80">
						<a href="<?php echo esc_url(get_home_url()); ?>">
							<h1 class="large-heading highlight">Jaydon Kerr</h1>
						</a>
					</div>
					<div class="col-20">
						<i id="ham-nav" class="clickable fas fa-bars fa-3x"></i>
					</div>
				</div>
				<nav id="main-nav">
					<a class="main-nav__hidden" href="<?php echo esc_url(get_home_url()); ?>">
						<h1 class="large-heading highlight">Jaydon</h1>
						<h1 class="large-heading highlight main-nav__main-link">Kerr</h1>
					</a>
					<ul>
						<li><a href="<?php echo esc_url(get_home_url()); ?>">Portfolio</a></li>
						<li><a href="<?php echo esc_url(get_home_url()) . '/about'; ?>">About</a></li>
					</ul>
				</nav>
				<div class="main-nav__footer">
					<p><a href="mailto:&#106;&#097;&#121;&#100;&#111;&#110;&#046;&#107;&#101;&#114;&#114;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;"><i class="fas fa-envelope-square"></i> Email</a></p>
					<p><a href="https://www.linkedin.com/in/jaydon-kerr/"><i class="fab fa-linkedin"></i> LinkedIn</a></p>
					<br>
					<p>&copy; Jaydon Kerr 2020</p>
				</div>
		</header>
		