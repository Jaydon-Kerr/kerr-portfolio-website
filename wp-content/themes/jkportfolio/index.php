
<?php get_header(); ?>

	<!-- right float content -->
	<main>
		<div class="container">
			<h1>Hello, I'm Jaydon.</h1>
			<h1>I'm a web designer and developer.</h1>
			<video width="320" height="240" controls>
				<source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
				Your browser does not support video tags - sad day :(
			</video>
			<!-- downward arrow icon goes here -->
			<p>See what I can do.</p>

			<div class="book-nav">
				<a href="#">Websites</a>
				<a href="#">JavaScript/jQuery API's</a>
				<a href="#">Graphics</a>
			</div>
		</div>
		<div class="container color">
			<h2>Websites</h2>

			<?php
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
			?>

		</div>
		<div class="container">
			<h2>JavaScript/jQuery API's</h2>
		</div>
		<div class="container color">
			<h2>Graphics</h2>
		</div>
	</main>









<!-- <?php
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
	?> <h5 class="project-example__heading"><?php the_title(); ?></h5> <?php
	$images = acf_photo_gallery('images', $post->ID);
	foreach ($images as $image) {
		$full_image_url = $image['full_image_url'];
		$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); // resize the image
		echo "<img src='" . $full_image_url . "'>";
	}

	}

	wp_reset_postdata();
?> -->

<?php get_footer(); ?>