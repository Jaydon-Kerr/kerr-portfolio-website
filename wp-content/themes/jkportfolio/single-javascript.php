
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
			<script type="text/javascript">
				<?php echo get_field("code"); ?>
			</script>
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
					
					
					
					<div class="content-project content-project--green container txt-lft">
						<input type="text" name="userInput" id="userInput" placeholder="Type Something:" class="textbox">

						<div id="output">
						</div>

		                <p>This is the description. This API does stuff.</p>

					</div>
		</main>
	</div>
<?php get_footer(); ?>