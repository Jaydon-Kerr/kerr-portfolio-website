
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
			<div style="width: 100%;">
				<p>this is the single.php page!</p>
				<?php
					the_post();
					// need to populate array with images
					$featured_image = get_field('featured_image');
					$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)

					?>
					<div class="jcarousel">
						<ul>
							<!-- output feature image here -->
							<li>
								<img src="<?php echo esc_url($featured_image_url); ?>">
							</li>
							<!-- output all other images here -->
							<?php
								$images = acf_photo_gallery('images', $post->ID);
								foreach ($images as $image)
								{
									$full_image_url = $image['full_image_url'];
									?>
									<li>
										<img src="<?php echo $full_image_url; ?>">
									</li>
									<?php
								}
							?>
						</ul>
					</div>
					<!-- Prev/next controls -->
                <a href="#" class="jcarousel-control-prev">&lsaquo; Prev</a>
                <a href="#" class="jcarousel-control-next">Next &rsaquo;</a>

                <!-- Pagination -->
                <p class="jcarousel-pagination">
                    <!-- Pagination items will be generated in here -->
                </p>
					<?php
				?>
			</div>
		</main>
	</div>
<?php get_footer(); ?>
<!-- 
<?php
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
							?> -->