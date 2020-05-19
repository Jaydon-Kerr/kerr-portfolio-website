
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">

			<?php 

				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
			?>

					<div style="height: 8em;">
						<div class="col-33 centered" style="padding-top: 2em;">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="col-33 centered" style="padding-top: 2.8em;">
							<h1><?php the_title(); ?></h1> 
						</div>
					</div>

					<div class="content-project content-project--teal container txt-lft about">
			<?php

					the_content();

				endwhile;
				endif; 

			?>
					</div>
		</main>
	</div>
<?php get_footer(); ?>