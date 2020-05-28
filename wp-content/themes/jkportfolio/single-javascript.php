
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
					
					
					
					<div class="content-project content-project--green container txt-lft">
						<input type="text" name="userInput" id="userInput" placeholder="Type Something:" class="textbox">

						<div class="output" id="output">
						</div>

		                <p>This program utilizes the google CSE API to search amazon for kerywords inputted by the user. Go ahead and try it out by typing something in the text box and pressing enter.</p>
		                <div class="button__wrapper">
		                	<button class="button" id="code-btn">See the code</button>
		                </div>
		                <div class="output" id="code-output">
		                	Placeholder
		                </div>
					</div>
		</main>
	</div>
<?php get_footer(); ?>