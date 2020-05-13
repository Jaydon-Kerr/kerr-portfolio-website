
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
			<div id="top" class="content-header container">
				<h1>Hello, I'm <span class="highlight">Jaydon</span>.</h1>
				<h1>I'm a <span class="highlight">web designer</span> and <span class="highlight">developer</span>.</h1>
				<br>
				<video width="1280" height="720" controls>
					<source src="" type="video/mp4">
					Your browser does not support video tags - sad day :(
				</video>
				<!-- downward arrow icon goes here -->
				<div class="centered pad-bot">
					<h3 class="pad-top pad-bot">See what I can do.</h3>
					<i class="fas fa-long-arrow-alt-down fa-4x"></i>
				</div>
				

				<div class="book-nav centered">
					<ul class="book-nav__list">
						<li><a href="#websites" class="book-nav__link">Websites</a></li>
						<li><a href="#javascript" class="book-nav__link">JavaScript</a></li>
						<li><a href="#graphics" class="book-nav__link">Graphics</a></li>
					</ul>
				</div>
			</div>
			<div>
				<div id="websites" class="content-project content-project--teal container">
					<h1>Websites</h1>

					<?php 
						
						$websites = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'website',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						while ($websites->have_posts())
						{

							$websites->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="<?php the_permalink(); ?>">
							<div class="content-project__container content-project__container--teal">
								<div class="content-project__overlay"></div>
								<img class="content-project__image" src="<?php echo esc_url($featured_image_url); ?>">
								<h2 class="pad-top"><?php the_title(); ?></h2> 
							</div>
							</a>
							<?php
						}

						wp_reset_postdata();
						
					?>

					<?php 
						/*
						$websites = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'website',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						// index variable for while loop
						$webIndex = 1;

						while ($websites->have_posts())
						{
							// index variable for foreach loop
							$imgIndex = 1;

							$websites->the_post();
							// title
							?> <h5 class="project-example__heading"><?php the_title(); ?></h5> <?php
							
							// feature photo
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['medium']; // (thumbnail, medium, large, full or custom size)
							echo "<img src='" . esc_url($featured_image_url) . "'>";

							echo "<div id='website" . $webIndex . "'>";

							// photo gallery
							$images = acf_photo_gallery('images', $post->ID);
							foreach ($images as $image)
							{
								$full_image_url = $image['full_image_url'];
								$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); // resize the image
								echo "<img src='" . $full_image_url . "' id='website" . $webIndex . "-img" . $imgIndex . "'>";

								$imgIndex++;
							}
							?>
							<button id="website<?php echo $webIndex; ?>-left-btn">Left</button>
							<button id="website<?php echo $webIndex; ?>-right-btn">Right</button>
							<?php
							echo "</div>";

							$webIndex++;
						}

						wp_reset_postdata();
						*/
					?>

				</div>
				<div id="javascript" class="content-project content-project--green container">
					<h1>JavaScript</h1>
					<?php 
						
						$javascript = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'javascript',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						while ($javascript->have_posts())
						{

							$javascript->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="#">
								<div class="content-project__container content-project__container--green">
									<div class="content-project__overlay"></div>
									<img class="content-project__image" src="<?php echo esc_url($featured_image_url); ?>">
									<h2 class="pad-top"><?php the_title(); ?></h2> 
								</div>
							</a>
							<?php
						}

						wp_reset_postdata();
						
					?>
				</div>
				<div id="graphics" class="content-project content-project--yellow container">
					<h1>Graphics</h1>
					<?php 
						
						$graphics = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'graphic',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						while ($graphics->have_posts())
						{

							$graphics->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="#"><div class="content-project__container content-project__container--yellow">
								<div class="content-project__overlay"></div>
								<img class="content-project__image" src="<?php echo esc_url($featured_image_url); ?>">
								<h2 class="pad-top"><?php the_title(); ?></h2> 
							</div></a>
							<?php
						}

						wp_reset_postdata();
						
					?>
				</div>
				<div>
					<p class="pad-top pad-bot centered"><a href="#top">Back to top</a></p>
				</div>
			</div>
		</main>
	</div>



<?php get_footer(); ?>