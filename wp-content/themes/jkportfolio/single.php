
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
				<?php
					the_post();
					// need to populate array with images
					$featured_image = get_field('featured_image');
					$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)

					?>
					<div style="height: 8em;">
						<div class="three-col centered" style="padding-top: 2em;">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="three-col centered" style="padding-top: 2.8em;">
							<h1><?php the_title(); ?></h1> 
						</div>
					</div>
					
					
					
					<div class="content-project content-project--teal container">
						<a href="#" onClick="return false;" style="cursor: default;">
							<div class="content-project__container content-project__container--teal content-project--no-margin">
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
							</div>
						</a>
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

		</main>
	</div>
<?php get_footer(); ?>