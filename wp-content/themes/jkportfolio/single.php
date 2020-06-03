
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
				<?php
					the_post();
					// need to populate array with images
					$featured_image = get_field('featured_image');
					$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)

					?>
					<div class="interior-header">
						<div class="col-33 centered interior-header__left">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="col-33 centered interior-header__mid">
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
						<div class="pad-top pad-bot-2x">
							<div class="col-10">
								<a href="#" class="jcarousel-control-prev"><i class="fas fa-arrow-left fa-2x"></i></a>
							</div>
							<div class="col-80">
								<div class="jcarousel-pagination">
				                    <!-- Pagination items will be generated in here -->
				                </div>

							</div>
							<div class="col-10 arrow-right">
								<a href="#" class="jcarousel-control-next"><i class="fas fa-arrow-right fa-2x"></i></a>
							</div>
						</div>
						<!-- Pagination -->
		                

						<!-- Prev/next controls -->
						
                		
                		<!-- TODO: change inline style to external less file -->
		                <p class="txt-lft clr"><?php echo get_field("description"); ?></p>

					</div>
               
					<?php
				?>

		</main>
	</div>
<?php get_footer(); ?>